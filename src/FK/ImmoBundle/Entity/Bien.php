<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\BienRepository")
 */
class Bien
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
     * @var string
     *
     * @ORM\Column(name="nombien", type="string", length=50)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prixlocation", type="integer")
     */
    private $prixlocation;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;


    /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Contrat", mappedBy = "bien")
   */
  private $contrats;
      /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Client", mappedBy = "bien")
   */
  private $clients;
  
    /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Reservation", mappedBy = "bien")
   */
  private $reservations;
    /**
   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Bien", inversedBy="biens")
   * @ORM\JoinColumn(name = "idparentbien", referencedColumnName = "id")
 
   */
  private $idParentBien;
   

    /**
   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Localite", inversedBy="biens")
   * @ORM\JoinColumn(name = "idlocalite", referencedColumnName = "id", nullable=true)
   */
  private $localite;
    /**
   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Type", inversedBy="biens")
   * @ORM\JoinColumn(name = "idtype", referencedColumnName = "id")
   */
  private $typebien;
    /**
   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Image", mappedBy = "bien")
   */
  private $images;
     /**
   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Proprietaire", inversedBy="biens")
   * @ORM\JoinColumn(name = "idproprietaire", referencedColumnName = "id", nullable=true)
   */
  private $proprietaire;


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
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixlocation
     *
     * @param integer $prixlocation
     *
     * @return Bien
     */
    public function setPrixlocation($prixlocation)
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }

    /**
     * Get prixlocation
     *
     * @return int
     */
    public function getPrixlocation()
    {
        return $this->prixlocation;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrat
     *
     * @param \FK\ImmoBundle\Entity\Contrat $contrat
     *
     * @return Bien
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
     * Add client
     *
     * @param \FK\ImmoBundle\Entity\Client $client
     *
     * @return Bien
     */
    public function addClient(\FK\ImmoBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \FK\ImmoBundle\Entity\Client $client
     */
    public function removeClient(\FK\ImmoBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add reservation
     *
     * @param \FK\ImmoBundle\Entity\Reservation $reservation
     *
     * @return Bien
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

    /**
     * Set idParentBien
     *
     * @param \FK\ImmoBundle\Entity\Bien $idParentBien
     *
     * @return Bien
     */
    public function setIdParentBien(\FK\ImmoBundle\Entity\Bien $idParentBien = null)
    {
        $this->idParentBien = $idParentBien;

        return $this;
    }

    /**
     * Get idParentBien
     *
     * @return \FK\ImmoBundle\Entity\Bien
     */
    public function getIdParentBien()
    {
        return $this->idParentBien;
    }

    /**
     * Set localite
     *
     * @param \FK\ImmoBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\FK\ImmoBundle\Entity\Localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \FK\ImmoBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set typebien
     *
     * @param \FK\ImmoBundle\Entity\Type $typebien
     *
     * @return Bien
     */
    public function setTypebien(\FK\ImmoBundle\Entity\Type $typebien = null)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get typebien
     *
     * @return \FK\ImmoBundle\Entity\Type
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Add image
     *
     * @param \FK\ImmoBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\FK\ImmoBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \FK\ImmoBundle\Entity\Image $image
     */
    public function removeImage(\FK\ImmoBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
       public function __toString()
    {
        return $this->nombien;
    }




    /**
     * Set proprietaire
     *
     * @param \FK\ImmoBundle\Entity\Proprietaire $proprietaire
     *
     * @return Bien
     */
    public function setProprietaire(\FK\ImmoBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \FK\ImmoBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
