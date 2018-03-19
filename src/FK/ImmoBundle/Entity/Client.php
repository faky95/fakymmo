<?php

namespace FK\ImmoBundle\Entity;

// use FOS\UserBundle\Model\Client as BaseUser ;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\ClientRepository")
 */
class Client 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numeropiece", type="integer")
     */
    private $numeropiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcomplet", type="string", length=50)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=25)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=25)
     */
    private $password;

    /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Contrat", mappedBy = "client")
   */
  private $contrats;

    /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Reservation", mappedBy = "client")
   */
  private $reservations;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeropiece
     *
     * @param integer $numeropiece
     *
     * @return Client
     */
    public function setNumeropiece($numeropiece)
    {
        $this->numeropiece = $numeropiece;

        return $this;
    }

    /**
     * Get numeropiece
     *
     * @return int
     */
    public function getNumeropiece()
    {
        return $this->numeropiece;
    }

    /**
     * Set nomcomplet
     *
     * @param string $nomcomplet
     *
     * @return Client
     */
    public function setNomcomplet($nomcomplet)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get nomcomplet
     *
     * @return string
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrat
     *
     * @param \FK\ImmoBundle\Entity\Contrat $contrat
     *
     * @return Client
     */
    public function addContrat(\FK\ImmoBundle\Entity\Contrat $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \FK\ImmoBundle\Entity\Contrat $contrat
     */
    public function removeContrat(\FK\ImmoBundle\Entity\Contrat $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }

    /**
     * Add reservation
     *
     * @param \FK\ImmoBundle\Entity\Reservation $reservation
     *
     * @return Client
     */
    public function addReservation(\FK\ImmoBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \FK\ImmoBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\FK\ImmoBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    public function __toString()
    {
        return $this->nomcomplet;
    }
}
