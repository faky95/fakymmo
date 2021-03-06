<?php

namespace Proxies\__CG__\FK\ImmoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bien extends \FK\ImmoBundle\Entity\Bien implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'nombien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'prixlocation', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'contrats', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'clients', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'reservations', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'idParentBien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'localite', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'typebien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'images', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'proprietaire'];
        }

        return ['__isInitialized__', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'nombien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'prixlocation', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'contrats', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'clients', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'reservations', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'idParentBien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'localite', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'typebien', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'images', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Bien' . "\0" . 'proprietaire'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bien $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombien($nombien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombien', [$nombien]);

        return parent::setNombien($nombien);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombien', []);

        return parent::getNombien();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixlocation($prixlocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixlocation', [$prixlocation]);

        return parent::setPrixlocation($prixlocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixlocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixlocation', []);

        return parent::getPrixlocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function addContrat(\FK\ImmoBundle\Entity\Contrat $contrat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContrat', [$contrat]);

        return parent::addContrat($contrat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContrat(\FK\ImmoBundle\Entity\Contrat $contrat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContrat', [$contrat]);

        return parent::removeContrat($contrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrats', []);

        return parent::getContrats();
    }

    /**
     * {@inheritDoc}
     */
    public function addClient(\FK\ImmoBundle\Entity\Client $client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClient', [$client]);

        return parent::addClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClient(\FK\ImmoBundle\Entity\Client $client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClient', [$client]);

        return parent::removeClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClients', []);

        return parent::getClients();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\FK\ImmoBundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\FK\ImmoBundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdParentBien(\FK\ImmoBundle\Entity\Bien $idParentBien = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdParentBien', [$idParentBien]);

        return parent::setIdParentBien($idParentBien);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdParentBien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdParentBien', []);

        return parent::getIdParentBien();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalite(\FK\ImmoBundle\Entity\Localite $localite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalite', [$localite]);

        return parent::setLocalite($localite);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalite', []);

        return parent::getLocalite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypebien(\FK\ImmoBundle\Entity\Type $typebien = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypebien', [$typebien]);

        return parent::setTypebien($typebien);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypebien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypebien', []);

        return parent::getTypebien();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\FK\ImmoBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\FK\ImmoBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setProprietaire(\FK\ImmoBundle\Entity\Proprietaire $proprietaire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProprietaire', [$proprietaire]);

        return parent::setProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getProprietaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProprietaire', []);

        return parent::getProprietaire();
    }

}
