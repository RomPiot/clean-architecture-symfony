<?php

namespace Infrastructure\Symfony\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TataController extends AbstractController
{
    #[Route('/tata', name: 'tata')]
    public function index(): Response
    {
        return $this->render('tata/index.html.twig', [
            'controller_name' => 'TataController',
        ]);
    }
}
