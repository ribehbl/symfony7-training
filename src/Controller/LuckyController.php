<?php

namespace App\Controller;

use App\Model\UserDto;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
class LuckyController extends AbstractController
{
    #[Route('/lucky/number', name : 'lucky_number')]
    public function number(LoggerInterface $logger): Response
    {
        $logger->info('We are logging!');
        $number = random_int(0, 100);
        
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/lucky/number/{max}', name : 'lucky_number_max')]
    public function numberBis(
        int $max, 
        // inject a specific logger service
        #[Autowire(service: 'monolog.logger.request')]
        LoggerInterface $logger,
        // or inject parameter values
        #[Autowire('%kernel.project_dir%')]
        string $projectDir
        ): Response
        {
            $logger->info('We are logging!');
            $number = random_int(0, $max);
            
            return $this->render('lucky/number.html.twig', [
                'number' => $number,
                'project_dir' => $projectDir,
            ]);
        }
    #[Route('/dashboard', name : 'map_query_route_test')]
    public function dashboard(
        #[MapQueryParameter(filter: \FILTER_VALIDATE_REGEXP, options: ['regexp' => '/^\w+$/'])] string $firstName,
        #[MapQueryParameter] string $lastName,
        #[MapQueryParameter] int $age,
        ): Response
        {
            return new Response(sprintf('Hello %s %s, age %d', $firstName, $lastName, $age));
        }
    #[Route('/dashboard-bis', name : 'map_query_route_test_bis')]
    public function dashboardBis(
        #[MapQueryString()] UserDto $userDto
        ): Response
        {
            //API and dealing with other HTTP methods than GET (like POST or PUT)
            // #[MapRequestPayload] UserDto $userDto
            /*#[MapRequestPayload(
                acceptFormat: 'json',
                validationGroups: ['strict', 'read'],
                validationFailedStatusCode: Response::HTTP_NOT_FOUND
            )] UserDto $userDto*/
            return new Response(sprintf('Hello %s %s, age %d', $userDto->firstName, $userDto->lastName, $userDto->age));
        }
}