<?php

namespace Recranet\OTA\Type\HotelRatePlanType;

/**
 * Class representing RatePlanShouldersAType
 */
class RatePlanShouldersAType
{
    /**
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[] $ratePlanShoulder
     */
    private $ratePlanShoulder = [
        
    ];

    /**
     * Adds as ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType $ratePlanShoulder
     */
    public function addToRatePlanShoulder(\Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType $ratePlanShoulder)
    {
        $this->ratePlanShoulder[] = $ratePlanShoulder;
        return $this;
    }

    /**
     * isset ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanShoulder($index)
    {
        return isset($this->ratePlanShoulder[$index]);
    }

    /**
     * unset ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanShoulder($index)
    {
        unset($this->ratePlanShoulder[$index]);
    }

    /**
     * Gets as ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[]
     */
    public function getRatePlanShoulder()
    {
        return $this->ratePlanShoulder;
    }

    /**
     * Sets a new ratePlanShoulder
     *
     * The Rate Plan Shoulder defines the allowable dates and where to take inventory during the shoulder seasons for this rate plan.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType\RatePlanShoulderAType[] $ratePlanShoulder
     * @return self
     */
    public function setRatePlanShoulder(array $ratePlanShoulder)
    {
        $this->ratePlanShoulder = $ratePlanShoulder;
        return $this;
    }
}

