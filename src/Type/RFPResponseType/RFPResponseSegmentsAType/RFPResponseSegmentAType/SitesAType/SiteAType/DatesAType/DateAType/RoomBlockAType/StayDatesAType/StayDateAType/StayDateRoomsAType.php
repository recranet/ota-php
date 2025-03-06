<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType;

/**
 * Class representing StayDateRoomsAType
 */
class StayDateRoomsAType
{
    /**
     * A container for the room availability data.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[] $stayDateRoom
     */
    private $stayDateRoom = [
        
    ];

    /**
     * Adds as stayDateRoom
     *
     * A container for the room availability data.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom
     */
    public function addToStayDateRoom(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom)
    {
        $this->stayDateRoom[] = $stayDateRoom;
        return $this;
    }

    /**
     * isset stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDateRoom($index)
    {
        return isset($this->stayDateRoom[$index]);
    }

    /**
     * unset stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDateRoom($index)
    {
        unset($this->stayDateRoom[$index]);
    }

    /**
     * Gets as stayDateRoom
     *
     * A container for the room availability data.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     */
    public function getStayDateRoom()
    {
        return $this->stayDateRoom;
    }

    /**
     * Sets a new stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[] $stayDateRoom
     * @return self
     */
    public function setStayDateRoom(array $stayDateRoom)
    {
        $this->stayDateRoom = $stayDateRoom;
        return $this;
    }
}

