<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockRQ\OTAHotelInvBlockRQAType\HotelInvBlockRequestsAType\HotelInvBlockRequestAType;

/**
 * Class representing DateRangeAType
 */
class DateRangeAType
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
}

