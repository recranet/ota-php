<?php

namespace Recranet\OTA\HotelInfoType;

/**
 * Class representing ClosedSeasonsAType
 */
class ClosedSeasonsAType
{
    /**
     * A date and time period when a hotel facility is closed.
     *
     * @var \Recranet\OTA\DateTimeSpanType[] $closedSeason
     */
    private $closedSeason = [
        
    ];

    /**
     * Adds as closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @return self
     * @param \Recranet\OTA\DateTimeSpanType $closedSeason
     */
    public function addToClosedSeason(\Recranet\OTA\DateTimeSpanType $closedSeason)
    {
        $this->closedSeason[] = $closedSeason;
        return $this;
    }

    /**
     * isset closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClosedSeason($index)
    {
        return isset($this->closedSeason[$index]);
    }

    /**
     * unset closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClosedSeason($index)
    {
        unset($this->closedSeason[$index]);
    }

    /**
     * Gets as closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @return \Recranet\OTA\DateTimeSpanType[]
     */
    public function getClosedSeason()
    {
        return $this->closedSeason;
    }

    /**
     * Sets a new closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param \Recranet\OTA\DateTimeSpanType[] $closedSeason
     * @return self
     */
    public function setClosedSeason(array $closedSeason)
    {
        $this->closedSeason = $closedSeason;
        return $this;
    }
}

