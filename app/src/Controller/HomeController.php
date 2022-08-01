<?php

namespace App\Controller;

use App\Model\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path:'/', name:'app_home_index')]
    public function index(): Response {

        $person = new Person("lena");

        return $this->render('home/index.html.twig', [
            'model' => $person,
        ]);
    }


    #[Route(path:'/overview', name:'app_home_overview')]
    public function overview(): Response {

        $person = new Person("lena");

        return $this->render('home/overview.html.twig', [
            'model' => $person,
        ]);
    }
}
