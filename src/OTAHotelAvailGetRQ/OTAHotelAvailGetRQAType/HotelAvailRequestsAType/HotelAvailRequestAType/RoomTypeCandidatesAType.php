<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing RoomTypeCandidatesAType
 */
class RoomTypeCandidatesAType
{
    /**
     * Element used to specify room products.
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidate
     */
    private $roomTypeCandidate = [
        
    ];

    /**
     * Adds as roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
     */
    public function addToRoomTypeCandidate(\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate)
    {
        $this->roomTypeCandidate[] = $roomTypeCandidate;
        return $this;
    }

    /**
     * isset roomTypeCandidate
     *
     * Element used to specify room products.
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
     * Element used to specify room products.
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
     * Element used to specify room products.
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidate()
    {
        return $this->roomTypeCandidate;
    }

    /**
     * Sets a new roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[] $roomTypeCandidate
     * @return self
     */
    public function setRoomTypeCandidate(array $roomTypeCandidate)
    {
        $this->roomTypeCandidate = $roomTypeCandidate;
        return $this;
    }
}

