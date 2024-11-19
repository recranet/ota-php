<?php

namespace Recranet\OTA\AirItineraryType\OriginDestinationOptionsAType;

use Recranet\OTA\OriginDestinationOptionType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType extends OriginDestinationOptionType
{
    /**
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @var int $refNumber
     */
    private $refNumber = null;

    /**
     * Unique ID for ths origin/ destination pair.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @var string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Gets as refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @return int
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @param int $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Unique ID for ths origin/ destination pair.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Unique ID for ths origin/ destination pair.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }
}

