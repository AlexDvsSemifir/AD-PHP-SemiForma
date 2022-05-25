<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OrganismeRepository;
use App\Repository\CandidatRepository;
use App\Repository\PromotionRepository;



class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(
        OrganismeRepository $organismeRepository,
        CandidatRepository $candidatRepository,
        PromotionRepository $promotionRepository
    ): Response
    {
        return $this->render('home_page/index.html.twig', [
            'organismes' => $organismeRepository->findAll(),
            'candidats' => $candidatRepository->findAll(),
            'promotions' => $promotionRepository->findAll(),
            'nombreOrganismes' => count($organismeRepository->findAll()),
            'nombreCandidats' => count($candidatRepository->findAll()),
            'nombrePromotions' => count($promotionRepository->findAll()),
        ]);
    }
}
