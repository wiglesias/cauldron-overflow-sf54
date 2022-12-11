<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    #[Route('/questions/how-to-tie-my-shoes-with-magic')]
    public function show()
    {
        return new Response('Future Page to show a questions!');
    }
}
