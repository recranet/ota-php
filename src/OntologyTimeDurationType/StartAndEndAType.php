<?php

namespace Recranet\OTA\OntologyTimeDurationType;

/**
 * Class representing StartAndEndAType
 */
class StartAndEndAType
{
    /**
     * Start date or date and time.
     * Example: 2013-01-13T20:32:00
     *
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * End date or date and time.
     * Example: 2013-01-13T23:37:00
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Duration unit of measure and value.
     * Example: Minute
     *
     * @var \Recranet\OTA\OntologyTimeDurationType\StartAndEndAType\DurationAType $duration
     */
    private $duration = null;

    /**
     * Gets as startDateTime
     *
     * Start date or date and time.
     * Example: 2013-01-13T20:32:00
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * Start date or date and time.
     * Example: 2013-01-13T20:32:00
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as end
     *
     * End date or date and time.
     * Example: 2013-01-13T23:37:00
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
     * End date or date and time.
     * Example: 2013-01-13T23:37:00
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(?\DateTime $end = null)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Duration unit of measure and value.
     * Example: Minute
     *
     * @return \Recranet\OTA\OntologyTimeDurationType\StartAndEndAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Duration unit of measure and value.
     * Example: Minute
     *
     * @param \Recranet\OTA\OntologyTimeDurationType\StartAndEndAType\DurationAType $duration
     * @return self
     */
    public function setDuration(?\Recranet\OTA\OntologyTimeDurationType\StartAndEndAType\DurationAType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}

