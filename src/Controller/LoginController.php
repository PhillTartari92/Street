<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): Response
    {

        $formulaire = $this->createFormBuilder()

        ->add('email', EmailType::class,[
            'attr'=> [
                'class'=> 'form-control'
            ],
        ])

        ->add('password', PasswordType::class,[
            'attr'=> [
                'class' => 'form-control'
            ],
        ])

        ->getForm();

        return $this->render('login/index.html.twig', [
            'loginForm' => $formulaire->createView(),
        ]);
    }

    #[Route('/signup', name: 'app_signup')]
    public function signUp(): Response
    {

        $formulaire = $this->createFormBuilder()

        ->add('civilite', ChoiceType::Class, [
            'label' => false,
            'choices' => [
                'Mr' => "Monsieur",
                'Mme' => "Madame",
                'NB' => "NB",
            ],
            'attr' => [
                'class' => 'form-control w-25 m-auto',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])

        ->add('nom', TextType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Nom',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])
        ->add('prenom', TextType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Prénom',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])
        ->add('email', EmailType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Email',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])

        ->add('password', PasswordType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Password',
                
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
            ],
           
        ])

        ->add('codePostal', TextType::class,[
            'label' => false,
            'attr'=> [
                'class' => 'form-control',
                'placeholder'=>'Entrez votre Code Postal',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])
        ->add('ville', TextType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Ville',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])
        ->add('telephone', TelType::class,[
            'label' => false,
            'attr'=> [
                'class'=> 'form-control',
                'placeholder'=>'Entrez votre Téléphone',
            ],
            'row_attr'=> [
                    'class'=> 'form-group mb-3'
                ]
        ])

        ->getForm();

        return $this->render('login/signup.html.twig', [
            'signupForm' => $formulaire->createView(),
        ]);
    }
}
