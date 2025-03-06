<?php

namespace Recranet\OTA\Type\HotelDescriptiveContentType\EffectivePeriodsAType;

/**
 * Class representing EffectivePeriodAType
 */
class EffectivePeriodAType
{
    /**
     * Defines the start of a period either the day and month or the actual date.
     *
     * @var \DateTime $startPeriod
     */
    private $startPeriod = null;

    /**
     * Defines the duration of a period.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Defines the end of a period either the day and month or the actual date.
     *
     * @var \DateTime $endPeriod
     */
    private $endPeriod = null;

    /**
     * Gets as startPeriod
     *
     * Defines the start of a period either the day and month or the actual date.
     *
     * @return \DateTime
     */
    public function getStartPeriod()
    {
        return $this->startPeriod;
    }

    /**
     * Sets a new startPeriod
     *
     * Defines the start of a period either the day and month or the actual date.
     *
     * @param \DateTime $startPeriod
     * @return self
     */
    public function setStartPeriod(\DateTime $startPeriod)
    {
        $this->startPeriod = $startPeriod;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Defines the duration of a period.
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
     * Defines the duration of a period.
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
     * Gets as endPeriod
     *
     * Defines the end of a period either the day and month or the actual date.
     *
     * @return \DateTime
     */
    public function getEndPeriod()
    {
        return $this->endPeriod;
    }

    /**
     * Sets a new endPeriod
     *
     * Defines the end of a period either the day and month or the actual date.
     *
     * @param \DateTime $endPeriod
     * @return self
     */
    public function setEndPeriod(\DateTime $endPeriod)
    {
        $this->endPeriod = $endPeriod;
        return $this;
    }
}

