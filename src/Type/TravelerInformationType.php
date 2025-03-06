<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\PassengerTypeQuantityType[] $passengerTypeQuantity
     */
    private $passengerTypeQuantity = [
        
    ];

    /**
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @var \Recranet\OTA\Type\AirTravelerType $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return self
     * @param \Recranet\OTA\Type\PassengerTypeQuantityType $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(\Recranet\OTA\Type\PassengerTypeQuantityType $passengerTypeQuantity)
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
     * @return \Recranet\OTA\Type\PassengerTypeQuantityType[]
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
     * @param \Recranet\OTA\Type\PassengerTypeQuantityType[] $passengerTypeQuantity
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
     * @return \Recranet\OTA\Type\AirTravelerType
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
     * @param \Recranet\OTA\Type\AirTravelerType $airTraveler
     * @return self
     */
    public function setAirTraveler(?\Recranet\OTA\Type\AirTravelerType $airTraveler = null)
    {
        $this->airTraveler = $airTraveler;
        return $this;
    }
}

