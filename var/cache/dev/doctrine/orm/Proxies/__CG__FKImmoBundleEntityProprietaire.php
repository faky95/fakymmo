<?php

namespace Proxies\__CG__\FK\ImmoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proprietaire extends \FK\ImmoBundle\Entity\Proprietaire implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'numpiece', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'nomComplet', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'login', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'email', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'adresse', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'phone', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'password', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'codebanque', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'biens'];
        }

        return ['__isInitialized__', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'numpiece', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'nomComplet', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'login', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'email', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'adresse', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'phone', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'password', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'codebanque', '' . "\0" . 'FK\\ImmoBundle\\Entity\\Proprietaire' . "\0" . 'biens'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proprietaire $proxy) {
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
    public function setNumpiece($numpiece)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumpiece', [$numpiece]);

        return parent::setNumpiece($numpiece);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumpiece()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumpiece', []);

        return parent::getNumpiece();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomComplet($nomComplet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomComplet', [$nomComplet]);

        return parent::setNomComplet($nomComplet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomComplet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomComplet', []);

        return parent::getNomComplet();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodebanque($codebanque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodebanque', [$codebanque]);

        return parent::setCodebanque($codebanque);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodebanque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodebanque', []);

        return parent::getCodebanque();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}