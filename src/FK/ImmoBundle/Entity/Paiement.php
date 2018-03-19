<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="date_paiement", type="datetime")
     */
    private $datePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode", type="date")
     */
    private $periode;

    /**

   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Contrat",inversedBy="paiements" )

   * @ORM\JoinColumn(name = "idcontrat", referencedColumnName = "id")

   */

  private $contrat;


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
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     *
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set periode
     *
     * @param \DateTime $periode
     *
     * @return Paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \DateTime
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set contrat
     *
     * @param \FK\ImmoBundle\Entity\Contrat $contrat
     *
     * @return Paiement
     */
    public function setContrat(\FK\ImmoBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \FK\ImmoBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}
