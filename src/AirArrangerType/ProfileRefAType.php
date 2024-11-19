<?php

namespace Recranet\OTA\AirArrangerType;

/**
 * Class representing ProfileRefAType
 */
class ProfileRefAType
{
    /**
     * An identifier used to uniquely reference a customer profile. 
     *
     * If OpenTravel Profile messages are used, the @ID attribute references a stored ProfileType/@UserID attribute.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as uniqueID
     *
     * An identifier used to uniquely reference a customer profile. 
     *
     * If OpenTravel Profile messages are used, the @ID attribute references a stored ProfileType/@UserID attribute.
     *
     * @return \Recranet\OTA\UniqueIDType
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
     * If OpenTravel Profile messages are used, the @ID attribute references a stored ProfileType/@UserID attribute.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Recranet\OTA\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }
}

