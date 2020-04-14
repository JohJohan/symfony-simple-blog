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
 * Class DashboardController.
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin.dashboard")
     *
     * @return Response
     */
    public function dashboard(): Response
    {
        return $this->render('admin/dashboard/dashboard.html.twig');
    }
}
