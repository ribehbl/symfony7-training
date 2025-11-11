<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[AsCommand(
    name: 'app:some-command',
    description: 'Do something cool'
)]
class SomeCommand extends Command
{
    
    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
         // generate a URL with no route arguments
         $signUpPage = $this->urlGenerator->generate('lucky_number');
         dump($signUpPage);
         // generate a URL with route arguments
         $userProfilePage = $this->urlGenerator->generate('blog_index', [
             'title' => 'Hello symfony',
             'page' => 1
         ]);
         dump($userProfilePage);
         // generated URLs are "absolute paths" by default. Pass a third optional
         // argument to generate different URLs (e.g. an "absolute URL")
         $signUpPage = $this->urlGenerator->generate('list_orders_by_status', [], UrlGeneratorInterface::ABSOLUTE_URL);
 
         // when a route is localized, Symfony uses by default the current request locale
         // pass a different '_locale' value if you want to set the locale explicitly
         $signUpPageInDutch = $this->urlGenerator->generate('list_orders_by_status', ['_locale' => 'nl']);
        return Command::SUCCESS;
    }
}