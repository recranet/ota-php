<?php

namespace Recranet\OTA\Type\AirTravelerType;

/**
 * Class representing ProfileRefAType
 */
class ProfileRefAType
{
    /**
     * An identifier used to uniquely reference a customer profile.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as uniqueID
     *
     * An identifier used to uniquely reference a customer profile.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * An identifier used to uniquely reference a customer profile.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Recranet\OTA\Type\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }
}

