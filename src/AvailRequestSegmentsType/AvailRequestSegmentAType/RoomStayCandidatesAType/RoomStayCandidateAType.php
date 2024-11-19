<?php

namespace Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType;

use Recranet\OTA\RoomStayCandidateType;

/**
 * Class representing RoomStayCandidateAType
 */
class RoomStayCandidateAType extends RoomStayCandidateType
{
    /**
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @var bool $isAlternate
     */
    private $isAlternate = null;

    /**
     * Gets as isAlternate
     *
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @return bool
     */
    public function getIsAlternate()
    {
        return $this->isAlternate;
    }

    /**
     * Sets a new isAlternate
     *
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @param bool $isAlternate
     * @return self
     */
    public function setIsAlternate($isAlternate)
    {
        $this->isAlternate = $isAlternate;
        return $this;
    }
}

