<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType;

/**
 * Class representing RatesAType
 */
class RatesAType
{
    /**
     * Rate for a particular room type.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[] $rate
     */
    private $rate = [
        
    ];

    /**
     * Adds as rate
     *
     * Rate for a particular room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType $rate
     */
    public function addToRate(\Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType $rate)
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * isset rate
     *
     * Rate for a particular room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * Rate for a particular room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * Rate for a particular room type.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate for a particular room type.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[] $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;
        return $this;
    }
}

