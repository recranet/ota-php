<?php

namespace Recranet\OTA\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing AgeInfosAType
 */
class AgeInfosAType
{
    /**
     * Textual description about a specific restriction related to age of driver
     *
     * @var \Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfo
     */
    private $ageInfo = [
        
    ];

    /**
     * Adds as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return self
     * @param \Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo
     */
    public function addToAgeInfo(\Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo)
    {
        $this->ageInfo[] = $ageInfo;
        return $this;
    }

    /**
     * isset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgeInfo($index)
    {
        return isset($this->ageInfo[$index]);
    }

    /**
     * unset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgeInfo($index)
    {
        unset($this->ageInfo[$index]);
    }

    /**
     * Gets as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return \Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     */
    public function getAgeInfo()
    {
        return $this->ageInfo;
    }

    /**
     * Sets a new ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param \Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfo
     * @return self
     */
    public function setAgeInfo(array $ageInfo)
    {
        $this->ageInfo = $ageInfo;
        return $this;
    }
}

