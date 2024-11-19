<?php

namespace Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * Contact information pertaining to an exhibit.
     *
     * @var \Recranet\OTA\ContactPersonType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * Contact information pertaining to an exhibit.
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
     * Contact information pertaining to an exhibit.
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
     * Contact information pertaining to an exhibit.
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
     * Contact information pertaining to an exhibit.
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
     * Contact information pertaining to an exhibit.
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

