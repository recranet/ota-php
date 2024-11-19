<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing RestrictionStatusCandidatesAType
 */
class RestrictionStatusCandidatesAType
{
    /**
     * Boolean Flag indicating if all restriction status types should be sent or only the ones requested in RestrictionStatusCandidate.
     *
     * @var bool $sendAllRestrictions
     */
    private $sendAllRestrictions = null;

    /**
     * Availability status assigned to the room rate combination.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType\RestrictionStatusCandidateAType[] $restrictionStatusCandidate
     */
    private $restrictionStatusCandidate = [
        
    ];

    /**
     * Gets as sendAllRestrictions
     *
     * Boolean Flag indicating if all restriction status types should be sent or only the ones requested in RestrictionStatusCandidate.
     *
     * @return bool
     */
    public function getSendAllRestrictions()
    {
        return $this->sendAllRestrictions;
    }

    /**
     * Sets a new sendAllRestrictions
     *
     * Boolean Flag indicating if all restriction status types should be sent or only the ones requested in RestrictionStatusCandidate.
     *
     * @param bool $sendAllRestrictions
     * @return self
     */
    public function setSendAllRestrictions($sendAllRestrictions)
    {
        $this->sendAllRestrictions = $sendAllRestrictions;
        return $this;
    }

    /**
     * Adds as restrictionStatusCandidate
     *
     * Availability status assigned to the room rate combination.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType\RestrictionStatusCandidateAType $restrictionStatusCandidate
     */
    public function addToRestrictionStatusCandidate(\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType\RestrictionStatusCandidateAType $restrictionStatusCandidate)
    {
        $this->restrictionStatusCandidate[] = $restrictionStatusCandidate;
        return $this;
    }

    /**
     * isset restrictionStatusCandidate
     *
     * Availability status assigned to the room rate combination.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictionStatusCandidate($index)
    {
        return isset($this->restrictionStatusCandidate[$index]);
    }

    /**
     * unset restrictionStatusCandidate
     *
     * Availability status assigned to the room rate combination.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictionStatusCandidate($index)
    {
        unset($this->restrictionStatusCandidate[$index]);
    }

    /**
     * Gets as restrictionStatusCandidate
     *
     * Availability status assigned to the room rate combination.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType\RestrictionStatusCandidateAType[]
     */
    public function getRestrictionStatusCandidate()
    {
        return $this->restrictionStatusCandidate;
    }

    /**
     * Sets a new restrictionStatusCandidate
     *
     * Availability status assigned to the room rate combination.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType\RestrictionStatusCandidateAType[] $restrictionStatusCandidate
     * @return self
     */
    public function setRestrictionStatusCandidate(array $restrictionStatusCandidate)
    {
        $this->restrictionStatusCandidate = $restrictionStatusCandidate;
        return $this;
    }
}

