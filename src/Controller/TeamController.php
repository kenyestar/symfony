<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @var TeamRepository
     */
    private $teamRepository;

    /**
     * TeamController constructor.
     * @param TeamRepository $teamRepository
     */
    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * @Route("/team", name="team")
     */
    public function index()
    {
        $teams = $this->teamRepository->findAll();

        return $this->render('team/index.html.twig', [
            'teams' => $teams
        ]);
    }
}
