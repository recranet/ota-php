<?php

namespace Recranet\OTA\Type\RateRulesType\PickupReturnRulesAType;

/**
 * Class representing EarliestReturnAType
 */
class EarliestReturnAType
{
    /**
     * The earliest day of the week the rental can terminate to qualify for the specific rate.
     *
     * @var string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * The earliest time, in conjunction with the DayOfWeek, the rental can terminate to qualify for the specific rate.
     *
     * @var \DateTime $time
     */
    private $time = null;

    /**
     * Gets as dayOfWeek
     *
     * The earliest day of the week the rental can terminate to qualify for the specific rate.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * The earliest day of the week the rental can terminate to qualify for the specific rate.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Gets as time
     *
     * The earliest time, in conjunction with the DayOfWeek, the rental can terminate to qualify for the specific rate.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The earliest time, in conjunction with the DayOfWeek, the rental can terminate to qualify for the specific rate.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }
}

