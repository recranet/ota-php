<?php

namespace Recranet\OTA\Type\AvailRequestSegmentsType;

/**
 * Class representing AvailRequestSegmentAType
 */
class AvailRequestSegmentAType
{
    /**
     * An enumerated type that indicates whether the availability request is for a room or non-room product, such as amenities or other activities (e.g.: banquet, conference room, etc.) Values: Room, NonRoom, Both.
     *
     * @var string $availReqType
     */
    private $availReqType = null;

    /**
     * The availability response returns the attribute if there were additional rates that could not fit within the availability response. The text value should be echoed in this availability request to indicate where to begin the next block of availability data.
     *
     * @var string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * Defines whether the response is a property list or an area list.
     *
     * @var string $responseType
     */
    private $responseType = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @var string $infoSource
     */
    private $infoSource = null;

    /**
     * Availability search criteria should be specified here for implementations using OpenTravel messages that are LATER than 2005B which was version 1.005 of this message, e.g. 2006A through the current specification.
     *
     * @var \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\HotelSearchCriteriaAType $hotelSearchCriteria
     */
    private $hotelSearchCriteria = null;

    /**
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed). **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @var \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RateRangeAType[] $rateRange
     */
    private $rateRange = [
        
    ];

    /**
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @var \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @var \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[] $roomStayCandidates
     */
    private $roomStayCandidates = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as availReqType
     *
     * An enumerated type that indicates whether the availability request is for a room or non-room product, such as amenities or other activities (e.g.: banquet, conference room, etc.) Values: Room, NonRoom, Both.
     *
     * @return string
     */
    public function getAvailReqType()
    {
        return $this->availReqType;
    }

    /**
     * Sets a new availReqType
     *
     * An enumerated type that indicates whether the availability request is for a room or non-room product, such as amenities or other activities (e.g.: banquet, conference room, etc.) Values: Room, NonRoom, Both.
     *
     * @param string $availReqType
     * @return self
     */
    public function setAvailReqType($availReqType)
    {
        $this->availReqType = $availReqType;
        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * The availability response returns the attribute if there were additional rates that could not fit within the availability response. The text value should be echoed in this availability request to indicate where to begin the next block of availability data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The availability response returns the attribute if there were additional rates that could not fit within the availability response. The text value should be echoed in this availability request to indicate where to begin the next block of availability data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;
        return $this;
    }

    /**
     * Gets as hotelSearchCriteria
     *
     * Availability search criteria should be specified here for implementations using OpenTravel messages that are LATER than 2005B which was version 1.005 of this message, e.g. 2006A through the current specification.
     *
     * @return \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\HotelSearchCriteriaAType
     */
    public function getHotelSearchCriteria()
    {
        return $this->hotelSearchCriteria;
    }

    /**
     * Sets a new hotelSearchCriteria
     *
     * Availability search criteria should be specified here for implementations using OpenTravel messages that are LATER than 2005B which was version 1.005 of this message, e.g. 2006A through the current specification.
     *
     * @param \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\HotelSearchCriteriaAType $hotelSearchCriteria
     * @return self
     */
    public function setHotelSearchCriteria(?\Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\HotelSearchCriteriaAType $hotelSearchCriteria = null)
    {
        $this->hotelSearchCriteria = $hotelSearchCriteria;
        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed). **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType
     */
    public function getStayDateRange()
    {
        return $this->stayDateRange;
    }

    /**
     * Sets a new stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed). **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType $stayDateRange
     * @return self
     */
    public function setStayDateRange(?\Recranet\OTA\Type\DateTimeSpanType $stayDateRange = null)
    {
        $this->stayDateRange = $stayDateRange;
        return $this;
    }

    /**
     * Adds as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return self
     * @param \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RateRangeAType $rateRange
     */
    public function addToRateRange(\Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RateRangeAType $rateRange)
    {
        $this->rateRange[] = $rateRange;
        return $this;
    }

    /**
     * isset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateRange($index)
    {
        return isset($this->rateRange[$index]);
    }

    /**
     * unset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateRange($index)
    {
        unset($this->rateRange[$index]);
    }

    /**
     * Gets as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RateRangeAType[] $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Adds as ratePlanCandidate
     *
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
     */
    public function addToRatePlanCandidates(\Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate)
    {
        $this->ratePlanCandidates[] = $ratePlanCandidate;
        return $this;
    }

    /**
     * isset ratePlanCandidates
     *
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
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
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
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
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(array $ratePlanCandidates = null)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as roomStayCandidate
     *
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return self
     * @param \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType $roomStayCandidate
     */
    public function addToRoomStayCandidates(\Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType $roomStayCandidate)
    {
        $this->roomStayCandidates[] = $roomStayCandidate;
        return $this;
    }

    /**
     * isset roomStayCandidates
     *
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStayCandidates($index)
    {
        return isset($this->roomStayCandidates[$index]);
    }

    /**
     * unset roomStayCandidates
     *
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStayCandidates($index)
    {
        unset($this->roomStayCandidates[$index]);
    }

    /**
     * Gets as roomStayCandidates
     *
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @return \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[]
     */
    public function getRoomStayCandidates()
    {
        return $this->roomStayCandidates;
    }

    /**
     * Sets a new roomStayCandidates
     *
     * Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     *
     * @param \Recranet\OTA\Type\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[] $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(array $roomStayCandidates = null)
    {
        $this->roomStayCandidates = $roomStayCandidates;
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

