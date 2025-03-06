<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType;

/**
 * Class representing EventDateAType
 */
class EventDateAType
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
     * A collection of multiple EventDateFunctions.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType $eventDateFunctions
     */
    private $eventDateFunctions = null;

    /**
     * A collection of charges associated to an event.
     *
     * @var \Recranet\OTA\Type\EventChargeType $eventCharges
     */
    private $eventCharges = null;

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
     * Gets as eventDateFunctions
     *
     * A collection of multiple EventDateFunctions.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType
     */
    public function getEventDateFunctions()
    {
        return $this->eventDateFunctions;
    }

    /**
     * Sets a new eventDateFunctions
     *
     * A collection of multiple EventDateFunctions.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType $eventDateFunctions
     * @return self
     */
    public function setEventDateFunctions(?\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType $eventDateFunctions = null)
    {
        $this->eventDateFunctions = $eventDateFunctions;
        return $this;
    }

    /**
     * Gets as eventCharges
     *
     * A collection of charges associated to an event.
     *
     * @return \Recranet\OTA\Type\EventChargeType
     */
    public function getEventCharges()
    {
        return $this->eventCharges;
    }

    /**
     * Sets a new eventCharges
     *
     * A collection of charges associated to an event.
     *
     * @param \Recranet\OTA\Type\EventChargeType $eventCharges
     * @return self
     */
    public function setEventCharges(?\Recranet\OTA\Type\EventChargeType $eventCharges = null)
    {
        $this->eventCharges = $eventCharges;
        return $this;
    }
}

