<?php

namespace Recranet\OTA\MeetingRoomCapacityType;

/**
 * Class representing OccupancyAType
 */
class OccupancyAType
{
    /**
     * The minimum number of people in this meeting room.
     *
     * @var int $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * The maximum number of people in this meeting room.
     *
     * @var int $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * The standard number of people in this meeting room.
     *
     * @var int $standardOccupancy
     */
    private $standardOccupancy = null;

    /**
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @var \Recranet\OTA\FeeType $minRoomCharge
     */
    private $minRoomCharge = null;

    /**
     * Gets as minOccupancy
     *
     * The minimum number of people in this meeting room.
     *
     * @return int
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * The minimum number of people in this meeting room.
     *
     * @param int $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;
        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * The maximum number of people in this meeting room.
     *
     * @return int
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * The maximum number of people in this meeting room.
     *
     * @param int $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;
        return $this;
    }

    /**
     * Gets as standardOccupancy
     *
     * The standard number of people in this meeting room.
     *
     * @return int
     */
    public function getStandardOccupancy()
    {
        return $this->standardOccupancy;
    }

    /**
     * Sets a new standardOccupancy
     *
     * The standard number of people in this meeting room.
     *
     * @param int $standardOccupancy
     * @return self
     */
    public function setStandardOccupancy($standardOccupancy)
    {
        $this->standardOccupancy = $standardOccupancy;
        return $this;
    }

    /**
     * Gets as minRoomCharge
     *
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @return \Recranet\OTA\FeeType
     */
    public function getMinRoomCharge()
    {
        return $this->minRoomCharge;
    }

    /**
     * Sets a new minRoomCharge
     *
     * The minimum room charge for this meeting room such as room rental fee.
     *
     * @param \Recranet\OTA\FeeType $minRoomCharge
     * @return self
     */
    public function setMinRoomCharge(?\Recranet\OTA\FeeType $minRoomCharge = null)
    {
        $this->minRoomCharge = $minRoomCharge;
        return $this;
    }
}

