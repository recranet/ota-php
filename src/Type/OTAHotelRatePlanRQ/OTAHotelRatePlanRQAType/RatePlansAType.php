<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlan($index)
    {
        return isset($this->ratePlan[$index]);
    }

    /**
     * unset ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlan($index)
    {
        unset($this->ratePlan[$index]);
    }

    /**
     * Gets as ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * Provides the criteria to identify the rate plan to be returned.
     *
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

