<?php

namespace App\Entity;

use App\Repository\BudgetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BudgetRepository::class)
 */
class Budget
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal")
     */
    private $healthyFood;

    /**
     * @ORM\Column(type="decimal")
     */
    private $unhealthyFood;

    /**
     * @ORM\Column(type="decimal")
     */
    private $farmacy;

    /**
     * @ORM\Column(type="decimal")
     */
    private $household;

    /**
     * @ORM\Column(type="decimal")
     */
    private $clothing;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHealthyFood(): ?float
    {
        return $this->healthyFood;
    }

    public function setHealthyFood(float $healthyFood): self
    {
        $this->healthyFood = $healthyFood;

        return $this;
    }

    public function getUnhealthyFood(): ?float
    {
        return $this->unhealthyFood;
    }

    public function setUnhealthyFood(float $unhealthyFood): self
    {
        $this->unhealthyFood = $unhealthyFood;

        return $this;
    }

    public function getFarmacy(): ?float
    {
        return $this->farmacy;
    }

    public function setFarmacy(float $farmacy): self
    {
        $this->farmacy = $farmacy;

        return $this;
    }

    public function getHousehold(): ?float
    {
        return $this->household;
    }

    public function setHousehold(float $household): self
    {
        $this->household = $household;

        return $this;
    }

    public function getClothing(): ?float
    {
        return $this->clothing;
    }

    public function setClothing(float $clothing): self
    {
        $this->clothing = $clothing;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }
}