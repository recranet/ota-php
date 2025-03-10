<?php

namespace Recranet\OTA\Type\InvBlockType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContact(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
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
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
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
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}

