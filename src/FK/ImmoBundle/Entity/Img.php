<?php

namespace FK\ImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="img")
 * @ORM\Entity(repositoryClass="FK\ImmoBundle\Repository\ImgRepository")
 */
class Img
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
     * @var blob
     *
     * @ORM\Column(name="img", type="blob")
     */
    private $img;

//     /**
//    * @ORM\ManyToOne(targetEntity="FK\ImmoBundle\Entity\Bien", inversedBy="images")
//    * @ORM\JoinColumn(name = "id_bien", referencedColumnName = "id")
//    */
//   private $bien;


 




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Img
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
