<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comments/{id<\d+>}/vote/{direction<up|down>}', methods: ['POST'])]
    public function commentVote(int $id, bool $direction)
    {
        // todo use id to query database

        // use real logic here to save this to the database
        if ($direction === 'up') {
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }

        return new JsonResponse(['votes' => $currentVoteCount]);
    }
}
