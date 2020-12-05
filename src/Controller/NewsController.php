<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * NewsController constructor.
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }


    /**
     * @Route("/news", name="news")
     */
    public function index()
    {
        $news = $this->newsRepository->findAll();

        return $this->render('news/index.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @Route("/news/{id}", name="news_page")
     * @param int $id
     * @return Response
     */
    public function newsPage(int $id)
    {
        $newsPage = $this->newsRepository->findOneBy([
            'id' => $id
        ]);

        if ($newsPage === null) {
            throw $this->createNotFoundException('News page not found!!!');
        }

        return $this->render('news/page.html.twig', [
            'newsPage' => $newsPage
        ]);
    }
}
