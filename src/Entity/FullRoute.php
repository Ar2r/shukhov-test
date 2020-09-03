<?php

namespace App\Entity;

use App\Repository\FullRouteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FullRouteRepository::class)
 */
class FullRoute
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $path = [];

    /**
     * @ORM\ManyToMany(targetEntity=Role::class, inversedBy="routes")
     */
    private $roles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?array
    {
        return $this->path;
    }

    public function setPath(array $path): self
    {
        $this->path = $path;

        return $this;
    }
}
