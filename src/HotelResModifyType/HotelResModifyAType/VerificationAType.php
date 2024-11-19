<?php

namespace Recranet\OTA\HotelResModifyType\HotelResModifyAType;

use Recranet\OTA\VerificationType;

/**
 * Class representing VerificationAType
 */
class VerificationAType extends VerificationType
{
    /**
     * Premodification copy of the hotel reservation.
     *
     * @var \Recranet\OTA\HotelReservationType $currentStateReservation
     */
    private $currentStateReservation = null;

    /**
     * Gets as currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @return \Recranet\OTA\HotelReservationType
     */
    public function getCurrentStateReservation()
    {
        return $this->currentStateReservation;
    }

    /**
     * Sets a new currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @param \Recranet\OTA\HotelReservationType $currentStateReservation
     * @return self
     */
    public function setCurrentStateReservation(?\Recranet\OTA\HotelReservationType $currentStateReservation = null)
    {
        $this->currentStateReservation = $currentStateReservation;
        return $this;
    }
}

