<?php

namespace Recranet\OTA\AirItineraryPricingInfoType;

/**
 * Class representing FareInfosAType
 */
class FareInfosAType
{
    /**
     * Detailed information on individual priced fares
     *
     * @var \Recranet\OTA\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[] $fareInfo
     */
    private $fareInfo = [
        
    ];

    /**
     * Adds as fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @return self
     * @param \Recranet\OTA\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo
     */
    public function addToFareInfo(\Recranet\OTA\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo)
    {
        $this->fareInfo[] = $fareInfo;
        return $this;
    }

    /**
     * isset fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareInfo($index)
    {
        return isset($this->fareInfo[$index]);
    }

    /**
     * unset fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareInfo($index)
    {
        unset($this->fareInfo[$index]);
    }

    /**
     * Gets as fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @return \Recranet\OTA\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Detailed information on individual priced fares
     *
     * @param \Recranet\OTA\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[] $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo)
    {
        $this->fareInfo = $fareInfo;
        return $this;
    }
}

