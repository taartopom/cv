<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Helper\DateHelper;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $degree;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="formations")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate = null): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     *
     * @return self
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    // Custom functions

    public function getDuration()
    {
        return DateHelper::getDuration($this->startDate, $this->endDate);
    }
}
