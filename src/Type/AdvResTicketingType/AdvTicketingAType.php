<?php

namespace Recranet\OTA\Type\AdvResTicketingType;

/**
 * Class representing AdvTicketingAType
 */
class AdvTicketingAType
{
    /**
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @var \DateTime $fromResTimeOfDay
     */
    private $fromResTimeOfDay = null;

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @var string $fromResPeriod
     */
    private $fromResPeriod = null;

    /**
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @var string $fromResUnit
     */
    private $fromResUnit = null;

    /**
     * The time of day prior to departure when that a ticket must be purchased.
     *
     * @var \DateTime $fromDepartTimeOfDay
     */
    private $fromDepartTimeOfDay = null;

    /**
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @var string $fromDepartPeriod
     */
    private $fromDepartPeriod = null;

    /**
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @var string $fromDepartUnit
     */
    private $fromDepartUnit = null;

    /**
     * Gets as fromResTimeOfDay
     *
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @return \DateTime
     */
    public function getFromResTimeOfDay()
    {
        return $this->fromResTimeOfDay;
    }

    /**
     * Sets a new fromResTimeOfDay
     *
     * The time of day after reservations are made by which a ticket must be purchased.
     *
     * @param \DateTime $fromResTimeOfDay
     * @return self
     */
    public function setFromResTimeOfDay(\DateTime $fromResTimeOfDay)
    {
        $this->fromResTimeOfDay = $fromResTimeOfDay;
        return $this;
    }

    /**
     * Gets as fromResPeriod
     *
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromResPeriod()
    {
        return $this->fromResPeriod;
    }

    /**
     * Sets a new fromResPeriod
     *
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     *
     * @param string $fromResPeriod
     * @return self
     */
    public function setFromResPeriod($fromResPeriod)
    {
        $this->fromResPeriod = $fromResPeriod;
        return $this;
    }

    /**
     * Gets as fromResUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromResUnit()
    {
        return $this->fromResUnit;
    }

    /**
     * Sets a new fromResUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     *
     * @param string $fromResUnit
     * @return self
     */
    public function setFromResUnit($fromResUnit)
    {
        $this->fromResUnit = $fromResUnit;
        return $this;
    }

    /**
     * Gets as fromDepartTimeOfDay
     *
     * The time of day prior to departure when that a ticket must be purchased.
     *
     * @return \DateTime
     */
    public function getFromDepartTimeOfDay()
    {
        return $this->fromDepartTimeOfDay;
    }

    /**
     * Sets a new fromDepartTimeOfDay
     *
     * The time of day prior to departure when that a ticket must be purchased.
     *
     * @param \DateTime $fromDepartTimeOfDay
     * @return self
     */
    public function setFromDepartTimeOfDay(\DateTime $fromDepartTimeOfDay)
    {
        $this->fromDepartTimeOfDay = $fromDepartTimeOfDay;
        return $this;
    }

    /**
     * Gets as fromDepartPeriod
     *
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromDepartPeriod()
    {
        return $this->fromDepartPeriod;
    }

    /**
     * Sets a new fromDepartPeriod
     *
     * A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     *
     * @param string $fromDepartPeriod
     * @return self
     */
    public function setFromDepartPeriod($fromDepartPeriod)
    {
        $this->fromDepartPeriod = $fromDepartPeriod;
        return $this;
    }

    /**
     * Gets as fromDepartUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @return string
     */
    public function getFromDepartUnit()
    {
        return $this->fromDepartUnit;
    }

    /**
     * Sets a new fromDepartUnit
     *
     * The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     *
     * @param string $fromDepartUnit
     * @return self
     */
    public function setFromDepartUnit($fromDepartUnit)
    {
        $this->fromDepartUnit = $fromDepartUnit;
        return $this;
    }
}

