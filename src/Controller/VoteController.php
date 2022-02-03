<?php 

namespace App\Controller;

use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\SportRepository;
use App\Repository\VoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/vote", name="vote_")
 */

class VoteController extends AbstractController
{
    #[Route('/new', name: 'new')]
    public function vote(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vote = new Vote();
        $form = $this->createForm(VoteType::class, $vote);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $vote->setVote(5);
            $entityManager->persist($vote);
            $entityManager->flush();
            return $this->redirectToRoute('sport_index');
        }
        return $this->render('vote/new.html.twig', [
            "vote" => $vote,
            "form" => $form->createView(),
        ]);
    }

    #[Route('/', name: 'index')]
    public function index(VoteRepository $voteRepository, SportRepository $sportRepository): Response
    {
        $votes = $voteRepository->findAllGroupedWithSportName();

        return $this->render('vote/show.html.twig', [
            'votes' => $votes,
         ]);
    }
}