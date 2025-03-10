<?php

namespace Recranet\OTA\Type\RoomStayType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * @var \Recranet\OTA\Type\RatePlanType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\Type\RatePlanType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
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
     * @return \Recranet\OTA\Type\RatePlanType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param \Recranet\OTA\Type\RatePlanType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

