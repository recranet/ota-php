<?php

namespace Recranet\OTA\ViewershipsType\ViewershipAType;

/**
 * Class representing LocationCodesAType
 */
class LocationCodesAType
{
    /**
     * Indicates whether the collection of Location Codes is inclusive or exclusive. 
     * Values: false=Exclusive, true=Inclusive.
     *
     * @var bool $locationCodesInclusive
     */
    private $locationCodesInclusive = null;

    /**
     * @var \Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[] $locationCode
     */
    private $locationCode = [
        
    ];

    /**
     * Gets as locationCodesInclusive
     *
     * Indicates whether the collection of Location Codes is inclusive or exclusive. 
     * Values: false=Exclusive, true=Inclusive.
     *
     * @return bool
     */
    public function getLocationCodesInclusive()
    {
        return $this->locationCodesInclusive;
    }

    /**
     * Sets a new locationCodesInclusive
     *
     * Indicates whether the collection of Location Codes is inclusive or exclusive. 
     * Values: false=Exclusive, true=Inclusive.
     *
     * @param bool $locationCodesInclusive
     * @return self
     */
    public function setLocationCodesInclusive($locationCodesInclusive)
    {
        $this->locationCodesInclusive = $locationCodesInclusive;
        return $this;
    }

    /**
     * Adds as locationCode
     *
     * @return self
     * @param \Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType $locationCode
     */
    public function addToLocationCode(\Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType $locationCode)
    {
        $this->locationCode[] = $locationCode;
        return $this;
    }

    /**
     * isset locationCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCode($index)
    {
        return isset($this->locationCode[$index]);
    }

    /**
     * unset locationCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCode($index)
    {
        unset($this->locationCode[$index]);
    }

    /**
     * Gets as locationCode
     *
     * @return \Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[]
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * @param \Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[] $locationCode
     * @return self
     */
    public function setLocationCode(array $locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }
}

