<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
     /**
      * @Route(
      *     "/",
      *     name="home"
      * )
      */
     public function index()
     {
         $number = mt_rand(0, 100);

         return $this->render('home.html.twig', [
            'number' => $number,
         ]);
     }
}
