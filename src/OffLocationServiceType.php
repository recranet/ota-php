<?php

namespace Recranet\OTA;

/**
 * Class representing OffLocationServiceType
 *
 * The OffLocationServiceType complex type defines a specific off-location service.
 * XSD Type: OffLocationServiceType
 */
class OffLocationServiceType extends OffLocationServiceCoreType
{
    /**
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @var string $specInstructions
     */
    private $specInstructions = null;

    /**
     * Name for the contact person for the off location service.
     *
     * @var \Recranet\OTA\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Phone number for the contact person for the off location service.
     *
     * @var \Recranet\OTA\OffLocationServiceType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * Can be used as a tracking number for delivery and collection.
     *
     * @var \Recranet\OTA\UniqueIDType $trackingID
     */
    private $trackingID = null;

    /**
     * Gets as specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @return string
     */
    public function getSpecInstructions()
    {
        return $this->specInstructions;
    }

    /**
     * Sets a new specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @param string $specInstructions
     * @return self
     */
    public function setSpecInstructions($specInstructions)
    {
        $this->specInstructions = $specInstructions;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name for the contact person for the off location service.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name for the contact person for the off location service.
     *
     * @param \Recranet\OTA\PersonNameType $personName
     * @return self
     */
    public function setPersonName(?\Recranet\OTA\PersonNameType $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @return \Recranet\OTA\OffLocationServiceType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @param \Recranet\OTA\OffLocationServiceType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(?\Recranet\OTA\OffLocationServiceType\TelephoneAType $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @param \Recranet\OTA\UniqueIDType $trackingID
     * @return self
     */
    public function setTrackingID(?\Recranet\OTA\UniqueIDType $trackingID = null)
    {
        $this->trackingID = $trackingID;
        return $this;
    }
}

