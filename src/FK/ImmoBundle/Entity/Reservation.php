<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="date_reservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**

   * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Client",inversedBy="reservations" )

   * @ORM\JoinColumn(name = "idclient", referencedColumnName = "id")

   */

  private $client;

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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set client
     *
     * @param \FK\ImmoBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\FK\ImmoBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \FK\ImmoBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set bien
     *
     * @param \FK\ImmoBundle\Entity\Bien $bien
     *
     * @return Reservation
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
