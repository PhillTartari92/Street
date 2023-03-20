<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {

        $formulaire = $this->createFormBuilder()

        ->add('nom', TextType::Class,[
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('prenom',TextType::Class,[
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('textarea', TextareaType::Class,[
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->getForm();
        
        return $this->render('contact/index.html.twig', [
            'contactForm' => $formulaire->createView(),
        ]);
    }
}
