<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *@orm\Column(type="string", length=100, nullable=true)
     * @var string
     */
    private $lastname;

    /**
     *@orm\Column(type="string", length=100, nullable=true)
     * @var string
     */
    private $firstname;

    /**
     *@orm\Column(type="string", length=255)
     * @var string
     */
    private $email;

    /**
     *@orm\Column(type="string", length=255)
     * @var string
     */
    private $password;

    /**
     *@orm\Column(type="string", length=100)
     * @var string
     */
    private $username;

    /**
     *@orm\Column(type="date")
     * @var \DateTime
     */
    private $birthdate;
    
    public function getId() {
        return $this->id;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getBirthdate() {
        return $this->birthdate;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function setBirthdate(\DateTime $birthdate) {
        $this->birthdate = $birthdate;
        return $this;
    }


}
