<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $appTitle = "Bucket List";
        return $this->render('main/index.html.twig', [
            'appTitle' => $appTitle,
        ]);
    }
    #[Route('/about_us', name: 'app_about_us')]
    public function aboutUs(): Response
    {
        return $this->render('main/about_us.html.twig', [
        ]);
    }

}


