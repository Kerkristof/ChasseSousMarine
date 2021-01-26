<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \App\Entity\Site implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'gps', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'sorties'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'gps', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Site' . "\0" . 'sorties'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu(string $contenu): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getGps(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGps', []);

        return parent::getGps();
    }

    /**
     * {@inheritDoc}
     */
    public function setGps(?string $gps): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGps', [$gps]);

        return parent::setGps($gps);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName(?string $imageName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getSorties(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSorties', []);

        return parent::getSorties();
    }

    /**
     * {@inheritDoc}
     */
    public function addSorty(\App\Entity\Sortie $sorty): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSorty', [$sorty]);

        return parent::addSorty($sorty);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSorty(\App\Entity\Sortie $sorty): \App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSorty', [$sorty]);

        return parent::removeSorty($sorty);
    }

}