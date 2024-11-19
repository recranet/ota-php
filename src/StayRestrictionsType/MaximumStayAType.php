<?php

namespace Recranet\OTA\StayRestrictionsType;

/**
 * Class representing MaximumStayAType
 */
class MaximumStayAType
{
    /**
     * Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @var string $returnType
     */
    private $returnType = null;

    /**
     * The time of day when return travel may commence.
     *
     * @var \DateTime $returnTimeOfDay
     */
    private $returnTimeOfDay = null;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @var int $maxStay
     */
    private $maxStay = null;

    /**
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @var string $stayUnit
     */
    private $stayUnit = null;

    /**
     * The specific date for the maximum stay requirement.
     *
     * @var \DateTime $maxStayDate
     */
    private $maxStayDate = null;

    /**
     * If true, there are complicated rules for the maximum stay requirement.
     *
     * @var bool $complicatedRulesInd
     */
    private $complicatedRulesInd = null;

    /**
     * Gets as returnType
     *
     * Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * Sets a new returnType
     *
     * Code indicating whether travel must commence or be completed in order to satisfy the stay restriction.
     *
     * @param string $returnType
     * @return self
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;
        return $this;
    }

    /**
     * Gets as returnTimeOfDay
     *
     * The time of day when return travel may commence.
     *
     * @return \DateTime
     */
    public function getReturnTimeOfDay()
    {
        return $this->returnTimeOfDay;
    }

    /**
     * Sets a new returnTimeOfDay
     *
     * The time of day when return travel may commence.
     *
     * @param \DateTime $returnTimeOfDay
     * @return self
     */
    public function setReturnTimeOfDay(\DateTime $returnTimeOfDay)
    {
        $this->returnTimeOfDay = $returnTimeOfDay;
        return $this;
    }

    /**
     * Gets as maxStay
     *
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @return int
     */
    public function getMaxStay()
    {
        return $this->maxStay;
    }

    /**
     * Sets a new maxStay
     *
     * The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     *
     * @param int $maxStay
     * @return self
     */
    public function setMaxStay($maxStay)
    {
        $this->maxStay = $maxStay;
        return $this;
    }

    /**
     * Gets as stayUnit
     *
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @return string
     */
    public function getStayUnit()
    {
        return $this->stayUnit;
    }

    /**
     * Sets a new stayUnit
     *
     * The unit of elapsed time or the day of the week applied to the MaxStay value.
     *
     * @param string $stayUnit
     * @return self
     */
    public function setStayUnit($stayUnit)
    {
        $this->stayUnit = $stayUnit;
        return $this;
    }

    /**
     * Gets as maxStayDate
     *
     * The specific date for the maximum stay requirement.
     *
     * @return \DateTime
     */
    public function getMaxStayDate()
    {
        return $this->maxStayDate;
    }

    /**
     * Sets a new maxStayDate
     *
     * The specific date for the maximum stay requirement.
     *
     * @param \DateTime $maxStayDate
     * @return self
     */
    public function setMaxStayDate(\DateTime $maxStayDate)
    {
        $this->maxStayDate = $maxStayDate;
        return $this;
    }

    /**
     * Gets as complicatedRulesInd
     *
     * If true, there are complicated rules for the maximum stay requirement.
     *
     * @return bool
     */
    public function getComplicatedRulesInd()
    {
        return $this->complicatedRulesInd;
    }

    /**
     * Sets a new complicatedRulesInd
     *
     * If true, there are complicated rules for the maximum stay requirement.
     *
     * @param bool $complicatedRulesInd
     * @return self
     */
    public function setComplicatedRulesInd($complicatedRulesInd)
    {
        $this->complicatedRulesInd = $complicatedRulesInd;
        return $this;
    }
}

