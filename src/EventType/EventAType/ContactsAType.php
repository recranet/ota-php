<?php

namespace Recranet\OTA\EventType\EventAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * A contact associated with the event.
     *
     * @var \Recranet\OTA\EventType\EventAType\ContactsAType\ContactAType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * A contact associated with the event.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\ContactsAType\ContactAType $contact
     */
    public function addToContact(\Recranet\OTA\EventType\EventAType\ContactsAType\ContactAType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * A contact associated with the event.
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
     * A contact associated with the event.
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
     * A contact associated with the event.
     *
     * @return \Recranet\OTA\EventType\EventAType\ContactsAType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A contact associated with the event.
     *
     * @param \Recranet\OTA\EventType\EventAType\ContactsAType\ContactAType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}

