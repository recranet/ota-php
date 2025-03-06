<?php

namespace Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType;

/**
 * Class representing RatePlanRefsAType
 */
class RatePlanRefsAType
{
    /**
     * Specifies the rate plan code for other systems.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[] $ratePlanRef
     */
    private $ratePlanRef = [
        
    ];

    /**
     * Adds as ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType $ratePlanRef
     */
    public function addToRatePlanRef(\Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType $ratePlanRef)
    {
        $this->ratePlanRef[] = $ratePlanRef;
        return $this;
    }

    /**
     * isset ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanRef($index)
    {
        return isset($this->ratePlanRef[$index]);
    }

    /**
     * unset ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanRef($index)
    {
        unset($this->ratePlanRef[$index]);
    }

    /**
     * Gets as ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[]
     */
    public function getRatePlanRef()
    {
        return $this->ratePlanRef;
    }

    /**
     * Sets a new ratePlanRef
     *
     * Specifies the rate plan code for other systems.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[] $ratePlanRef
     * @return self
     */
    public function setRatePlanRef(array $ratePlanRef)
    {
        $this->ratePlanRef = $ratePlanRef;
        return $this;
    }
}

