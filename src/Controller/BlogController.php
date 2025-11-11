<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/blog', requirements: ['_locale' => 'en|es|fr'], name: 'blog_')]
class BlogController extends AbstractController
{

    #[Route('/{_locale}/listing', name: 'index')]
    public function index(Request $request): Response
    {
        $routeName = $request->attributes->get('_route');
        dump($routeName);
        $routeParameters = $request->attributes->get('_route_params');
        dump($routeParameters);
        // use this to get all the available attributes (not only routing ones):
        $allAttributes = $request->attributes->all();
        dump($allAttributes);
        dd('Welcome to the blog!');
    }
    #[Route('/{_locale}/{page}', name: 'blog_list_page', requirements: ['page' => '\d+'])]
    public function list(int $page): Response
    {
        dd('Listing all blog posts' . ' - Page: ' . $page);
    }

    #[Route('/blog-tech/{page<\d+>}', name: 'blog_list_tech')]
    public function listTech(int $page = 1): Response
    {
        dd('Listing all tech blog posts : ' . $page);
    }

    #[Route('/{_locale}/posts/{slug}', name: 'blog_show', priority: 1)]
    public function show(string $slug): Response
    {
        dd($slug);
    }

        /**
     * This route could not be matched without defining a higher priority than 0.
     */
    #[Route('/list', name: 'blog_list', priority: 2)]
    public function listBlog(): Response
    {
        // generate a URL with no route arguments
        $signUpPage = $this->generateUrl('lucky_number');
        dump($signUpPage);

        // generate a URL with route arguments
        $blogPage = $this->generateUrl('blog_index', [
            'page' => 1,
            'title' => 'Hello symfony',
            'category' => 'Symfony'
        ]);
        dump($blogPage);
        // generated URLs are "absolute paths" by default. Pass a third optional
        // argument to generate different URLs (e.g. an "absolute URL")
        $ordersPage = $this->generateUrl('list_orders_by_status', [], UrlGeneratorInterface::ABSOLUTE_URL);
        dump($ordersPage);

        // when a route is localized, Symfony uses by default the current request locale
        // pass a different '_locale' value if you want to set the locale explicitly
        $ordersPageInDutch = $this->generateUrl('list_orders_by_status', ['_locale' => 'nl']);
        dump($ordersPageInDutch);
        $ordersPageInDutchBis = $this->generateUrl('list_orders_by_status');
        dump($ordersPageInDutchBis);
        dd('Listing all blog posts');
    }
}