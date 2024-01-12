<?php
// On inclut la classe de base AbstractController de Symfony
namespace App\Controller;

// On inclut les classes Response et Route de Symfony
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// On définit la classe PageController qui hérite de AbstractController
class PageController extends AbstractController
{
    /**
     * Ici on crée une nouvelle routes pour la page
     * On a besoin de créer une nouvelle vue page/index.html.twig
     */
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        // On renvoie une réponse en rendant la vue 'page/index.html.twig'
        // avec l'ajout de la variable 'controller_name'
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * Ici on crée une nouvelle routes pour la page blog
     * On a besoin de créer une nouvelle vue page/blog.html.twig
     */
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {   
        // On renvoie une réponse en rendant la vue 'page/blog.html.twig'
        // avec l'ajout de la variable 'title'
        return $this->render('page/blog.html.twig', [
            'title' => 'Tous les atricles du blog', // Variable
        ]);
    }
}
