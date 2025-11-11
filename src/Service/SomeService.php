<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\UriSigner;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SomeService
{
    public function __construct(
        private UrlGeneratorInterface $router,
        private UriSigner $uriSigner,
    ) {
    }

    public function someMethod(Request $request): void
    {

        // generate a URL with no route arguments
        $signUpPage = $this->router->generate('lucky_number');
        dump($signUpPage);
        // generate a URL with route arguments
        $userProfilePage = $this->router->generate('blog_index', [
            'title' => 'Hello symfony',
            'page' => 1
        ]);

        // generated URLs are "absolute paths" by default. Pass a third optional
        // argument to generate different URLs (e.g. an "absolute URL")
        $signUpPage = $this->router->generate('list_orders_by_status', [], UrlGeneratorInterface::ABSOLUTE_URL);

        // when a route is localized, Symfony uses by default the current request locale
        // pass a different '_locale' value if you want to set the locale explicitly
        $signUpPageInDutch = $this->router->generate('list_orders_by_status', ['_locale' => 'nl']);



        // generate a URL yourself or get it somehow...
        $url = 'https://example.com/foo/bar?sort=desc';

        // sign the URL (it adds a query parameter called '_hash')
        $signedUrl = $this->uriSigner->sign($url);
        // $url = 'https://example.com/foo/bar?sort=desc&_hash=e4a21b9'

        // check the URL signature
        $uriSignatureIsValid = $this->uriSigner->check($signedUrl);
        // $uriSignatureIsValid = true

        // if you have access to the current Request object, you can use this
        // other method to pass the entire Request object instead of the URI:
        $uriSignatureIsValid = $this->uriSigner->checkRequest($request);
    }
}