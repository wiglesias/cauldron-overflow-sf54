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

    #[Route('/questions/{slug}')]
    public function show(string $slug)
    {
        return new Response(\sprintf(
            'Future Page to show a questions [%s]!',
            ucwords(str_ireplace('-', ' ', $slug))
        ));
    }
}
