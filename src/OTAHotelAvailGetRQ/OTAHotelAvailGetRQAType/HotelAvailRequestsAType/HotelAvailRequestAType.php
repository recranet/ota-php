<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType;

/**
 * Class representing HotelAvailRequestAType
 */
class HotelAvailRequestAType
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
     * A date or range of dates for the request criteria.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @var string[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * Collection of requested rate plans.
     *
     * @var \Recranet\OTA\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * Collection of room stay candidates.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidates
     */
    private $roomTypeCandidates = null;

    /**
     * Collection of requested offers.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType $offers
     */
    private $offers = null;

    /**
     * A collection of Restriction Status values.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType $restrictionStatusCandidates
     */
    private $restrictionStatusCandidates = null;

    /**
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be included in the response.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType $lengthsOfStayCandidates
     */
    private $lengthsOfStayCandidates = null;

    /**
     * Use to request Best Available Rate.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType $bestAvailableRateCandidate
     */
    private $bestAvailableRateCandidate = null;

    /**
     * Use to request Hurdle Rates.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType $hurdleRateCandidate
     */
    private $hurdleRateCandidate = null;

    /**
     * Use to request Delta.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType $deltaCandidate
     */
    private $deltaCandidate = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * Used to request rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
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
     * A date or range of dates for the request criteria.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates for the request criteria.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType $dateRange
     * @return self
     */
    public function setDateRange(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType $dateRange = null)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemsCode($destinationSystemCode)
    {
        $this->destinationSystemsCode[] = $destinationSystemCode;
        return $this;
    }

    /**
     * isset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationSystemsCode($index)
    {
        return isset($this->destinationSystemsCode[$index]);
    }

    /**
     * unset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationSystemsCode($index)
    {
        unset($this->destinationSystemsCode[$index]);
    }

    /**
     * Gets as destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @return string[]
     */
    public function getDestinationSystemsCode()
    {
        return $this->destinationSystemsCode;
    }

    /**
     * Sets a new destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this request is targeted.
     *
     * @param string $destinationSystemsCode
     * @return self
     */
    public function setDestinationSystemsCode(array $destinationSystemsCode = null)
    {
        $this->destinationSystemsCode = $destinationSystemsCode;
        return $this;
    }

    /**
     * Adds as ratePlanCandidate
     *
     * Collection of requested rate plans.
     *
     * @return self
     * @param \Recranet\OTA\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
     */
    public function addToRatePlanCandidates(\Recranet\OTA\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate)
    {
        $this->ratePlanCandidates[] = $ratePlanCandidate;
        return $this;
    }

    /**
     * isset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanCandidates($index)
    {
        return isset($this->ratePlanCandidates[$index]);
    }

    /**
     * unset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanCandidates($index)
    {
        unset($this->ratePlanCandidates[$index]);
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @return \Recranet\OTA\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param \Recranet\OTA\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(array $ratePlanCandidates = null)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;
        return $this;
    }

    /**
     * Adds as roomTypeCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
     */
    public function addToRoomTypeCandidates(\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate)
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
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
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
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidates
     * @return self
     */
    public function setRoomTypeCandidates(array $roomTypeCandidates = null)
    {
        $this->roomTypeCandidates = $roomTypeCandidates;
        return $this;
    }

    /**
     * Gets as offers
     *
     * Collection of requested offers.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * Collection of requested offers.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType $offers
     * @return self
     */
    public function setOffers(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * Gets as restrictionStatusCandidates
     *
     * A collection of Restriction Status values.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType
     */
    public function getRestrictionStatusCandidates()
    {
        return $this->restrictionStatusCandidates;
    }

    /**
     * Sets a new restrictionStatusCandidates
     *
     * A collection of Restriction Status values.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType $restrictionStatusCandidates
     * @return self
     */
    public function setRestrictionStatusCandidates(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType $restrictionStatusCandidates = null)
    {
        $this->restrictionStatusCandidates = $restrictionStatusCandidates;
        return $this;
    }

    /**
     * Gets as lengthsOfStayCandidates
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be included in the response.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType
     */
    public function getLengthsOfStayCandidates()
    {
        return $this->lengthsOfStayCandidates;
    }

    /**
     * Sets a new lengthsOfStayCandidates
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be included in the response.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType $lengthsOfStayCandidates
     * @return self
     */
    public function setLengthsOfStayCandidates(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType $lengthsOfStayCandidates = null)
    {
        $this->lengthsOfStayCandidates = $lengthsOfStayCandidates;
        return $this;
    }

    /**
     * Gets as bestAvailableRateCandidate
     *
     * Use to request Best Available Rate.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType
     */
    public function getBestAvailableRateCandidate()
    {
        return $this->bestAvailableRateCandidate;
    }

    /**
     * Sets a new bestAvailableRateCandidate
     *
     * Use to request Best Available Rate.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType $bestAvailableRateCandidate
     * @return self
     */
    public function setBestAvailableRateCandidate(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType $bestAvailableRateCandidate = null)
    {
        $this->bestAvailableRateCandidate = $bestAvailableRateCandidate;
        return $this;
    }

    /**
     * Gets as hurdleRateCandidate
     *
     * Use to request Hurdle Rates.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType
     */
    public function getHurdleRateCandidate()
    {
        return $this->hurdleRateCandidate;
    }

    /**
     * Sets a new hurdleRateCandidate
     *
     * Use to request Hurdle Rates.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType $hurdleRateCandidate
     * @return self
     */
    public function setHurdleRateCandidate(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType $hurdleRateCandidate = null)
    {
        $this->hurdleRateCandidate = $hurdleRateCandidate;
        return $this;
    }

    /**
     * Gets as deltaCandidate
     *
     * Use to request Delta.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType
     */
    public function getDeltaCandidate()
    {
        return $this->deltaCandidate;
    }

    /**
     * Sets a new deltaCandidate
     *
     * Use to request Delta.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType $deltaCandidate
     * @return self
     */
    public function setDeltaCandidate(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType $deltaCandidate = null)
    {
        $this->deltaCandidate = $deltaCandidate;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType
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
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }

    /**
     * Gets as rebatePrograms
     *
     * Used to request rebate programs the hotel participates in.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Used to request rebate programs the hotel participates in.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(?\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType $rebatePrograms = null)
    {
        $this->rebatePrograms = $rebatePrograms;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

