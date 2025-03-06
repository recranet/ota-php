<?php

namespace Recranet\OTA\Type\AirItineraryPricingInfoType;

/**
 * Class representing PTCFareBreakdownsAType
 */
class PTCFareBreakdownsAType
{
    /**
     * Per passenger type code pricing for a travel itinerary.
     *
     * @var \Recranet\OTA\Type\PTCFareBreakdownType[] $pTCFareBreakdown
     */
    private $pTCFareBreakdown = [
        
    ];

    /**
     * Adds as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return self
     * @param \Recranet\OTA\Type\PTCFareBreakdownType $pTCFareBreakdown
     */
    public function addToPTCFareBreakdown(\Recranet\OTA\Type\PTCFareBreakdownType $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown[] = $pTCFareBreakdown;
        return $this;
    }

    /**
     * isset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPTCFareBreakdown($index)
    {
        return isset($this->pTCFareBreakdown[$index]);
    }

    /**
     * unset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPTCFareBreakdown($index)
    {
        unset($this->pTCFareBreakdown[$index]);
    }

    /**
     * Gets as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return \Recranet\OTA\Type\PTCFareBreakdownType[]
     */
    public function getPTCFareBreakdown()
    {
        return $this->pTCFareBreakdown;
    }

    /**
     * Sets a new pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param \Recranet\OTA\Type\PTCFareBreakdownType[] $pTCFareBreakdown
     * @return self
     */
    public function setPTCFareBreakdown(array $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown = $pTCFareBreakdown;
        return $this;
    }
}

