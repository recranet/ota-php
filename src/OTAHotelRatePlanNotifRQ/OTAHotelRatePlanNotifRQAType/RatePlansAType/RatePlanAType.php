<?php

namespace Recranet\OTA\OTAHotelRatePlanNotifRQ\OTAHotelRatePlanNotifRQAType\RatePlansAType;

use Recranet\OTA\HotelRatePlanType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType extends HotelRatePlanType
{
    /**
     * Defines charges that are included in this rate plan.
     *
     * @var \Recranet\OTA\RatePlanInclusionsType $ratePlanInclusions
     */
    private $ratePlanInclusions = null;

    /**
     * Gets as ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.
     *
     * @return \Recranet\OTA\RatePlanInclusionsType
     */
    public function getRatePlanInclusions()
    {
        return $this->ratePlanInclusions;
    }

    /**
     * Sets a new ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.
     *
     * @param \Recranet\OTA\RatePlanInclusionsType $ratePlanInclusions
     * @return self
     */
    public function setRatePlanInclusions(?\Recranet\OTA\RatePlanInclusionsType $ratePlanInclusions = null)
    {
        $this->ratePlanInclusions = $ratePlanInclusions;
        return $this;
    }
}

