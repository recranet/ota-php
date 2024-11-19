<?php

namespace Recranet\OTA\BookingRulesType\BookingRuleAType;

/**
 * Class representing RestrictionStatusAType
 */
class RestrictionStatusAType
{
    /**
     * @var string $restriction
     */
    private $restriction = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * When true, this indicates sell through is open and when false, this indicates sell through is closed. Typically this would be used in conjunction with the Status attribute to indicate that bookings may be allowed based on a trading partner agreement even though one or more days are closed.
     *
     * @var bool $sellThroughOpenIndicator
     */
    private $sellThroughOpenIndicator = null;

    /**
     * Gets as restriction
     *
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * @param string $restriction
     * @return self
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as sellThroughOpenIndicator
     *
     * When true, this indicates sell through is open and when false, this indicates sell through is closed. Typically this would be used in conjunction with the Status attribute to indicate that bookings may be allowed based on a trading partner agreement even though one or more days are closed.
     *
     * @return bool
     */
    public function getSellThroughOpenIndicator()
    {
        return $this->sellThroughOpenIndicator;
    }

    /**
     * Sets a new sellThroughOpenIndicator
     *
     * When true, this indicates sell through is open and when false, this indicates sell through is closed. Typically this would be used in conjunction with the Status attribute to indicate that bookings may be allowed based on a trading partner agreement even though one or more days are closed.
     *
     * @param bool $sellThroughOpenIndicator
     * @return self
     */
    public function setSellThroughOpenIndicator($sellThroughOpenIndicator)
    {
        $this->sellThroughOpenIndicator = $sellThroughOpenIndicator;
        return $this;
    }
}

