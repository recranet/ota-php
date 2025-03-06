<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType;

/**
 * Class representing StayDayRoomsAType
 */
class StayDayRoomsAType
{
    /**
     * A container for the room requirements data.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[] $stayDayRoom
     */
    private $stayDayRoom = [
        
    ];

    /**
     * Adds as stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType $stayDayRoom
     */
    public function addToStayDayRoom(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType $stayDayRoom)
    {
        $this->stayDayRoom[] = $stayDayRoom;
        return $this;
    }

    /**
     * isset stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDayRoom($index)
    {
        return isset($this->stayDayRoom[$index]);
    }

    /**
     * unset stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDayRoom($index)
    {
        unset($this->stayDayRoom[$index]);
    }

    /**
     * Gets as stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     */
    public function getStayDayRoom()
    {
        return $this->stayDayRoom;
    }

    /**
     * Sets a new stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[] $stayDayRoom
     * @return self
     */
    public function setStayDayRoom(array $stayDayRoom)
    {
        $this->stayDayRoom = $stayDayRoom;
        return $this;
    }
}

