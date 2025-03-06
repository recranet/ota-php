<?php

namespace Recranet\OTA\Type\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfileTypesAType
 */
class ProfileTypesAType
{
    /**
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @var \Recranet\OTA\Type\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[] $profileType
     */
    private $profileType = [
        
    ];

    /**
     * Adds as profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @return self
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType $profileType
     */
    public function addToProfileType(\Recranet\OTA\Type\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType $profileType)
    {
        $this->profileType[] = $profileType;
        return $this;
    }

    /**
     * isset profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileType($index)
    {
        return isset($this->profileType[$index]);
    }

    /**
     * unset profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileType($index)
    {
        unset($this->profileType[$index]);
    }

    /**
     * Gets as profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @return \Recranet\OTA\Type\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[] $profileType
     * @return self
     */
    public function setProfileType(array $profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }
}

