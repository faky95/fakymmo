<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\LocaliteRepository")
 */
class Localite
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
     * @ORM\Column(name="nomlocal", type="string", length=25)
     */
    private $nomlocal;

    /**

   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Bien", mappedBy = "localite")
   */

  private $biens;


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
     * Set nomlocal
     *
     * @param string $nomlocal
     *
     * @return Localite
     */
    public function setNomlocal($nomlocal)
    {
        $this->nomlocal = $nomlocal;

        return $this;
    }

    /**
     * Get nomlocal
     *
     * @return string
     */
    public function getNomlocal()
    {
        return $this->nomlocal;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->biens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bien
     *
     * @param \FK\ImmoBundle\Entity\Bien $bien
     *
     * @return Localite
     */
    public function addBien(\FK\ImmoBundle\Entity\Bien $bien)
    {
        $this->biens[] = $bien;

        return $this;
    }

    /**
     * Remove bien
     *
     * @param \FK\ImmoBundle\Entity\Bien $bien
     */
    public function removeBien(\FK\ImmoBundle\Entity\Bien $bien)
    {
        $this->biens->removeElement($bien);
    }

    /**
     * Get biens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBiens()
    {
        return $this->biens;
    }
    public function __toString()
    {
        return $this->nomlocal;
    }
}
