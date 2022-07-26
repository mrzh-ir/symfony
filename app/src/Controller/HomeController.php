<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route(path:'/{firstName}', name:'app_home_index')]
    public function index(string $firstName): Response {
        return new Response("<h1>Hello $firstName</h1>");
    }
}
