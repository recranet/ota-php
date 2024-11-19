<?php

namespace Recranet\OTA\AirItineraryPricingInfoType;

use Recranet\OTA\FareType;

/**
 * Class representing ItinTotalFareAType
 */
class ItinTotalFareAType extends FareType
{
    /**
     * Specifies the usage of the passenger fare structure.
     *
     * @var string $usage
     */
    private $usage = null;

    /**
     * Gets as usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }
}

