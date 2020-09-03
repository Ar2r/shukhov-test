<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Service\RouteRoleService;

class RouteController extends AbstractController
{
    /**
     * @Route("/route/{role}", name="route", defaults={"role"=""})
     */
    public function index(string $role, RouteRoleService $routeRoleService)
    {
        return $this->render('routes.html.twig', [
            'role' => $role,
            'roles' => $routeRoleService->getAllRoles(),
            'routes' => $routeRoleService->getRoleRoutes($role)
        ]);
    }
}
