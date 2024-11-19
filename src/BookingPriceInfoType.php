<?php

namespace Recranet\OTA;

/**
 * Class representing BookingPriceInfoType
 *
 * Container for all the fare information.
 *  Pricing information for an itinerary.
 * XSD Type: BookingPriceInfoType
 */
class BookingPriceInfoType extends AirItineraryPricingInfoType
{
    /**
     * If true re-pricing of the itinerary is required. 
     *
     *  false
     *
     * @var bool $repriceRequired
     */
    private $repriceRequired = null;

    /**
     * Gets as repriceRequired
     *
     * If true re-pricing of the itinerary is required. 
     *
     *  false
     *
     * @return bool
     */
    public function getRepriceRequired()
    {
        return $this->repriceRequired;
    }

    /**
     * Sets a new repriceRequired
     *
     * If true re-pricing of the itinerary is required. 
     *
     *  false
     *
     * @param bool $repriceRequired
     * @return self
     */
    public function setRepriceRequired($repriceRequired)
    {
        $this->repriceRequired = $repriceRequired;
        return $this;
    }
}

