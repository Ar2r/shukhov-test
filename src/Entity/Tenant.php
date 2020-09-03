<?php

namespace App\Entity;

use App\Repository\TenantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TenantRepository::class)
 */
class Tenant
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
    private $tree = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTree(): ?array
    {
        return $this->tree;
    }

    public function setTree(array $tree): self
    {
        $this->tree = $tree;

        return $this;
    }
}
