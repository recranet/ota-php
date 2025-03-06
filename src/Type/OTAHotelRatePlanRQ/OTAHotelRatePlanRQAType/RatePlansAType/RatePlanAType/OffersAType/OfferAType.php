<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType;

/**
 * Class representing OfferAType
 */
class OfferAType
{
    /**
     * A string value used to request a particular offer.
     *
     * @var string $offerCode
     */
    private $offerCode = null;

    /**
     * Gets as offerCode
     *
     * A string value used to request a particular offer.
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * Sets a new offerCode
     *
     * A string value used to request a particular offer.
     *
     * @param string $offerCode
     * @return self
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
        return $this;
    }
}

