<?php

namespace Recranet\OTA\Type\RoomStayLiteType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * @var \Recranet\OTA\Type\RatePlanLiteType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanLiteType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\Type\RatePlanLiteType $ratePlan)
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
     * @return \Recranet\OTA\Type\RatePlanLiteType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param \Recranet\OTA\Type\RatePlanLiteType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

