<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType\SiteAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * Contact information as well as site address information.
     *
     * @var \Recranet\OTA\ContactPersonType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * Contact information as well as site address information.
     *
     * @return self
     * @param \Recranet\OTA\ContactPersonType $contact
     */
    public function addToContact(\Recranet\OTA\ContactPersonType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact information as well as site address information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact information as well as site address information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact information as well as site address information.
     *
     * @return \Recranet\OTA\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information as well as site address information.
     *
     * @param \Recranet\OTA\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}

