<?php

namespace Recranet\OTA\InvBlockRoomType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * This is a specific rate plan defined for a specific room type.
     *
     * @var \Recranet\OTA\InvBlockRoomType\RatePlansAType\RatePlanAType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
     *
     * @return self
     * @param \Recranet\OTA\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
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
     * This is a specific rate plan defined for a specific room type.
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
     * This is a specific rate plan defined for a specific room type.
     *
     * @return \Recranet\OTA\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * This is a specific rate plan defined for a specific room type.
     *
     * @param \Recranet\OTA\InvBlockRoomType\RatePlansAType\RatePlanAType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

