<?php

namespace Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * A contact that pertains to this occurence of the event.
     *
     * @var \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * A contact that pertains to this occurence of the event.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact
     */
    public function addToContact(\Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * A contact that pertains to this occurence of the event.
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
     * A contact that pertains to this occurence of the event.
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
     * A contact that pertains to this occurence of the event.
     *
     * @return \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A contact that pertains to this occurence of the event.
     *
     * @param \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}

