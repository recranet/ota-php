<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelReservationIDsType
 *
 * A Collection of HotelReservationID objects for a given reservation. The collection of all ReservationIDs can include Passenger Name Record (PNR), Guest Name Record (GNR) and Guest Folio numbers. Associated with each can be a Confirmation number which is usually given to the guest.
 * XSD Type: HotelReservationIDsType
 */
class HotelReservationIDsType
{
    /**
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @var \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationID
     */
    private $hotelReservationID = [
        
    ];

    /**
     * Adds as hotelReservationID
     *
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationID(\Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
    {
        $this->hotelReservationID[] = $hotelReservationID;
        return $this;
    }

    /**
     * isset hotelReservationID
     *
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservationID($index)
    {
        return isset($this->hotelReservationID[$index]);
    }

    /**
     * unset hotelReservationID
     *
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservationID($index)
    {
        unset($this->hotelReservationID[$index]);
    }

    /**
     * Gets as hotelReservationID
     *
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @return \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationID()
    {
        return $this->hotelReservationID;
    }

    /**
     * Sets a new hotelReservationID
     *
     * The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
     *
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationID
     * @return self
     */
    public function setHotelReservationID(array $hotelReservationID)
    {
        $this->hotelReservationID = $hotelReservationID;
        return $this;
    }
}

