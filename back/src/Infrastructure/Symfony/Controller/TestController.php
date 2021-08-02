<?php

namespace Infrastructure\Symfony\Controller;

use LogicException;
use UnexpectedValueException;
use Domain\CMS\Page\Model\Page;
use Domain\CMS\Page\Model\PageSection;
use Domain\ContentBuilder\Model\Block;
use Domain\ContentBuilder\Model\TextareaBlock;
use Domain\ContentBuilder\Model\WysiwygBlock;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

        $page = new Page("test page");
        $section1 = new PageSection($page, 'section 1');
        $section2 = new PageSection($page, 'section 2');

        $block1 = new Block(
            $page,
            (new WysiwygBlock()),
            'text here',
            null
        );

        $block2 = new Block(
            $page,
            (new TextareaBlock()),
            'text here',
            null
        );

        $section2->addBlock($block1);
        $section2->addBlock($block2);

        $page->addSection($section1);
        $page->addSection($section2);
        $page->removeSection($section1);

        $page->addBlock($section1);
        \dd($page);

        // return $this->render(
        //     'test/index.html.twig',
        //     [
        //     'controller_name' => 'TestController',
        //     ]
        // );
    }
}
