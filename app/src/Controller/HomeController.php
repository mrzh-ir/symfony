<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path:'/', name:'app_home_index')]
    public function index(): Response {

        return $this->render('home/index.html.twig');
    }


    #[Route(path:'/overview', name:'app_home_overview')]
    public function overview(): Response {
        return $this->render('home/overview.html.twig');
    }
}
