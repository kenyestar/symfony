<?php

namespace App\Controller;

use App\Entity\Form;
use App\Form\ContactType;
use App\Repository\FormRepository;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    const TELEGRAM_TOKEN = '1493453719:AAGbJNOLV9583-jXAmlDi575b7-AvKKqDR4';
    const TELEGRAM_CHATID = '@botform1712';

    /**
     * @var FormRepository
     */
    private FormRepository $formRepository;

    /**
     * ContactController constructor.
     * @param FormRepository $formRepository
     */
    public function __construct(FormRepository $formRepository)
    {
        $this->formRepository = $formRepository;
    }

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return Response
     * @throws ORMException
     */
    public function index(Request $request)
    {
        $formEntity = new Form();
        $form = $this->createForm(ContactType::class, $formEntity, [
            'method' => 'POST',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $this->formRepository->save($formData); // сохранение в базу
            $this->sendTelegram($formData); // отправка в телегу

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @param Form $formData
     */
    private function sendTelegram(Form $formData): void
    {
        $name = $formData->getName();
        $email = $formData->getEmail();

        $textMessages = "Привет вам письмо с вошего сайта от клиента:" . " Имя : $name ,  Email: $email";

        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . self::TELEGRAM_TOKEN . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => self::TELEGRAM_CHATID,
                    'text' => $textMessages,
                ),
            )
        );
        curl_exec($ch);
    }
}

