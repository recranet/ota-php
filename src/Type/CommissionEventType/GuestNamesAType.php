<?php

namespace Recranet\OTA\Type\CommissionEventType;

/**
 * Class representing GuestNamesAType
 */
class GuestNamesAType
{
    /**
     * Provides details of a guest name.
     *
     * @var \Recranet\OTA\Type\PersonNameType[] $guestName
     */
    private $guestName = [
        
    ];

    /**
     * Adds as guestName
     *
     * Provides details of a guest name.
     *
     * @return self
     * @param \Recranet\OTA\Type\PersonNameType $guestName
     */
    public function addToGuestName(\Recranet\OTA\Type\PersonNameType $guestName)
    {
        $this->guestName[] = $guestName;
        return $this;
    }

    /**
     * isset guestName
     *
     * Provides details of a guest name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestName($index)
    {
        return isset($this->guestName[$index]);
    }

    /**
     * unset guestName
     *
     * Provides details of a guest name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestName($index)
    {
        unset($this->guestName[$index]);
    }

    /**
     * Gets as guestName
     *
     * Provides details of a guest name.
     *
     * @return \Recranet\OTA\Type\PersonNameType[]
     */
    public function getGuestName()
    {
        return $this->guestName;
    }

    /**
     * Sets a new guestName
     *
     * Provides details of a guest name.
     *
     * @param \Recranet\OTA\Type\PersonNameType[] $guestName
     * @return self
     */
    public function setGuestName(array $guestName)
    {
        $this->guestName = $guestName;
        return $this;
    }
}

