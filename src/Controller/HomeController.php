<?php

declare(strict_types=1);

/*
 * @link    https://github.com/JohJohan/symfony-simple-blog
 *
 * @license None
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController.
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     *
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('home/home.html.twig');
    }
}
