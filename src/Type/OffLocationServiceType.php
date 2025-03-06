<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Phone number for the contact person for the off location service.
     *
     * @var \Recranet\OTA\Type\OffLocationServiceType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * Can be used as a tracking number for delivery and collection.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $trackingID
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
     * @return \Recranet\OTA\Type\PersonNameType
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
     * @param \Recranet\OTA\Type\PersonNameType $personName
     * @return self
     */
    public function setPersonName(?\Recranet\OTA\Type\PersonNameType $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @return \Recranet\OTA\Type\OffLocationServiceType\TelephoneAType
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
     * @param \Recranet\OTA\Type\OffLocationServiceType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(?\Recranet\OTA\Type\OffLocationServiceType\TelephoneAType $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
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
     * @param \Recranet\OTA\Type\UniqueIDType $trackingID
     * @return self
     */
    public function setTrackingID(?\Recranet\OTA\Type\UniqueIDType $trackingID = null)
    {
        $this->trackingID = $trackingID;
        return $this;
    }
}

