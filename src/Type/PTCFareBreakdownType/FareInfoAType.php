<?php

namespace Recranet\OTA\Type\PTCFareBreakdownType;

use Recranet\OTA\Type\FareInfoType;

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
     * @var \Recranet\OTA\Type\FareType $passengerFare
     */
    private $passengerFare = null;

    /**
     * Gets as passengerFare
     *
     * The fare with cost breakdown.
     *
     * @return \Recranet\OTA\Type\FareType
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
     * @param \Recranet\OTA\Type\FareType $passengerFare
     * @return self
     */
    public function setPassengerFare(\Recranet\OTA\Type\FareType $passengerFare)
    {
        $this->passengerFare = $passengerFare;
        return $this;
    }
}

