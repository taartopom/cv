<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;

class ContactModel
{
	/**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 255,
     *      minMessage = "Ce champs doit contenir au minimum {{ limit }} caractères",
     *      maxMessage = "Ce champs ne peut pas dépasser {{ limit }} caractères"
     * )
     */
    private $name;

	/**
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "L'email '{{ value }}' n'est pas valide",
     *     checkMX = true
     * )
     */
    private $email;

	/**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 255,
     *      minMessage = "Ce champs doit contenir au minimum {{ limit }} caractères",
     *      maxMessage = "Ce champs ne peut pas dépasser {{ limit }} caractères"
     * )
     */
    private $subject;

	/**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      minMessage = "Ce champs doit contenir au minimum {{ limit }} caractères"
     * )
     */
    private $message;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
