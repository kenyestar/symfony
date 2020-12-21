<?php

namespace App\Controller;

use App\Form\PollType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PollController extends AbstractController
{
    /**
     * @Route("/poll", name="poll")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pollForm = $this->createForm(PollType::class, null, [
            'method' => 'POST',
        ]);

        $pollForm->handleRequest($request);

        if ($pollForm->isSubmitted() && $pollForm->isValid()) {
            $formData = $pollForm->getData();

          dump($formData);  die();
        }


        return $this->render('poll/index.html.twig', [
            'poll' => $pollForm->createView()
        ]);
    }
}
