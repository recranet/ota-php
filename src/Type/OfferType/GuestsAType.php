<?php

namespace Recranet\OTA\Type\OfferType;

/**
 * Class representing GuestsAType
 */
class GuestsAType
{
    /**
     * Defines the guest(s) to which the offer applies.
     *
     * @var \Recranet\OTA\Type\OfferType\GuestsAType\GuestAType[] $guest
     */
    private $guest = [
        
    ];

    /**
     * Adds as guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @return self
     * @param \Recranet\OTA\Type\OfferType\GuestsAType\GuestAType $guest
     */
    public function addToGuest(\Recranet\OTA\Type\OfferType\GuestsAType\GuestAType $guest)
    {
        $this->guest[] = $guest;
        return $this;
    }

    /**
     * isset guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuest($index)
    {
        return isset($this->guest[$index]);
    }

    /**
     * unset guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuest($index)
    {
        unset($this->guest[$index]);
    }

    /**
     * Gets as guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @return \Recranet\OTA\Type\OfferType\GuestsAType\GuestAType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @param \Recranet\OTA\Type\OfferType\GuestsAType\GuestAType[] $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;
        return $this;
    }
}

