<?php

namespace Recranet\OTA\Type\RuleInfoType;

/**
 * Class representing ChargesRulesAType
 */
class ChargesRulesAType
{
    /**
     * Specifies a voluntary change charge.
     *
     * @var \Recranet\OTA\Type\VoluntaryChangesType $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @var \Recranet\OTA\Type\VoluntaryChangesType $voluntaryRefunds
     */
    private $voluntaryRefunds = null;

    /**
     * Gets as voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @return \Recranet\OTA\Type\VoluntaryChangesType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @param \Recranet\OTA\Type\VoluntaryChangesType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(?\Recranet\OTA\Type\VoluntaryChangesType $voluntaryChanges = null)
    {
        $this->voluntaryChanges = $voluntaryChanges;
        return $this;
    }

    /**
     * Gets as voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @return \Recranet\OTA\Type\VoluntaryChangesType
     */
    public function getVoluntaryRefunds()
    {
        return $this->voluntaryRefunds;
    }

    /**
     * Sets a new voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @param \Recranet\OTA\Type\VoluntaryChangesType $voluntaryRefunds
     * @return self
     */
    public function setVoluntaryRefunds(?\Recranet\OTA\Type\VoluntaryChangesType $voluntaryRefunds = null)
    {
        $this->voluntaryRefunds = $voluntaryRefunds;
        return $this;
    }
}

