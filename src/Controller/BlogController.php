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
 * Class BlogController.
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog.list")
     *
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('blog/list.html.twig');
    }
    /**
     * @Route("/blog/{slug}", name="blog.view")
     *
     * @return Response
     */
    public function view(string $slug): Response
    {
        return $this->render('blog/view.html.twig');
    }
}
