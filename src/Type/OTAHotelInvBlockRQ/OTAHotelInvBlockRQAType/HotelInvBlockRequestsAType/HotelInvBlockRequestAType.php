<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType;

/**
 * Class representing HotelInvBlockRequestAType
 */
class HotelInvBlockRequestAType
{
    /**
     * Boolean Flag indicating if overbooking or allocation (defined by BookingLimitMessageType) is requested.
     *
     * @var bool $sendBookingLimit
     */
    private $sendBookingLimit = null;

    /**
     * When true, include blocks which partially fall inside the requested date range but start or end outside the date range.
     *
     * @var bool $includeAllBlocksAffectingDateRange
     */
    private $includeAllBlocksAffectingDateRange = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values: SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @var string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * A date or range of dates for the rate plan.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType $dateRange
     */
    private $dateRange = null;

    /**
     * This is for creating a single block at a single hotel.
     *
     * @var \Recranet\OTA\Type\InvBlockType[] $invBlock
     */
    private $invBlock = [
        
    ];

    /**
     * Indicates the detail of hotel reference information.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType $hotelRef
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
     * Gets as includeAllBlocksAffectingDateRange
     *
     * When true, include blocks which partially fall inside the requested date range but start or end outside the date range.
     *
     * @return bool
     */
    public function getIncludeAllBlocksAffectingDateRange()
    {
        return $this->includeAllBlocksAffectingDateRange;
    }

    /**
     * Sets a new includeAllBlocksAffectingDateRange
     *
     * When true, include blocks which partially fall inside the requested date range but start or end outside the date range.
     *
     * @param bool $includeAllBlocksAffectingDateRange
     * @return self
     */
    public function setIncludeAllBlocksAffectingDateRange($includeAllBlocksAffectingDateRange)
    {
        $this->includeAllBlocksAffectingDateRange = $includeAllBlocksAffectingDateRange;
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
     * @return \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType
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
     * @param \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType $dateRange
     * @return self
     */
    public function setDateRange(?\Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType $dateRange = null)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * Adds as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockType $invBlock
     */
    public function addToInvBlock(\Recranet\OTA\Type\InvBlockType $invBlock)
    {
        $this->invBlock[] = $invBlock;
        return $this;
    }

    /**
     * isset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvBlock($index)
    {
        return isset($this->invBlock[$index]);
    }

    /**
     * unset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvBlock($index)
    {
        unset($this->invBlock[$index]);
    }

    /**
     * Gets as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return \Recranet\OTA\Type\InvBlockType[]
     */
    public function getInvBlock()
    {
        return $this->invBlock;
    }

    /**
     * Sets a new invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param \Recranet\OTA\Type\InvBlockType[] $invBlock
     * @return self
     */
    public function setInvBlock(array $invBlock = null)
    {
        $this->invBlock = $invBlock;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType
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
     * @param \Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType $hotelRef = null)
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

