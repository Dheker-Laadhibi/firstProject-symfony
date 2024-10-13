<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Seance3AController extends AbstractController

//route w name w esm fonction yetbadlo 
{
    #[Route('/seance3/a', name: 'app_seance3_a')]
    public function index(): Response
    {
        return $this->render('seance3_a/index.html.twig', [
            'controller_name' => 'Seance3AController',
        ]);
    }

  


}
