<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="nomtype", type="string", length=50)
     */
    private $nomtype;

    /**

   * @ORM\OneToMany(targetEntity = "FK\ImmoBundle\Entity\Bien", mappedBy = "type")
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
     * Set nomtype
     *
     * @param string $nomtype
     *
     * @return Type
     */
    public function setNomtype($nomtype)
    {
        $this->nomtype = $nomtype;

        return $this;
    }

    /**
     * Get nomtype
     *
     * @return string
     */
    public function getNomtype()
    {
        return $this->nomtype;
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
     * @return Type
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
        return $this->nomtype;
    }
}
