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
    public $id;

    /**
     * @ORM\Column(type="decimal")
     */
    public $healthyFood;

    /**
     * @ORM\Column(type="decimal")
     */
    public $unhealthyFood;

    /**
     * @ORM\Column(type="decimal")
     */
    public $farmacy;

    /**
     * @ORM\Column(type="decimal")
     */
    public $household;

    /**
     * @ORM\Column(type="decimal")
     */
    public $clothing;

    /**
     * @ORM\Column(type="string")
     */
    public $createdate;

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

    public function getCreatedate(): ?string
    {
        return $this->createdate;
    }

    public function setCreatedate(): self
    {
        $date = new \DateTime('NOW');
        $date = $date->format('Y-m-d H:i:s');
        $this->createdate = $date;
        

        return $this;
    }
    //to operate over array of objects
    public function __isset($prop) : bool
    {
        return isset($this->$prop);
    }
    //to have date without setting it maually (time of action based on the time of creation)
    public function __construct()
    {
        $date = new \DateTime('NOW');
        $date = $date->format('Y-m-d H:i:s');
        $this->createdate = $date;
    }
     
}