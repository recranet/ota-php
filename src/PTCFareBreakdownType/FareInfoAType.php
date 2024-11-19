<?php

namespace Recranet\OTA\PTCFareBreakdownType;

use Recranet\OTA\FareInfoType;

/**
 * Class representing FareInfoAType
 *
 * Information used to define a fare and its associated rules information.
 */
class FareInfoAType extends FareInfoType
{
    /**
     * The fare with cost breakdown.
     *
     * @var \Recranet\OTA\FareType $passengerFare
     */
    private $passengerFare = null;

    /**
     * Gets as passengerFare
     *
     * The fare with cost breakdown.
     *
     * @return \Recranet\OTA\FareType
     */
    public function getPassengerFare()
    {
        return $this->passengerFare;
    }

    /**
     * Sets a new passengerFare
     *
     * The fare with cost breakdown.
     *
     * @param \Recranet\OTA\FareType $passengerFare
     * @return self
     */
    public function setPassengerFare(\Recranet\OTA\FareType $passengerFare)
    {
        $this->passengerFare = $passengerFare;
        return $this;
    }
}

