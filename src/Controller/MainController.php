<?php

namespace App\Controller;

use App\Repository\SectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(SectionRepository $section): Response
    {
        return $this->render(
            'main/index.html.twig', [
                'title' => 'Homepage',
                'homepage_text'=> "Nous somme le ".date('d/m/Y \à H:i'
                ),
                'section'=> $section->findAll()
            ]
        );
    }
    #[Route('/about', name: 'about_me')]
    public function aboutMe(SectionRepository $section): Response
    {
        return $this->render('main/about.html.twig', [
            'title' => 'About me',
            'homepage_text'=> "Et je parle encore de moi !",
        ]);
    }

// creation de lurl pour le detail d'une section
/*#[Route('/section/{id}', name: 'section', requirements:  ['id'=> '>d+] defaults: 
    ['id'=> 1])]
        public function section(SectionRepository $section, int $id): Response
    {
        
            
    }

}

*/
