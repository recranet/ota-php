<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\VoluntaryChangesType\PenaltyAType $penalty
     */
    private $penalty = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
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
     * @return \Recranet\OTA\VoluntaryChangesType\PenaltyAType
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
     * @param \Recranet\OTA\VoluntaryChangesType\PenaltyAType $penalty
     * @return self
     */
    public function setPenalty(?\Recranet\OTA\VoluntaryChangesType\PenaltyAType $penalty = null)
    {
        $this->penalty = $penalty;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

