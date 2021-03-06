<?php

namespace Proxies\__CG__\Pnv\SaisieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DicoAction extends \Pnv\SaisieBundle\Entity\DicoAction implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'numAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'libAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'infoAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idMaitrise', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idTerritoire', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idTheme');
        }

        return array('__isInitialized__', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'numAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'libAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'infoAction', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idMaitrise', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idTerritoire', '' . "\0" . 'Pnv\\SaisieBundle\\Entity\\DicoAction' . "\0" . 'idTheme');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DicoAction $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdAction()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdAction();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAction', array());

        return parent::getIdAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumAction($numAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumAction', array($numAction));

        return parent::setNumAction($numAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumAction', array());

        return parent::getNumAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibAction($libAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibAction', array($libAction));

        return parent::setLibAction($libAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibAction', array());

        return parent::getLibAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfoAction($infoAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfoAction', array($infoAction));

        return parent::setInfoAction($infoAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfoAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfoAction', array());

        return parent::getInfoAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMaitrise(\Pnv\SaisieBundle\Entity\DicoMaitrise $idMaitrise = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMaitrise', array($idMaitrise));

        return parent::setIdMaitrise($idMaitrise);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMaitrise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMaitrise', array());

        return parent::getIdMaitrise();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTerritoire(\Pnv\SaisieBundle\Entity\DicoTerritoire $idTerritoire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTerritoire', array($idTerritoire));

        return parent::setIdTerritoire($idTerritoire);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTerritoire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTerritoire', array());

        return parent::getIdTerritoire();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTheme(\Pnv\SaisieBundle\Entity\DicoTheme $idTheme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTheme', array($idTheme));

        return parent::setIdTheme($idTheme);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTheme', array());

        return parent::getIdTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
