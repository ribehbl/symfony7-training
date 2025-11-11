<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\WebLink\Link;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'login', schemes: ['http'])]
    public function login(): Response
    {
        // 'https' scheme enforced ==> /login
        // 'http' scheme enforced ==> http://localhost/login
       dd('Login page');


       // forward:
        $response = $this->forward('App\Controller\OtherController::fancy', [
            'name'  => $name,
            'color' => 'green',
        ]);
    
        // ... further modify the response or return it directly
    
        return $response;
    }

    public function download(): BinaryFileResponse
{
    // load the file from the filesystem
    $file = new File('some_file.pdf');

    return $this->file($file);

    // rename the downloaded file
    return $this->file($file, 'custom_name.pdf');

    // display the file contents in the browser instead of downloading it
    return $this->file('invoice_3241.pdf', 'my_invoice.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
}

#[Route("/file", name: "file_test")]
    public function index(): Response
    {
        $response = $this->sendEarlyHints([
            new Link(rel: 'preconnect', href: 'https://fonts.google.com'),
            (new Link(href: '/style.css'))->withAttribute('as', 'stylesheet'),
            (new Link(href: '/script.js'))->withAttribute('as', 'script'),
        ]);

        // prepare the contents of the response...

        return $this->render('homepage/index.html.twig', response: $response);
    }
}