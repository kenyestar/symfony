<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use App\Repository\PartnersRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MainController
 * @package App\Controller
 */
class MainController extends AbstractController
{
    /**
     * @var TeamRepository
     */
    private $teamRepository;
    /**
     * @var PartnersRepository
     */
    private $partnersRepository;
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * MainController constructor.
     * @param TeamRepository $teamRepository
     * @param PartnersRepository $partnersRepository
     * @param NewsRepository $newsRepository
     */
    public function __construct(
        TeamRepository $teamRepository,
        PartnersRepository $partnersRepository,
        NewsRepository $newsRepository
    )
    {
        $this->teamRepository = $teamRepository;
        $this->partnersRepository = $partnersRepository;
        $this->newsRepository = $newsRepository;
    }

    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $teams = $this->teamRepository->findBy([], [], 5);
        $partners = $this->partnersRepository->findBy([], [], 6);
        $news = $this->newsRepository->findBy([], [], 5);

        return $this->render('main/index.html.twig', [
            'teams' => $teams,
            'partners' => $partners,
            'news' => $news
        ]);
    }
}