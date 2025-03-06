<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType;

/**
 * Class representing RatePlanCrossRefsAType
 */
class RatePlanCrossRefsAType
{
    /**
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType\RatePlanCrossRefsAType\RatePlanCrossRefAType[] $ratePlanCrossRef
     */
    private $ratePlanCrossRef = [
        
    ];

    /**
     * Adds as ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType\RatePlanCrossRefsAType\RatePlanCrossRefAType $ratePlanCrossRef
     */
    public function addToRatePlanCrossRef(\Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType\RatePlanCrossRefsAType\RatePlanCrossRefAType $ratePlanCrossRef)
    {
        $this->ratePlanCrossRef[] = $ratePlanCrossRef;
        return $this;
    }

    /**
     * isset ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanCrossRef($index)
    {
        return isset($this->ratePlanCrossRef[$index]);
    }

    /**
     * unset ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanCrossRef($index)
    {
        unset($this->ratePlanCrossRef[$index]);
    }

    /**
     * Gets as ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType\RatePlanCrossRefsAType\RatePlanCrossRefAType[]
     */
    public function getRatePlanCrossRef()
    {
        return $this->ratePlanCrossRef;
    }

    /**
     * Sets a new ratePlanCrossRef
     *
     * Cross Reference between sending system and responding system Rate Plan Codes.
     *
     * @param \Recranet\OTA\Type\OTAHotelRatePlanNotifRS\OTAHotelRatePlanNotifRSAType\RatePlanCrossRefsAType\RatePlanCrossRefAType[] $ratePlanCrossRef
     * @return self
     */
    public function setRatePlanCrossRef(array $ratePlanCrossRef = null)
    {
        $this->ratePlanCrossRef = $ratePlanCrossRef;
        return $this;
    }
}

