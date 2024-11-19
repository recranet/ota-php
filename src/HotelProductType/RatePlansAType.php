<?php

namespace Recranet\OTA\HotelProductType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * An individual rate plan.
     *
     * @var \Recranet\OTA\HotelProductType\RatePlansAType\RatePlanAType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * An individual rate plan.
     *
     * @return self
     * @param \Recranet\OTA\HotelProductType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\HotelProductType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
     *
     * An individual rate plan.
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
     * An individual rate plan.
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
     * An individual rate plan.
     *
     * @return \Recranet\OTA\HotelProductType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * An individual rate plan.
     *
     * @param \Recranet\OTA\HotelProductType\RatePlansAType\RatePlanAType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

