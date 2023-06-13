<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{

    private $wishes =[
        1 => "Rencontrer Chuck Norris",
        2 => "Faire le tour du monde",
        3 => "Arriver à coder toute seule",
        4 => "Rencontrer Sylvain la Licorne",
        5 => "Un kahoooot"
    ];


    #[Route('/wish/', name: 'app_list')]
    public function index(): Response
    {
        return $this->render('wish/list.html.twig', [
            'controller_name' => 'WishController',
            'wishes'=>$this->wishes
        ]);
    }

    #[Route('/wish/detail/{id}', name: 'wish_detail', requirements: ["id"=>"\d+"])]
    public function detail($id): Response
    {
        $arrayKeys = array_keys(($this->wishes));

    if (!in_array($id, $arrayKeys)){
        $wish = "Une valeur par défaut";


    }else{$wish = $this->wishes[$id];
    }
        return $this->render('wish/detail.html.twig', [
            'controller_name' => 'Wish_detail',
        'wish'=>$wish
        ]);
    }
}
