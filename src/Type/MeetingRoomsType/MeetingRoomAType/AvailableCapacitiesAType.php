<?php

namespace Recranet\OTA\Type\MeetingRoomsType\MeetingRoomAType;

/**
 * Class representing AvailableCapacitiesAType
 */
class AvailableCapacitiesAType
{
    /**
     * The measureable dimensions and capacities of a meeting room.
     *
     * @var \Recranet\OTA\Type\MeetingRoomCapacityType[] $meetingRoomCapacity
     */
    private $meetingRoomCapacity = [
        
    ];

    /**
     * Adds as meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @return self
     * @param \Recranet\OTA\Type\MeetingRoomCapacityType $meetingRoomCapacity
     */
    public function addToMeetingRoomCapacity(\Recranet\OTA\Type\MeetingRoomCapacityType $meetingRoomCapacity)
    {
        $this->meetingRoomCapacity[] = $meetingRoomCapacity;
        return $this;
    }

    /**
     * isset meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeetingRoomCapacity($index)
    {
        return isset($this->meetingRoomCapacity[$index]);
    }

    /**
     * unset meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeetingRoomCapacity($index)
    {
        unset($this->meetingRoomCapacity[$index]);
    }

    /**
     * Gets as meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @return \Recranet\OTA\Type\MeetingRoomCapacityType[]
     */
    public function getMeetingRoomCapacity()
    {
        return $this->meetingRoomCapacity;
    }

    /**
     * Sets a new meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param \Recranet\OTA\Type\MeetingRoomCapacityType[] $meetingRoomCapacity
     * @return self
     */
    public function setMeetingRoomCapacity(array $meetingRoomCapacity)
    {
        $this->meetingRoomCapacity = $meetingRoomCapacity;
        return $this;
    }
}

