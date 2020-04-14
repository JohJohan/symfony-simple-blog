<?php

declare(strict_types=1);

/*
 * @link    https://github.com/JohJohan/symfony-simple-blog
 *
 * @license None
 */

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BlogController.
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/admin/blogs", name="admin.blog.list")
     *
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('admin/blog/list.html.twig');
    }

    /**
     * @Route("/admin/blogs/{$id}", name="admin.blog.view")
     *
     * @param string $id
     *
     * @return Response
     */
    public function view(string $id): Response
    {
        return $this->render('admin/blog/view.html.twig');
    }

    /**
     * @Route("/admin/blogs/creaete", name="admin.blog.create")
     *
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('admin/blog/create.html.twig');
    }

    /**
     * @Route("/admin/blogs/{id}/edit", name="admin.blog.edit")
     *
     * @param string $id
     *
     * @return Response
     */
    public function edit(string $id): Response
    {
        return $this->render('admin/blog/edit.html.twig');
    }
}
