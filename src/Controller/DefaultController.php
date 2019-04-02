<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     *
     */
    public function homepageAction(Environment $twig)
    {
        return new Response(
            $twig->render('Default/homepage.html.twig',
                [
                    'color' => 'red',
                    'itemList' => [1,4,7,15,23,45,67],
                    'currentDate' => new \DateTime()
                ]
            )

        );

    }
    /**
     * @Route("/terms", name="term_of_service")
     * @return Response
     *
     */
    public function TermsofServiceAction()
    {
        return new Response('These are the terms...');
    }


}