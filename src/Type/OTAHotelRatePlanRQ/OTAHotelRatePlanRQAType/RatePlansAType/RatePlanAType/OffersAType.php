<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType;

/**
 * Class representing OffersAType
 */
class OffersAType
{
    /**
     * When true, send all offer data.
     *
     * @var bool $sendData
     */
    private $sendData = null;

    /**
     * Requested offer.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType\OfferAType[] $offer
     */
    private $offer = [
        
    ];

    /**
     * Gets as sendData
     *
     * When true, send all offer data.
     *
     * @return bool
     */
    public function getSendData()
    {
        return $this->sendData;
    }

    /**
     * Sets a new sendData
     *
     * When true, send all offer data.
     *
     * @param bool $sendData
     * @return self
     */
    public function setSendData($sendData)
    {
        $this->sendData = $sendData;
        return $this;
    }

    /**
     * Adds as offer
     *
     * Requested offer.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType\OfferAType $offer
     */
    public function addToOffer(\Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType\OfferAType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * Requested offer.
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
     * Requested offer.
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
     * Requested offer.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Requested offer.
     *
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType\OfferAType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;
        return $this;
    }
}

