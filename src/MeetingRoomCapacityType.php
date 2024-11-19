<?php

namespace Recranet\OTA;

/**
 * Class representing MeetingRoomCapacityType
 *
 * The MeetingRoomCapacity object that defines the largest room seating capacity for a meeting room at the hotel facility.
 * XSD Type: MeetingRoomCapacityType
 */
class MeetingRoomCapacityType
{
    /**
     * The code for the format of a meeting room at the hotel facility, such as U-shape, banquet, conference style, etc. A hotel may indicate all formats that apply to the meeting room. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @var string $meetingRoomFormatCode
     */
    private $meetingRoomFormatCode = null;

    /**
     * The Occupancy details of a meeting room.
     *
     * @var \Recranet\OTA\MeetingRoomCapacityType\OccupancyAType $occupancy
     */
    private $occupancy = null;

    /**
     * Gets as meetingRoomFormatCode
     *
     * The code for the format of a meeting room at the hotel facility, such as U-shape, banquet, conference style, etc. A hotel may indicate all formats that apply to the meeting room. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getMeetingRoomFormatCode()
    {
        return $this->meetingRoomFormatCode;
    }

    /**
     * Sets a new meetingRoomFormatCode
     *
     * The code for the format of a meeting room at the hotel facility, such as U-shape, banquet, conference style, etc. A hotel may indicate all formats that apply to the meeting room. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $meetingRoomFormatCode
     * @return self
     */
    public function setMeetingRoomFormatCode($meetingRoomFormatCode)
    {
        $this->meetingRoomFormatCode = $meetingRoomFormatCode;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * The Occupancy details of a meeting room.
     *
     * @return \Recranet\OTA\MeetingRoomCapacityType\OccupancyAType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * The Occupancy details of a meeting room.
     *
     * @param \Recranet\OTA\MeetingRoomCapacityType\OccupancyAType $occupancy
     * @return self
     */
    public function setOccupancy(?\Recranet\OTA\MeetingRoomCapacityType\OccupancyAType $occupancy = null)
    {
        $this->occupancy = $occupancy;
        return $this;
    }
}

