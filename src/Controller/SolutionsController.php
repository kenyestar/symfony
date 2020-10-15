<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SolutionsController extends AbstractController
{
    /**
     * @Route("/solutions", name="solutions")
     */
    public function index()
    {
        return $this->render('solutions/solutions.html.twig', []);
    }
}
