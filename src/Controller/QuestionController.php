<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    #[Route('/questions/{slug}')]
    public function show(string $slug)
    {
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_ireplace('-', ' ', $slug))
        ]);
    }
}
