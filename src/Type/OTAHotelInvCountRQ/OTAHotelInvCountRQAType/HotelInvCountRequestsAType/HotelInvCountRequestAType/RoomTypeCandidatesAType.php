<?php

namespace Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType;

/**
 * Class representing RoomTypeCandidatesAType
 */
class RoomTypeCandidatesAType
{
    /**
     * Element used to identify available room products.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidate
     */
    private $roomTypeCandidate = [
        
    ];

    /**
     * Adds as roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
     */
    public function addToRoomTypeCandidate(\Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate)
    {
        $this->roomTypeCandidate[] = $roomTypeCandidate;
        return $this;
    }

    /**
     * isset roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypeCandidate($index)
    {
        return isset($this->roomTypeCandidate[$index]);
    }

    /**
     * unset roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypeCandidate($index)
    {
        unset($this->roomTypeCandidate[$index]);
    }

    /**
     * Gets as roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidate()
    {
        return $this->roomTypeCandidate;
    }

    /**
     * Sets a new roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidate
     * @return self
     */
    public function setRoomTypeCandidate(array $roomTypeCandidate)
    {
        $this->roomTypeCandidate = $roomTypeCandidate;
        return $this;
    }
}

