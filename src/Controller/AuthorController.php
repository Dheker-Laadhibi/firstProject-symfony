<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }





    #[Route('/affiche', name: 'affiche')]
    public function affiche(AuthorRepository $rep): Response
    {

        $authors = $rep->findAll();                                                                                                                                       
        return $this->render('author/index.html.twig', [
       
            'authors'=>$authors,
    ]);
    }


    
    #[Route('/addDynamic', name: 'addDynamic')]
    public function addDynamic(   EntityManagerInterface $em, Request $req): Response
    {
        
        $author = new Author();
$form = $this->createForm(AuthorType::class, $author);
$form->add('send',SubmitType::class);
$form->handleRequest($req);
        if($form->isSubmitted()  ){
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute('affiche');
        }
    
            return $this->renderForm('author/ff.html.twig', [
       
                'f'=>$form,
        ]);
        
                                                                                                                                            
    
    }




}
