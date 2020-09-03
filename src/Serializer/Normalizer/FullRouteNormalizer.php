<?php

namespace App\Serializer\Normalizer;

use App\Entity\FullRoute;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\ORM\EntityManagerInterface;

class FullRouteNormalizer implements ContextAwareNormalizerInterface
{
    private $normalizer;

    private $em;

    public function __construct(ObjectNormalizer $normalizer, EntityManagerInterface $em)
    {
        $this->normalizer = $normalizer;
        $this->em = $em;
    }

    public function normalize($fullRoute, string $format = null, array $context = [])
    {
        $routes = $this->em->getRepository('App\Entity\Route')->findByIds($fullRoute->getPath());
        $path = '';
        foreach ($routes as $route) {
            $path .= $route->getName() . '/';
        }
        return [
            'id' => $fullRoute->getId(),
            'path' => $path
        ];
    }

    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof FullRoute;
    }
}
