<?php

namespace App\Entity;

use App\Repository\CataffiliesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CataffiliesRepository::class)
 */
class Cataffilies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $AffiliesID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffiliesID(): ?int
    {
        return $this->AffiliesID;
    }

    public function setAffiliesID(int $AffiliesID): self
    {
        $this->AffiliesID = $AffiliesID;

        return $this;
    }
}
