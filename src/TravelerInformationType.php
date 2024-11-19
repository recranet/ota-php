<?php

namespace Recranet\OTA;

/**
 * Class representing TravelerInformationType
 *
 * Specify passenger numbers and types.
 * XSD Type: TravelerInformationType
 */
class TravelerInformationType
{
    /**
     * Specify number of passengers using Passenger Type Codes.
     *
     * @var \Recranet\OTA\PassengerTypeQuantityType[] $passengerTypeQuantity
     */
    private $passengerTypeQuantity = [
        
    ];

    /**
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @var \Recranet\OTA\AirTravelerType $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return self
     * @param \Recranet\OTA\PassengerTypeQuantityType $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(\Recranet\OTA\PassengerTypeQuantityType $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity[] = $passengerTypeQuantity;
        return $this;
    }

    /**
     * isset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerTypeQuantity($index)
    {
        return isset($this->passengerTypeQuantity[$index]);
    }

    /**
     * unset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerTypeQuantity($index)
    {
        unset($this->passengerTypeQuantity[$index]);
    }

    /**
     * Gets as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return \Recranet\OTA\PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param \Recranet\OTA\PassengerTypeQuantityType[] $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }

    /**
     * Gets as airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @return \Recranet\OTA\AirTravelerType
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @param \Recranet\OTA\AirTravelerType $airTraveler
     * @return self
     */
    public function setAirTraveler(?\Recranet\OTA\AirTravelerType $airTraveler = null)
    {
        $this->airTraveler = $airTraveler;
        return $this;
    }
}

