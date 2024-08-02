<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        // return $this->render('conference/index.html.twig', [
        //     'controller_name' => 'ConferenceController',
        // ]);
        return new Response(
            <<<EOF
            <html>
                <body>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );
    }
}
