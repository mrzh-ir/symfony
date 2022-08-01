<?php

namespace App\Controller;

use App\Model\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path:'/{name}', name:'app_home_index')]
    public function index(string $name): Response {

        $person = new Person($name);

        return $this->render('home/index.html.twig', [
            'model' => $person,
        ]);
    }
}
