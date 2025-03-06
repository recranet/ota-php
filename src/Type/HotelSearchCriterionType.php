<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelSearchCriterionType
 *
 * A collection of Profile objects or Unique IDs of Profiles.
 * XSD Type: HotelSearchCriterionType
 */
class HotelSearchCriterionType extends ItemSearchCriterionType
{
    /**
     * Hotel level amenities for searches.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\HotelAmenityAType[] $hotelAmenity
     */
    private $hotelAmenity = [
        
    ];

    /**
     * Room level amenities for searches.
     *
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenity
     */
    private $roomAmenity = [
        
    ];

    /**
     * Used to search for hotels based on hotel features.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\HotelFeatureAType[] $hotelFeature
     */
    private $hotelFeature = [
        
    ];

    /**
     * An element that identifies the hotel ratings.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\AwardAType[] $award
     */
    private $award = [
        
    ];

    /**
     * Identifies recreation facilities or amenities of interest.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Identifies business services of interest.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Identifies transportation facilities.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\TransportationAType[] $transportation
     */
    private $transportation = [
        
    ];

    /**
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\RateRangeAType[] $rateRange
     */
    private $rateRange = [
        
    ];

    /**
     * Collection of requested rate plans.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\RatePlanCandidatesAType $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * A collection of profile objects or unique IDs of profiles.
     *
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * Collection of room stay candidates.
     *
     * @var \Recranet\OTA\Type\RoomStayCandidateType[] $roomStayCandidates
     */
    private $roomStayCandidates = null;

    /**
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @var \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[] $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Used to search for hotels based on available media content.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\MediaAType[] $media
     */
    private $media = [
        
    ];

    /**
     * Used to search for hotels based on meeting facility requirements.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\HotelMeetingFacilityAType[] $hotelMeetingFacility
     */
    private $hotelMeetingFacility = [
        
    ];

    /**
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\MealPlanAType $mealPlan
     */
    private $mealPlan = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\Type\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Information linked to user content.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType\UserGeneratedContentAType $userGeneratedContent
     */
    private $userGeneratedContent = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelAmenityAType $hotelAmenity
     */
    public function addToHotelAmenity(\Recranet\OTA\Type\HotelSearchCriterionType\HotelAmenityAType $hotelAmenity)
    {
        $this->hotelAmenity[] = $hotelAmenity;
        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelAmenityAType[] $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity = null)
    {
        $this->hotelAmenity = $hotelAmenity;
        return $this;
    }

    /**
     * Adds as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomAmenityPrefType $roomAmenity
     */
    public function addToRoomAmenity(\Recranet\OTA\Type\RoomAmenityPrefType $roomAmenity)
    {
        $this->roomAmenity[] = $roomAmenity;
        return $this;
    }

