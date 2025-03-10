<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RailReservationSummaryType
 *
 * Defines the summary data that identifies a reservation. This information also helps in selecting a specific reservation.
 * XSD Type: RailReservationSummaryType
 */
class RailReservationSummaryType
{
    /**
     * The reservation ID number or PNR locator.
     *
     * @var string $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * The date the reservation booking was created.
     *
     * @var \DateTime $dateBooked
     */
    private $dateBooked = null;

    /**
     * The status of the reservation.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @var \Recranet\OTA\Type\RailReservationSummaryType\ODInfoAType[] $oDInfo
     */
    private $oDInfo = [
        
    ];

    /**
     * Relevant passenger information for a reservation.
     *
     * @var \Recranet\OTA\Type\RailPassengerCategoryDetailType[] $passengerInfo
     */
    private $passengerInfo = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as bookingReferenceID
     *
     * The reservation ID number or PNR locator.
     *
     * @return string
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The reservation ID number or PNR locator.
     *
     * @param string $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID($bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;
        return $this;
    }

    /**
     * Gets as dateBooked
     *
     * The date the reservation booking was created.
     *
     * @return \DateTime
     */
    public function getDateBooked()
    {
        return $this->dateBooked;
    }

    /**
     * Sets a new dateBooked
     *
     * The date the reservation booking was created.
     *
     * @param \DateTime $dateBooked
     * @return self
     */
    public function setDateBooked(\DateTime $dateBooked)
    {
        $this->dateBooked = $dateBooked;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the reservation.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the reservation.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as oDInfo
     *
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\RailReservationSummaryType\ODInfoAType $oDInfo
     */
    public function addToODInfo(\Recranet\OTA\Type\RailReservationSummaryType\ODInfoAType $oDInfo)
    {
        $this->oDInfo[] = $oDInfo;
        return $this;
    }

    /**
     * isset oDInfo
     *
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetODInfo($index)
    {
        return isset($this->oDInfo[$index]);
    }

    /**
     * unset oDInfo
     *
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetODInfo($index)
    {
        unset($this->oDInfo[$index]);
    }

    /**
     * Gets as oDInfo
     *
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @return \Recranet\OTA\Type\RailReservationSummaryType\ODInfoAType[]
     */
    public function getODInfo()
    {
        return $this->oDInfo;
    }

    /**
     * Sets a new oDInfo
     *
     * The rail booking origin/destination summary information contained in the reservation.
     *
     * @param \Recranet\OTA\Type\RailReservationSummaryType\ODInfoAType[] $oDInfo
     * @return self
     */
    public function setODInfo(array $oDInfo)
    {
        $this->oDInfo = $oDInfo;
        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\RailPassengerCategoryDetailType $passengerInfo
     */
    public function addToPassengerInfo(\Recranet\OTA\Type\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;
        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @return \Recranet\OTA\Type\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param \Recranet\OTA\Type\RailPassengerCategoryDetailType[] $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

