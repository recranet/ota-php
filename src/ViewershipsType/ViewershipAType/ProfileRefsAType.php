<?php

namespace Recranet\OTA\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfileRefsAType
 */
class ProfileRefsAType
{
    /**
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @var \Recranet\OTA\UniqueIDType[] $profileRef
     */
    private $profileRef = [
        
    ];

    /**
     * Adds as profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $profileRef
     */
    public function addToProfileRef(\Recranet\OTA\UniqueIDType $profileRef)
    {
        $this->profileRef[] = $profileRef;
        return $this;
    }

    /**
     * isset profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileRef($index)
    {
        return isset($this->profileRef[$index]);
    }

    /**
     * unset profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileRef($index)
    {
        unset($this->profileRef[$index]);
    }

    /**
     * Gets as profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     *
     * @param \Recranet\OTA\UniqueIDType[] $profileRef
     * @return self
     */
    public function setProfileRef(array $profileRef)
    {
        $this->profileRef = $profileRef;
        return $this;
    }
}

