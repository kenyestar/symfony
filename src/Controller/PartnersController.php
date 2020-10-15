<?php

namespace App\Controller;

use App\Repository\PartnersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PartnersController extends AbstractController
{
    /**
     * @var PartnersRepository
     */
    private $partnersRepository;

    /**
     * PartnersController constructor.
     * @param PartnersRepository $partnersRepository
     */
    public function __construct(PartnersRepository $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    /**
     * @Route("/partners", name="partners")
     */
    public function index()
    {
        $partners = $this->partnersRepository->findAll();

        return $this->render('partners/partners.html.twig', [
            'partners' => $partners
        ]);
    }
}
