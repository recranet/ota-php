<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType;

/**
 * Class representing DateAType
 */
class DateAType
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
     * This is an indicator that identifies if the dates match the primary or alternate dates or the suppliers other proposed dates.
     *
     * @var string $proposedDateIndicator
     */
    private $proposedDateIndicator = null;

    /**
     * This is information pertaining to room requirements for this request.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType $roomBlock
     */
    private $roomBlock = null;

    /**
     * This is information pertaining to the event requirements for this request.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType $eventBlock
     */
    private $eventBlock = null;

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
     * Gets as proposedDateIndicator
     *
     * This is an indicator that identifies if the dates match the primary or alternate dates or the suppliers other proposed dates.
     *
     * @return string
     */
    public function getProposedDateIndicator()
    {
        return $this->proposedDateIndicator;
    }

    /**
     * Sets a new proposedDateIndicator
     *
     * This is an indicator that identifies if the dates match the primary or alternate dates or the suppliers other proposed dates.
     *
     * @param string $proposedDateIndicator
     * @return self
     */
    public function setProposedDateIndicator($proposedDateIndicator)
    {
        $this->proposedDateIndicator = $proposedDateIndicator;
        return $this;
    }

    /**
     * Gets as roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType $roomBlock
     * @return self
     */
    public function setRoomBlock(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType $roomBlock = null)
    {
        $this->roomBlock = $roomBlock;
        return $this;
    }

    /**
     * Gets as eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType
     */
    public function getEventBlock()
    {
        return $this->eventBlock;
    }

    /**
     * Sets a new eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType $eventBlock
     * @return self
     */
    public function setEventBlock(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType $eventBlock = null)
    {
        $this->eventBlock = $eventBlock;
        return $this;
    }
}

