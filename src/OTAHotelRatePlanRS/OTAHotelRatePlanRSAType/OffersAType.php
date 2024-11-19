<?php

namespace Recranet\OTA\OTAHotelRatePlanRS\OTAHotelRatePlanRSAType;

/**
 * Class representing OffersAType
 */
class OffersAType
{
    /**
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @var \Recranet\OTA\OfferType[] $offer
     */
    private $offer = [
        
    ];

    /**
     * Adds as offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @return self
     * @param \Recranet\OTA\OfferType $offer
     */
    public function addToOffer(\Recranet\OTA\OfferType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @return \Recranet\OTA\OfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer, the conditions under which it can be applied and the amounts and/or percentages deducted.
     *
     * @param \Recranet\OTA\OfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer = null)
    {
        $this->offer = $offer;
        return $this;
    }
}

