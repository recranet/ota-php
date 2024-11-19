<?php

namespace Recranet\OTA;

/**
 * Class representing TravelerInfoType
 *
 * Identifies passenger(s) who will travel on the reservation.
 * XSD Type: TravelerInfoType
 */
class TravelerInfoType
{
    /**
     * Information about the person traveling.
     *
     * @var \Recranet\OTA\TravelerInfoType\AirTravelerAType[] $airTraveler
     */
    private $airTraveler = [
        
    ];

    /**
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @var \Recranet\OTA\SpecialReqDetailsType[] $specialReqDetails
     */
    private $specialReqDetails = [
        
    ];

    /**
     * Adds as airTraveler
     *
     * Information about the person traveling.
     *
     * @return self
     * @param \Recranet\OTA\TravelerInfoType\AirTravelerAType $airTraveler
     */
    public function addToAirTraveler(\Recranet\OTA\TravelerInfoType\AirTravelerAType $airTraveler)
    {
        $this->airTraveler[] = $airTraveler;
        return $this;
    }

    /**
     * isset airTraveler
     *
     * Information about the person traveling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirTraveler($index)
    {
        return isset($this->airTraveler[$index]);
    }

    /**
     * unset airTraveler
     *
     * Information about the person traveling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirTraveler($index)
    {
        unset($this->airTraveler[$index]);
    }

    /**
     * Gets as airTraveler
     *
     * Information about the person traveling.
     *
     * @return \Recranet\OTA\TravelerInfoType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information about the person traveling.
     *
     * @param \Recranet\OTA\TravelerInfoType\AirTravelerAType[] $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler = null)
    {
        $this->airTraveler = $airTraveler;
        return $this;
    }

    /**
     * Adds as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType $specialReqDetails
     */
    public function addToSpecialReqDetails(\Recranet\OTA\SpecialReqDetailsType $specialReqDetails)
    {
        $this->specialReqDetails[] = $specialReqDetails;
        return $this;
    }

    /**
     * isset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialReqDetails($index)
    {
        return isset($this->specialReqDetails[$index]);
    }

    /**
     * unset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialReqDetails($index)
    {
        unset($this->specialReqDetails[$index]);
    }

    /**
     * Gets as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @return \Recranet\OTA\SpecialReqDetailsType[]
     */
    public function getSpecialReqDetails()
    {
        return $this->specialReqDetails;
    }

    /**
     * Sets a new specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param \Recranet\OTA\SpecialReqDetailsType[] $specialReqDetails
     * @return self
     */
    public function setSpecialReqDetails(array $specialReqDetails = null)
    {
        $this->specialReqDetails = $specialReqDetails;
        return $this;
    }
}