    /**
     * isset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenity($index)
    {
        return isset($this->roomAmenity[$index]);
    }

    /**
     * unset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenity($index)
    {
        unset($this->roomAmenity[$index]);
    }

    /**
     * Gets as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenity
     * @return self
     */
    public function setRoomAmenity(array $roomAmenity = null)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }

    /**
     * Adds as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelFeatureAType $hotelFeature
     */
    public function addToHotelFeature(\Recranet\OTA\Type\HotelSearchCriterionType\HotelFeatureAType $hotelFeature)
    {
        $this->hotelFeature[] = $hotelFeature;
        return $this;
    }

    /**
     * isset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelFeature($index)
    {
        return isset($this->hotelFeature[$index]);
    }

    /**
     * unset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelFeature($index)
    {
        unset($this->hotelFeature[$index]);
    }

    /**
     * Gets as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\HotelFeatureAType[]
     */
    public function getHotelFeature()
    {
        return $this->hotelFeature;
    }

    /**
     * Sets a new hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelFeatureAType[] $hotelFeature
     * @return self
     */
    public function setHotelFeature(array $hotelFeature = null)
    {
        $this->hotelFeature = $hotelFeature;
        return $this;
    }

    /**
     * Adds as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\AwardAType $award
     */
    public function addToAward(\Recranet\OTA\Type\HotelSearchCriterionType\AwardAType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * An element that identifies the hotel ratings.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\AwardAType[] $award
     * @return self
     */
    public function setAward(array $award = null)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Adds as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\RecreationAType $recreation
     */
    public function addToRecreation(\Recranet\OTA\Type\HotelSearchCriterionType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation = null)
    {
        $this->recreation = $recreation;
        return $this;
    }

    /**
     * Adds as service
     *
     * Identifies business services of interest.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\ServiceAType $service
     */
    public function addToService(\Recranet\OTA\Type\HotelSearchCriterionType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Identifies business services of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Identifies business services of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Identifies business services of interest.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Identifies business services of interest.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as transportation
     *
     * Identifies transportation facilities.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\TransportationAType $transportation
     */
    public function addToTransportation(\Recranet\OTA\Type\HotelSearchCriterionType\TransportationAType $transportation)
    {
        $this->transportation[] = $transportation;
        return $this;
    }

    /**
     * isset transportation
     *
     * Identifies transportation facilities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportation($index)
    {
        return isset($this->transportation[$index]);
    }

    /**
     * unset transportation
     *
     * Identifies transportation facilities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportation($index)
    {
        unset($this->transportation[$index]);
    }

    /**
     * Gets as transportation
     *
     * Identifies transportation facilities.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\TransportationAType[]
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Identifies transportation facilities.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\TransportationAType[] $transportation
     * @return self
     */
    public function setTransportation(array $transportation = null)
    {
        $this->transportation = $transportation;
        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
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
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
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
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\RateRangeAType $rateRange
     */
    public function addToRateRange(\Recranet\OTA\Type\HotelSearchCriterionType\RateRangeAType $rateRange)
    {
        $this->rateRange[] = $rateRange;
        return $this;
    }

    /**
     * isset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
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
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
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
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\RateRangeAType[] $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\RatePlanCandidatesAType
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
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\RatePlanCandidatesAType $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(?\Recranet\OTA\Type\HotelSearchCriterionType\RatePlanCandidatesAType $ratePlanCandidates = null)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
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
     * Collection of room stay candidates.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomStayCandidateType $roomStayCandidate
     */
    public function addToRoomStayCandidates(\Recranet\OTA\Type\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidates[] = $roomStayCandidate;
        return $this;
    }

    /**
     * isset roomStayCandidates
     *
     * Collection of room stay candidates.
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
     * Collection of room stay candidates.
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
     * Collection of room stay candidates.
     *
     * @return \Recranet\OTA\Type\RoomStayCandidateType[]
     */
    public function getRoomStayCandidates()
    {
        return $this->roomStayCandidates;
    }

    /**
     * Sets a new roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param \Recranet\OTA\Type\RoomStayCandidateType[] $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(array $roomStayCandidates = null)
    {
        $this->roomStayCandidates = $roomStayCandidates;
        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @return self
     * @param \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
     */
    public function addToAcceptedPayments(\Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment)
    {
        $this->acceptedPayments[] = $acceptedPayment;
        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @return \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[] $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments = null)
    {
        $this->acceptedPayments = $acceptedPayments;
        return $this;
    }

    /**
     * Adds as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\MediaAType $media
     */
    public function addToMedia(\Recranet\OTA\Type\HotelSearchCriterionType\MediaAType $media)
    {
        $this->media[] = $media;
        return $this;
    }

    /**
     * isset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedia($index)
    {
        return isset($this->media[$index]);
    }

    /**
     * unset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedia($index)
    {
        unset($this->media[$index]);
    }

    /**
     * Gets as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\MediaAType[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * Used to search for hotels based on available media content.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\MediaAType[] $media
     * @return self
     */
    public function setMedia(array $media = null)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Adds as hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility
     */
    public function addToHotelMeetingFacility(\Recranet\OTA\Type\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility)
    {
        $this->hotelMeetingFacility[] = $hotelMeetingFacility;
        return $this;
    }

    /**
     * isset hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelMeetingFacility($index)
    {
        return isset($this->hotelMeetingFacility[$index]);
    }

    /**
     * unset hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelMeetingFacility($index)
    {
        unset($this->hotelMeetingFacility[$index]);
    }

    /**
     * Gets as hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\HotelMeetingFacilityAType[]
     */
    public function getHotelMeetingFacility()
    {
        return $this->hotelMeetingFacility;
    }

    /**
     * Sets a new hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\HotelMeetingFacilityAType[] $hotelMeetingFacility
     * @return self
     */
    public function setHotelMeetingFacility(array $hotelMeetingFacility = null)
    {
        $this->hotelMeetingFacility = $hotelMeetingFacility;
        return $this;
    }

    /**
     * Gets as mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\MealPlanAType
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\MealPlanAType $mealPlan
     * @return self
     */
    public function setMealPlan(?\Recranet\OTA\Type\HotelSearchCriterionType\MealPlanAType $mealPlan = null)
    {
        $this->mealPlan = $mealPlan;
        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Recranet\OTA\Type\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Recranet\OTA\Type\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;
        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Recranet\OTA\Type\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Recranet\OTA\Type\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms = null)
    {
        $this->rebatePrograms = $rebatePrograms;
        return $this;
    }

    /**
     * Gets as userGeneratedContent
     *
     * Information linked to user content.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType\UserGeneratedContentAType
     */
    public function getUserGeneratedContent()
    {
        return $this->userGeneratedContent;
    }

    /**
     * Sets a new userGeneratedContent
     *
     * Information linked to user content.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType\UserGeneratedContentAType $userGeneratedContent
     * @return self
     */
    public function setUserGeneratedContent(?\Recranet\OTA\Type\HotelSearchCriterionType\UserGeneratedContentAType $userGeneratedContent = null)
    {
        $this->userGeneratedContent = $userGeneratedContent;
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

