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
 * Class LoginController.
 */
class LoginController extends AbstractController
{
    /**
     * @Route("/inloggen", name="login")
     *
     * @return Response
     */
    public function login(): Response
    {
        return $this->render('login/login.html.twig');
    }
}
