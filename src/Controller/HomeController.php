<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   #[Route('/', name: 'app_home')]
   public function index(): Response
   {

      $users = [
         [
            'id'   => '1',
            'titre' => 'Reebok',
            'image' => 'Assets/Images/reebok.jpg',
            'description' => 'Baskets Classic Nylon GW8357 White Vector ',
            'prix' => '74.95'
         ],
         [
            'id'   => '2',
            'titre' => 'New balance',
            'image' => 'Assets/Images/newbalance.jpg',
            'description' => 'Baskets Lifestyle 500 GM500SWB White ',
            'prix' => '84,99'
         ],
         [
            'id'   => '3',
            'titre' => 'Adidas Originals',
            'image' => 'Assets/Images/adidas.jpg',
            'description' => 'Baskets Continental 80 Stripes FX5090 Footwear ',
            'prix' => '109.99'
         ],
         [
            'id'   => '4',
            'titre' => 'Puma',
            'image' => 'Assets/Images/puma.jpg',
            'description' => 'Basket Puma white RS-FAST LIMITER',
            'prix' => '66'
         ],
         [
            'id'   => '5',
            'titre' => 'LACOSTE',
            'image' => 'Assets/Images/lacoste.jpg',
            'description' => 'Lacoste AirLine L005',
            'prix' => '99,50'
         ],
         [
            'id'   => '6',
            'titre' => "D'PLOY",
            'image' => 'Assets/Images/dploy.jpg',
            'description' => 'Lacoste AirLine L005',
            'prix' => '54,99'
         ],

      ];

      return $this->render('home/index.html.twig', [
         'controller_name' => 'HomeController',
         'card' => $users,
      ]);
   }

   #[Route('/about', name: 'app_about')]
   public function about(): Response
   {
      return $this->render('home/about.html.twig', []);
   }
}
