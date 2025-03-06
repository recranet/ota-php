<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanNotifRQ\OTAHotelRatePlanNotifRQAType\RatePlansAType;

use Recranet\OTA\Type\HotelRatePlanType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType extends HotelRatePlanType
{
    /**
     * Defines charges that are included in this rate plan.
     *
     * @var \Recranet\OTA\Type\RatePlanInclusionsType $ratePlanInclusions
     */
    private $ratePlanInclusions = null;

    /**
     * Gets as ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.
     *
     * @return \Recranet\OTA\Type\RatePlanInclusionsType
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
     * @param \Recranet\OTA\Type\RatePlanInclusionsType $ratePlanInclusions
     * @return self
     */
    public function setRatePlanInclusions(?\Recranet\OTA\Type\RatePlanInclusionsType $ratePlanInclusions = null)
    {
        $this->ratePlanInclusions = $ratePlanInclusions;
        return $this;
    }
}

