<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompanyController extends AbstractController
{
    #[Route(path: [
        'en' => '/about-us',
        'nl' => '/over-ons'
    ], name: 'about_us')]
    public function about(Request $request): Response
    {
        dd('About us page: '.$request->getLocale());
    }


    #[Route(path:'/test-redirect', name: 'test_redirect')]
    public function testRedirect(Request $request): Response
    {
        // redirects to the "homepage" route
        //return $this->redirectToRoute('homepage');

        // redirectToRoute is a shortcut for:
        //return new RedirectResponse($this->generateUrl('homepage'));

        // does a permanent HTTP 301 redirect
        //return $this->redirectToRoute('homepage', [], 301);
        // if you prefer, you can use PHP constants instead of hardcoded numbers
        //return $this->redirectToRoute('homepage', [], Response::HTTP_MOVED_PERMANENTLY);

        // redirect to a route with parameters
        //return $this->redirectToRoute('lucky_number', ['max' => 10]);
        // Same: 
        return $this->redirect($this->generateUrl('lucky_number', ['max' => 10]), Response::HTTP_MOVED_PERMANENTLY);
        // redirects to a route and maintains the original query string parameters
        //return $this->redirectToRoute('blog_index', $request->query->all());

        // redirects to the current route (e.g. for Post/Redirect/Get pattern):
        //return $this->redirectToRoute($request->attributes->get('_route'));

        // redirects externally
        return $this->redirect('http://symfony.com/doc');

    }
}