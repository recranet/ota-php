<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType;

/**
 * Class representing StayDateAType
 */
class StayDateAType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Indicates the availability of the dates offered.
     *
     * @var string $availabilityOptionType
     */
    private $availabilityOptionType = null;

    /**
     * A collection of multiple StayDateRooms.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[] $stayDateRooms
     */
    private $stayDateRooms = null;

    /**
     * Comments for the date or date range as a whole.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as availabilityOptionType
     *
     * Indicates the availability of the dates offered.
     *
     * @return string
     */
    public function getAvailabilityOptionType()
    {
        return $this->availabilityOptionType;
    }

    /**
     * Sets a new availabilityOptionType
     *
     * Indicates the availability of the dates offered.
     *
     * @param string $availabilityOptionType
     * @return self
     */
    public function setAvailabilityOptionType($availabilityOptionType)
    {
        $this->availabilityOptionType = $availabilityOptionType;
        return $this;
    }

    /**
     * Adds as stayDateRoom
     *
     * A collection of multiple StayDateRooms.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom
     */
    public function addToStayDateRooms(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom)
    {
        $this->stayDateRooms[] = $stayDateRoom;
        return $this;
    }

    /**
     * isset stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDateRooms($index)
    {
        return isset($this->stayDateRooms[$index]);
    }

    /**
     * unset stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDateRooms($index)
    {
        unset($this->stayDateRooms[$index]);
    }

    /**
     * Gets as stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     */
    public function getStayDateRooms()
    {
        return $this->stayDateRooms;
    }

    /**
     * Sets a new stayDateRooms
     *
     * A collection of multiple StayDateRooms.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[] $stayDateRooms
     * @return self
     */
    public function setStayDateRooms(array $stayDateRooms = null)
    {
        $this->stayDateRooms = $stayDateRooms;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments for the date or date range as a whole.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments for the date or date range as a whole.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments for the date or date range as a whole.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

