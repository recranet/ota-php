<?php

namespace Recranet\OTA\HotelSearchCriterionType;

/**
 * Class representing RoomStayCandidatesAType
 */
class RoomStayCandidatesAType
{
    /**
     * Element used to identify available room products.
     *
     * @var \Recranet\OTA\RoomStayCandidateType[] $roomStayCandidate
     */
    private $roomStayCandidate = [
        
    ];

    /**
     * Adds as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return self
     * @param \Recranet\OTA\RoomStayCandidateType $roomStayCandidate
     */
    public function addToRoomStayCandidate(\Recranet\OTA\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidate[] = $roomStayCandidate;
        return $this;
    }

    /**
     * isset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStayCandidate($index)
    {
        return isset($this->roomStayCandidate[$index]);
    }

    /**
     * unset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStayCandidate($index)
    {
        unset($this->roomStayCandidate[$index]);
    }

    /**
     * Gets as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return \Recranet\OTA\RoomStayCandidateType[]
     */
    public function getRoomStayCandidate()
    {
        return $this->roomStayCandidate;
    }

    /**
     * Sets a new roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param \Recranet\OTA\RoomStayCandidateType[] $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(array $roomStayCandidate)
    {
        $this->roomStayCandidate = $roomStayCandidate;
        return $this;
    }
}

