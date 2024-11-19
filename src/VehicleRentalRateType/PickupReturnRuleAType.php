<?php

namespace Recranet\OTA\VehicleRentalRateType;

/**
 * Class representing PickupReturnRuleAType
 */
class PickupReturnRuleAType
{
    /**
     * The earliest day of the week the rental can begin to qualify for the specific rate.
     *
     * @var string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * The earliest time, in conjunction with the DayOfWeek, the rental can commence to qualify for the specific rate.
     *
     * @var \DateTime $time
     */
    private $time = null;

    /**
     * Specifies the applicability of this rule.
     *
     * @var string $ruleType
     */
    private $ruleType = null;

    /**
     * Gets as dayOfWeek
     *
     * The earliest day of the week the rental can begin to qualify for the specific rate.
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
     * The earliest day of the week the rental can begin to qualify for the specific rate.
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
     * The earliest time, in conjunction with the DayOfWeek, the rental can commence to qualify for the specific rate.
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
     * The earliest time, in conjunction with the DayOfWeek, the rental can commence to qualify for the specific rate.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as ruleType
     *
     * Specifies the applicability of this rule.
     *
     * @return string
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * Sets a new ruleType
     *
     * Specifies the applicability of this rule.
     *
     * @param string $ruleType
     * @return self
     */
    public function setRuleType($ruleType)
    {
        $this->ruleType = $ruleType;
        return $this;
    }
}

