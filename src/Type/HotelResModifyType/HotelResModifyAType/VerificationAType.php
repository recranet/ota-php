<?php

namespace Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType;

use Recranet\OTA\Type\VerificationType;

/**
 * Class representing VerificationAType
 */
class VerificationAType extends VerificationType
{
    /**
     * Premodification copy of the hotel reservation.
     *
     * @var \Recranet\OTA\Type\HotelReservationType $currentStateReservation
     */
    private $currentStateReservation = null;

    /**
     * Gets as currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @return \Recranet\OTA\Type\HotelReservationType
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
     * @param \Recranet\OTA\Type\HotelReservationType $currentStateReservation
     * @return self
     */
    public function setCurrentStateReservation(?\Recranet\OTA\Type\HotelReservationType $currentStateReservation = null)
    {
        $this->currentStateReservation = $currentStateReservation;
        return $this;
    }
}

