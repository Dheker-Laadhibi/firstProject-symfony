<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
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





    #[Route('/author/{name}', name: 'author')]
    public function showAuth(string $name): Response
    {

        return $this->render('author/index.html.twig', [
       
            'name' => $name,
        ]);

    }



    
    #[Route('/authorTable', name: 'authorTable')]
    public function listAuthors (): Response
    {

        $authors = array(
            array('id' => 1, 'picture' => 'images/victor_hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor@gmail.com', 'nbBooks' => 100),
            array('id' => 3, 'picture' => 'images/taha.jpeg', 'username' => 'Taha', 'email' => 'taha@gmail.com', 'nbBooks' => 200),
            array('id' => 2, 'picture' => 'images/shikspear.jpeg', 'username' => 'Shakespeare', 'email' => 'shakespeare@gmail.com', 'nbBooks' => 300),
        );
    
        return $this->render('author/list.html.twig', [
            'authors' => $authors,
        ]);


}

#[Route('/author/details/{id}', name: 'author_details')]
public function authorDetails(int $id): Response
{
    // Liste des auteurs
    $authors = [
        ['id' => 1, 'picture' => '/images/victor_hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
        ['id' => 2, 'picture' => '/images/shikspear.jpg', 'username' => 'Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
        ['id' => 3, 'picture' => '/images/taha.jpeg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
    ];

    // Filtrer l'auteur par id
    $author = array_filter($authors, fn($a) => $a['id'] === $id);

    // Vérifier si l'auteur existe
    if (empty($author)) {
        throw $this->createNotFoundException('Auteur non trouvé');
    }

    // Prendre le premier (et unique) auteur trouvé
    $author = array_shift($author);

    // Rendre le template avec les données de l'auteur
    return $this->render('author/details.html.twig', ['author' => $author]);
}




//migrate

#[Route('/read', name: 'read')]
public function read( AuthorRepository $rep): Response
{


    $list=$rep->findAll();
    return $this->render('author/affiche.html.twig', [
        'authors' => $list,
    ]);
}


#[Route('/AddStatic', name: 'AddStatic')]
public function AddStatic( EntityManagerInterface $em): Response
{
    
$author1 = new  Author();
$author1->setUsername("nour");
$author1->setEmail("badraaaaNouNouuu");
    $em->persist($author1);
    $em->flush();

    return $this->redirectToRoute('read');

}



#request mwjouda fl http foundation 
#[Route('/Add', name: 'Add')]
public function Add( EntityManagerInterface $em   , Request $req): Response
{
    
$author1 = new  Author();
#type de author type class
$form =$this->createForm(AuthorType::class, $author1);
$form->add('send',SubmitType::class);
$form->handleRequest($req);

if($form -> isSubmitted()){
    $em->persist($author1);
    $em->flush();
    return $this->redirectToRoute('read');
}
else {
return  $this->renderForm('author/ajout.html.twig',["f"=>$form] );
}

   


}




#request mwjouda fl http foundation 
#[Route('/edit{id}', name: 'edit')]
public function edit( EntityManagerInterface $em   , Request $req , $id,AuthorRepository $rep ): Response
{
    
$author1 = $rep->find($id);
#type de author type class
$form =$this->createForm(AuthorType::class, $author1);
$form->add('edit',SubmitType::class);
$form->handleRequest($req);

if($form -> isSubmitted()){
    $em->persist($author1);
    $em->flush();
    return $this->redirectToRoute('read');
  
}


return  $this->renderForm('author/edit.html.twig',["f"=>$form] );
}

   
#request mwjouda fl http foundation 
#[Route('/remove{id}', name: 'remove')]
public function remove( EntityManagerInterface $em    , $id,AuthorRepository $rep ): Response
{
    
$author1 = $rep->find($id);
$em ->remove($author1);
$em->flush();
    return $this->redirectToRoute('read');
  




}

   


}

