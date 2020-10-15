<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConsultingController extends AbstractController
{
    /**
     * @Route("/consulting", name="consulting")
     */
    public function index()
    {
        return $this->render('consulting/consulting.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
