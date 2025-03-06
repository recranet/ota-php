<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ContactsType
 *
 * Provides detailed name information.
 * XSD Type: ContactsType
 */
class ContactsType
{
    /**
     * Used to pass detailed name information regarding a contact.
     *
     * @var \Recranet\OTA\Type\ContactsType\NameAType[] $name
     */
    private $name = [
        
    ];

    /**
     * Adds as name
     *
     * Used to pass detailed name information regarding a contact.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactsType\NameAType $name
     */
    public function addToName(\Recranet\OTA\Type\ContactsType\NameAType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * Used to pass detailed name information regarding a contact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * Used to pass detailed name information regarding a contact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * Used to pass detailed name information regarding a contact.
     *
     * @return \Recranet\OTA\Type\ContactsType\NameAType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Used to pass detailed name information regarding a contact.
     *
     * @param \Recranet\OTA\Type\ContactsType\NameAType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }
}

