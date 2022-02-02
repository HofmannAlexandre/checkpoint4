<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SportRepository;
use App\Repository\ProgramRepository;

/**
 * @Route("/sport", name="sport_")
 */

class SportController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SportRepository $sportRepository): Response
    {
        $sport = $sportRepository
        ->findAll();

        return $this->render('sport/index.html.twig', [
            'sport' => $sport,
         ]);
    }
}