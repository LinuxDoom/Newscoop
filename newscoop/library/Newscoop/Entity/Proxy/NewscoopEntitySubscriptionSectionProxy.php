<?php

namespace Newscoop\Entity\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NewscoopEntitySubscriptionSectionProxy extends \Newscoop\Entity\SubscriptionSection implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setSubscription(\Newscoop\Entity\Subscription $subscription)
    {
        $this->_load();
        return parent::setSubscription($subscription);
    }

    public function setSection(\Newscoop\Entity\Section $section)
    {
        $this->_load();
        return parent::setSection($section);
    }

    public function getSectionNumber()
    {
        $this->_load();
        return parent::getSectionNumber();
    }

    public function getSectionName()
    {
        $this->_load();
        return parent::getSectionName();
    }

    public function setLanguage(\Newscoop\Entity\Language $language)
    {
        $this->_load();
        return parent::setLanguage($language);
    }

    public function getLanguageId()
    {
        $this->_load();
        return parent::getLanguageId();
    }

    public function getLanguageName()
    {
        $this->_load();
        return parent::getLanguageName();
    }

    public function setStartDate(\DateTime $date)
    {
        $this->_load();
        return parent::setStartDate($date);
    }

    public function getStartDate()
    {
        $this->_load();
        return parent::getStartDate();
    }

    public function setDays($days)
    {
        $this->_load();
        return parent::setDays($days);
    }

    public function getDays()
    {
        $this->_load();
        return parent::getDays();
    }

    public function setPaidDays($paidDays)
    {
        $this->_load();
        return parent::setPaidDays($paidDays);
    }

    public function getPaidDays()
    {
        $this->_load();
        return parent::getPaidDays();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'subscription', 'section', 'language', 'startDate', 'days', 'paidDays', 'noticeSent');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}