<?php

namespace Recranet\OTA\Type\ProfilesType;

/**
 * Class representing ProfileInfoAType
 */
class ProfileInfoAType
{
    /**
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @var \Recranet\OTA\Type\ProfileType $profile
     */
    private $profile = null;

    /**
     * Adds as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Recranet\OTA\Type\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @return \Recranet\OTA\Type\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param \Recranet\OTA\Type\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @return \Recranet\OTA\Type\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @param \Recranet\OTA\Type\ProfileType $profile
     * @return self
     */
    public function setProfile(\Recranet\OTA\Type\ProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }
}

