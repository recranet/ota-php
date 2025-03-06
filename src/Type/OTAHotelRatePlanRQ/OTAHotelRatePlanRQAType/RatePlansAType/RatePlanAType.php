<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
{
    /**
     * A date or range of dates for the rate plan.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\DateRangeAType $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
     *
     * @var string[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * Collection of requested rate plans
     *
     * @var \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * Collection of requested offers.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType $offers
     */
    private $offers = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\DateRangeAType
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
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\DateRangeAType $dateRange
     * @return self
     */
    public function setDateRange(?\Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\DateRangeAType $dateRange = null)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
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
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
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
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
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
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
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
     * A collection of destination system codes. These are systems for which this rate plan is targeted.
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
     * Collection of requested rate plans
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
     * Collection of requested rate plans
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
     * Collection of requested rate plans
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
     * Collection of requested rate plans
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
     * Collection of requested rate plans
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
     * Gets as offers
     *
     * Collection of requested offers.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType
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
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType $offers
     * @return self
     */
    public function setOffers(?\Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\OffersAType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\HotelRefAType
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
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\OTAHotelRatePlanRQ\OTAHotelRatePlanRQAType\RatePlansAType\RatePlanAType\HotelRefAType $hotelRef = null)
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

