<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VoluntaryChangesType
 *
 * Specifies charges and/or penalties associated with making ticket changes after purchase.
 * XSD Type: VoluntaryChangesType
 */
class VoluntaryChangesType
{
    /**
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @var bool $volChangeInd
     */
    private $volChangeInd = null;

    /**
     * Specifies penalty charges as either a currency amount or a percentage of the fare.
     *
     * @var \Recranet\OTA\Type\VoluntaryChangesType\PenaltyAType $penalty
     */
    private $penalty = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @return bool
     */
    public function getVolChangeInd()
    {
        return $this->volChangeInd;
    }

    /**
     * Sets a new volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @param bool $volChangeInd
     * @return self
     */
    public function setVolChangeInd($volChangeInd)
    {
        $this->volChangeInd = $volChangeInd;
        return $this;
    }

    /**
     * Gets as penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the fare.
     *
     * @return \Recranet\OTA\Type\VoluntaryChangesType\PenaltyAType
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Sets a new penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the fare.
     *
     * @param \Recranet\OTA\Type\VoluntaryChangesType\PenaltyAType $penalty
     * @return self
     */
    public function setPenalty(?\Recranet\OTA\Type\VoluntaryChangesType\PenaltyAType $penalty = null)
    {
        $this->penalty = $penalty;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

