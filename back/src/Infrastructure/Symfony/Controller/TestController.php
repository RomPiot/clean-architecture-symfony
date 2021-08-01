<?php

namespace Infrastructure\Symfony\Controller;

use Domain\Page\Model\Page;
use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use UnexpectedValueException;

class TestController
{
    #[Route('/test', name: 'test')]
    /**
     * Test controller
     *
     * @return Response
     * @throws LogicException
     * @throws UnexpectedValueException
     */
    public function index(): Response
    {

        $page = new Page();
        \dd($page);

        // return $this->render(
        //     'test/index.html.twig',
        //     [
        //     'controller_name' => 'TestController',
        //     ]
        // );
    }
}
