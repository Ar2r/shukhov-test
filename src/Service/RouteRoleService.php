<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\FullRoute;
use App\Entity\Route;

class RouteRoleService
{
    private $em;

    private $serializer;

    public function __construct(EntityManagerInterface $em, SerializerInterface $serializer)
    {
        $this->em = $em;
        $this->serializer = $serializer;
    }

    public function getAllRoles(): array
    {
        return $this->em->getRepository('App\Entity\Role')->findAll();
    }

    public function getRoleRoutes($role)
    {
        if ('' === $role) {
            $fullRoutes = $this->em->getRepository('App\Entity\FullRoute')->findAll();
        } else {
            $roleObj = $this->em->getRepository('App\Entity\Role')->findByName($role);
            if (null === $roleObj) {
                return [];
            }
            $fullRoutes = $roleObj->getRoutes();
        }

        foreach ($fullRoutes as $id => $fullRoute) {
            $fullRoutes[$id] = $this->serializer->normalize($fullRoute);
        }

        return $fullRoutes;
    }
}
