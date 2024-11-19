<?php

namespace Recranet\OTA\HotelReservationIDsType;

/**
 * Class representing HotelReservationIDAType
 */
class HotelReservationIDAType
{
    /**
     * Defines the type of Reservation ID (e.g. reservation number, cancellation number). Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @var string $resIDType
     */
    private $resIDType = null;

    /**
     * This is the actual value associated with ResID_Type as generated by the system that is the source of the ResID_Type.
     *
     * @var string $resIDValue
     */
    private $resIDValue = null;

    /**
     * A unique identifier to indicate the source system which generated the ResID_Value.
     *
     * @var string $resIDSource
     */
    private $resIDSource = null;

    /**
     * Additional information on Source.
     *
     * @var string $resIDSourceContext
     */
    private $resIDSourceContext = null;

    /**
     * Date of the creation of this reservation.
     *
     * @var \DateTime $resIDDate
     */
    private $resIDDate = null;

    /**
     * Used to determine if the ResID_Value is given to guest.
     *
     *  false
     *
     * @var bool $forGuest
     */
    private $forGuest = null;

    /**
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service. It is also used to link a guest with a ReservationID.
     *
     * @var string $resGuestRPH
     */
    private $resGuestRPH = null;

    /**
     * Identifying code of the system that initiated the cancel of this reservation.
     *
     * @var string $cancelOriginatorCode
     */
    private $cancelOriginatorCode = null;

    /**
     * Date this reservation was cancelled.
     *
     * @var \DateTime $cancellationDate
     */
    private $cancellationDate = null;

    /**
     * his is a reference placeholder, used as an index for this reservation ID.
     *
     * @var string $hotelReservationIDRPH
     */
    private $hotelReservationIDRPH = null;

    /**
     * Gets as resIDType
     *
     * Defines the type of Reservation ID (e.g. reservation number, cancellation number). Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @return string
     */
    public function getResIDType()
    {
        return $this->resIDType;
    }

    /**
     * Sets a new resIDType
     *
     * Defines the type of Reservation ID (e.g. reservation number, cancellation number). Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @param string $resIDType
     * @return self
     */
    public function setResIDType($resIDType)
    {
        $this->resIDType = $resIDType;
        return $this;
    }

    /**
     * Gets as resIDValue
     *
     * This is the actual value associated with ResID_Type as generated by the system that is the source of the ResID_Type.
     *
     * @return string
     */
    public function getResIDValue()
    {
        return $this->resIDValue;
    }

    /**
     * Sets a new resIDValue
     *
     * This is the actual value associated with ResID_Type as generated by the system that is the source of the ResID_Type.
     *
     * @param string $resIDValue
     * @return self
     */
    public function setResIDValue($resIDValue)
    {
        $this->resIDValue = $resIDValue;
        return $this;
    }

    /**
     * Gets as resIDSource
     *
     * A unique identifier to indicate the source system which generated the ResID_Value.
     *
     * @return string
     */
    public function getResIDSource()
    {
        return $this->resIDSource;
    }

    /**
     * Sets a new resIDSource
     *
     * A unique identifier to indicate the source system which generated the ResID_Value.
     *
     * @param string $resIDSource
     * @return self
     */
    public function setResIDSource($resIDSource)
    {
        $this->resIDSource = $resIDSource;
        return $this;
    }

    /**
     * Gets as resIDSourceContext
     *
     * Additional information on Source.
     *
     * @return string
     */
    public function getResIDSourceContext()
    {
        return $this->resIDSourceContext;
    }

    /**
     * Sets a new resIDSourceContext
     *
     * Additional information on Source.
     *
     * @param string $resIDSourceContext
     * @return self
     */
    public function setResIDSourceContext($resIDSourceContext)
    {
        $this->resIDSourceContext = $resIDSourceContext;
        return $this;
    }

    /**
     * Gets as resIDDate
     *
     * Date of the creation of this reservation.
     *
     * @return \DateTime
     */
    public function getResIDDate()
    {
        return $this->resIDDate;
    }

    /**
     * Sets a new resIDDate
     *
     * Date of the creation of this reservation.
     *
     * @param \DateTime $resIDDate
     * @return self
     */
    public function setResIDDate(\DateTime $resIDDate)
    {
        $this->resIDDate = $resIDDate;
        return $this;
    }

    /**
     * Gets as forGuest
     *
     * Used to determine if the ResID_Value is given to guest.
     *
     *  false
     *
     * @return bool
     */
    public function getForGuest()
    {
        return $this->forGuest;
    }

    /**
     * Sets a new forGuest
     *
     * Used to determine if the ResID_Value is given to guest.
     *
     *  false
     *
     * @param bool $forGuest
     * @return self
     */
    public function setForGuest($forGuest)
    {
        $this->forGuest = $forGuest;
        return $this;
    }

    /**
     * Gets as resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service. It is also used to link a guest with a ReservationID.
     *
     * @return string
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service. It is also used to link a guest with a ReservationID.
     *
     * @param string $resGuestRPH
     * @return self
     */
    public function setResGuestRPH($resGuestRPH)
    {
        $this->resGuestRPH = $resGuestRPH;
        return $this;
    }

    /**
     * Gets as cancelOriginatorCode
     *
     * Identifying code of the system that initiated the cancel of this reservation.
     *
     * @return string
     */
    public function getCancelOriginatorCode()
    {
        return $this->cancelOriginatorCode;
    }

    /**
     * Sets a new cancelOriginatorCode
     *
     * Identifying code of the system that initiated the cancel of this reservation.
     *
     * @param string $cancelOriginatorCode
     * @return self
     */
    public function setCancelOriginatorCode($cancelOriginatorCode)
    {
        $this->cancelOriginatorCode = $cancelOriginatorCode;
        return $this;
    }

    /**
     * Gets as cancellationDate
     *
     * Date this reservation was cancelled.
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Sets a new cancellationDate
     *
     * Date this reservation was cancelled.
     *
     * @param \DateTime $cancellationDate
     * @return self
     */
    public function setCancellationDate(\DateTime $cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;
        return $this;
    }

    /**
     * Gets as hotelReservationIDRPH
     *
     * his is a reference placeholder, used as an index for this reservation ID.
     *
     * @return string
     */
    public function getHotelReservationIDRPH()
    {
        return $this->hotelReservationIDRPH;
    }

    /**
     * Sets a new hotelReservationIDRPH
     *
     * his is a reference placeholder, used as an index for this reservation ID.
     *
     * @param string $hotelReservationIDRPH
     * @return self
     */
    public function setHotelReservationIDRPH($hotelReservationIDRPH)
    {
        $this->hotelReservationIDRPH = $hotelReservationIDRPH;
        return $this;
    }
}

