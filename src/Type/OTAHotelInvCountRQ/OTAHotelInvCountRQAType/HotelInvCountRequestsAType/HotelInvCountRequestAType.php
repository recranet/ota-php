<?php

namespace Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType;

/**
 * Class representing HotelInvCountRequestAType
 */
class HotelInvCountRequestAType
{
    /**
     * Boolean Flag indicating if overbooking or allocation (defined by BookingLimitMessageType) is requested.
     *
     * @var bool $sendBookingLimit
     */
    private $sendBookingLimit = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values: SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @var string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * A date or range of dates for the rate plan.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType $dateRange
     */
    private $dateRange = null;

    /**
     * Collection of room stay candidates.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidates
     */
    private $roomTypeCandidates = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as sendBookingLimit
     *
     * Boolean Flag indicating if overbooking or allocation (defined by BookingLimitMessageType) is requested.
     *
     * @return bool
     */
    public function getSendBookingLimit()
    {
        return $this->sendBookingLimit;
    }

    /**
     * Sets a new sendBookingLimit
     *
     * Boolean Flag indicating if overbooking or allocation (defined by BookingLimitMessageType) is requested.
     *
     * @param bool $sendBookingLimit
     * @return self
     */
    public function setSendBookingLimit($sendBookingLimit)
    {
        $this->sendBookingLimit = $sendBookingLimit;
        return $this;
    }

    /**
     * Gets as bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @return string
     */
    public function getBookingLimitMessageType()
    {
        return $this->bookingLimitMessageType;
    }

    /**
     * Sets a new bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @param string $bookingLimitMessageType
     * @return self
     */
    public function setBookingLimitMessageType($bookingLimitMessageType)
    {
        $this->bookingLimitMessageType = $bookingLimitMessageType;
        return $this;
    }

    /**
     * Gets as dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType $dateRange
     * @return self
     */
    public function setDateRange(?\Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType $dateRange = null)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * Adds as roomTypeCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
     */
    public function addToRoomTypeCandidates(\Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate)
    {
        $this->roomTypeCandidates[] = $roomTypeCandidate;
        return $this;
    }

    /**
     * isset roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypeCandidates($index)
    {
        return isset($this->roomTypeCandidates[$index]);
    }

    /**
     * unset roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypeCandidates($index)
    {
        unset($this->roomTypeCandidates[$index]);
    }

    /**
     * Gets as roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidates()
    {
        return $this->roomTypeCandidates;
    }

    /**
     * Sets a new roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidates
     * @return self
     */
    public function setRoomTypeCandidates(array $roomTypeCandidates = null)
    {
        $this->roomTypeCandidates = $roomTypeCandidates;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
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

