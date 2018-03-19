<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proposition
 *
 * @ORM\Table(name="proposition")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\PropositionRepository")
 */
class Proposition
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_proposition", type="datetime")
     */
    private $dateProposition;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**

   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Proprietaire",inversedBy="propositions" )

   * @ORM\JoinColumn(name = "idproprietaire", referencedColumnName = "id")

   */

  private $proprietaire;

  /**

  * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Bien")

  * @ORM\JoinColumn(name = "idbien", referencedColumnName = "id")

  */

 private $bien;


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
     * Set dateProposition
     *
     * @param \DateTime $dateProposition
     *
     * @return Proposition
     */
    public function setDateProposition($dateProposition)
    {
        $this->dateProposition = $dateProposition;

        return $this;
    }

    /**
     * Get dateProposition
     *
     * @return \DateTime
     */
    public function getDateProposition()
    {
        return $this->dateProposition;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Proposition
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
     * Set proprietaire
     *
     * @param \FK\ImmoBundle\Entity\Proprietaire $proprietaire
     *
     * @return Proposition
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

    /**
     * Set bien
     *
     * @param \FK\ImmoBundle\Entity\Bien $bien
     *
     * @return Proposition
     */
    public function setBien(\FK\ImmoBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \FK\ImmoBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
}
