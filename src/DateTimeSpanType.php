<?php

namespace Recranet\OTA;

/**
 * Class representing DateTimeSpanType
 *
 * Used to specify a time window range by either specifying an earliest and latest date for the start date and end date or by giving a date with a time period that can be applied before and/or after the start date.
 * XSD Type: DateTimeSpanType
 */
class DateTimeSpanType
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
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @var \Recranet\OTA\TimeInstantType $dateWindowRange
     */
    private $dateWindowRange = null;

    /**
     * The earliest and latest dates acceptable for the start date.
     *
     * @var \Recranet\OTA\DateTimeSpanType\StartDateWindowAType $startDateWindow
     */
    private $startDateWindow = null;

    /**
     * The earliest and latest dates acceptable for the end date.
     *
     * @var \Recranet\OTA\DateTimeSpanType\EndDateWindowAType $endDateWindow
     */
    private $endDateWindow = null;

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
     * Gets as dateWindowRange
     *
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @return \Recranet\OTA\TimeInstantType
     */
    public function getDateWindowRange()
    {
        return $this->dateWindowRange;
    }

    /**
     * Sets a new dateWindowRange
     *
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @param \Recranet\OTA\TimeInstantType $dateWindowRange
     * @return self
     */
    public function setDateWindowRange(?\Recranet\OTA\TimeInstantType $dateWindowRange = null)
    {
        $this->dateWindowRange = $dateWindowRange;
        return $this;
    }

    /**
     * Gets as startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @return \Recranet\OTA\DateTimeSpanType\StartDateWindowAType
     */
    public function getStartDateWindow()
    {
        return $this->startDateWindow;
    }

    /**
     * Sets a new startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @param \Recranet\OTA\DateTimeSpanType\StartDateWindowAType $startDateWindow
     * @return self
     */
    public function setStartDateWindow(?\Recranet\OTA\DateTimeSpanType\StartDateWindowAType $startDateWindow = null)
    {
        $this->startDateWindow = $startDateWindow;
        return $this;
    }

    /**
     * Gets as endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @return \Recranet\OTA\DateTimeSpanType\EndDateWindowAType
     */
    public function getEndDateWindow()
    {
        return $this->endDateWindow;
    }

    /**
     * Sets a new endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @param \Recranet\OTA\DateTimeSpanType\EndDateWindowAType $endDateWindow
     * @return self
     */
    public function setEndDateWindow(?\Recranet\OTA\DateTimeSpanType\EndDateWindowAType $endDateWindow = null)
    {
        $this->endDateWindow = $endDateWindow;
        return $this;
    }
}

