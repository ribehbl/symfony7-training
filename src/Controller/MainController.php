<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{

    #[Route(
        '/',
        name: 'mobile_homepage',
        host: '{subdomain}.example.com|localhost',
        defaults: ['subdomain' => 'm'],
        requirements: ['subdomain' => 'm|mobile'],
    )]
    public function mobileHomepage(): Response
    {
       
        dd('Welcome to the mobile homepage!');
    }

    #[Route('/', name: 'homepage', stateless: true)]
    public function homepage(Request $request): Response
    {
        $this->addFlash('info', 'Message');

        $session = $request->getSession();
        $session->set('user', 'Ribeh');
        dump($session->get('user'));
        dd($this->getUser());
        dd('Welcome to the homepage!');
    }
    #[Route('/home', name: 'home_page')]
    public function homePageTeest(Request $request)
    {
        dump($request->getPayload());
        dump($request->headers);
        dump($request->cookies);
        dump($request->getClientIp());
        dump($request->getPathInfo());
        dump($request->getPreferredFormat());
        dump($request->getPreferredLanguage());
        dump($request->cookies->get('PHPSESSID'));
        dump($request->headers->get('host'));
        dump($request->headers->get('content-type'));
        dump($request->getMethod()  );
        dump($request->getFormat('application/json'));
        $path = $request->getPathInfo();
        if (in_array($path, ['', '/'])) {
            $response = new Response('Welcome to the homepage.');
        } elseif ('/contact' === $path) {
            $response = new Response('Contact us');
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        //return $response;
        dd('Welcome to the Home Page!');
    }
}