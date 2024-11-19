<?php

namespace Recranet\OTA\AdvResTicketingType;

/**
 * Class representing AdvReservationAType
 */
class AdvReservationAType
{
    /**
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @var \DateTime $latestTimeOfDay
     */
    private $latestTimeOfDay = null;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @var string $latestPeriod
     */
    private $latestPeriod = null;

    /**
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @var string $latestUnit
     */
    private $latestUnit = null;

    /**
     * Gets as latestTimeOfDay
     *
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @return \DateTime
     */
    public function getLatestTimeOfDay()
    {
        return $this->latestTimeOfDay;
    }

    /**
     * Sets a new latestTimeOfDay
     *
     * The time of day by which reservations must be made on the last day that advance reservations can be made.
     *
     * @param \DateTime $latestTimeOfDay
     * @return self
     */
    public function setLatestTimeOfDay(\DateTime $latestTimeOfDay)
    {
        $this->latestTimeOfDay = $latestTimeOfDay;
        return $this;
    }

    /**
     * Gets as latestPeriod
     *
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @return string
     */
    public function getLatestPeriod()
    {
        return $this->latestPeriod;
    }

    /**
     * Sets a new latestPeriod
     *
     * The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     *
     * @param string $latestPeriod
     * @return self
     */
    public function setLatestPeriod($latestPeriod)
    {
        $this->latestPeriod = $latestPeriod;
        return $this;
    }

    /**
     * Gets as latestUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @return string
     */
    public function getLatestUnit()
    {
        return $this->latestUnit;
    }

    /**
     * Sets a new latestUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     *
     * @param string $latestUnit
     * @return self
     */
    public function setLatestUnit($latestUnit)
    {
        $this->latestUnit = $latestUnit;
        return $this;
    }
}

