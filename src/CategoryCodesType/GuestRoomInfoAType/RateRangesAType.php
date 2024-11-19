<?php

namespace Recranet\OTA\CategoryCodesType\GuestRoomInfoAType;

/**
 * Class representing RateRangesAType
 */
class RateRangesAType
{
    /**
     * Provides rate range information.
     *
     * @var \Recranet\OTA\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[] $rateRange
     */
    private $rateRange = [
        
    ];

    /**
     * Adds as rateRange
     *
     * Provides rate range information.
     *
     * @return self
     * @param \Recranet\OTA\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange
     */
    public function addToRateRange(\Recranet\OTA\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange)
    {
        $this->rateRange[] = $rateRange;
        return $this;
    }

    /**
     * isset rateRange
     *
     * Provides rate range information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateRange($index)
    {
        return isset($this->rateRange[$index]);
    }

    /**
     * unset rateRange
     *
     * Provides rate range information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateRange($index)
    {
        unset($this->rateRange[$index]);
    }

    /**
     * Gets as rateRange
     *
     * Provides rate range information.
     *
     * @return \Recranet\OTA\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Provides rate range information.
     *
     * @param \Recranet\OTA\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[] $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }
}

