<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage() // homepage(Environment $twigEvironment) <=== exmple use Twig service
    {
        // fun example of using the Twig service directly
        // $html = $twigEvironment->render('question/homepage.html.twig');

        // return new Response($html);
        return $this->render('question/homepage.html.twig');
    }

    #[Route('/questions/{slug}', name: 'app_question_show')]
    public function show(string $slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_ireplace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}
