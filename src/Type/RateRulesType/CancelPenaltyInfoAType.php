<?php

namespace Recranet\OTA\Type\RateRulesType;

/**
 * Class representing CancelPenaltyInfoAType
 */
class CancelPenaltyInfoAType
{
    /**
     * When true, a guarantee is required.
     *
     * @var bool $guaranteeRequiredInd
     */
    private $guaranteeRequiredInd = null;

    /**
     * When true, this indicates the penalty information is for a modification rather than a cancellation.
     *
     * @var bool $modifyPenaltyInd
     */
    private $modifyPenaltyInd = null;

    /**
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @var \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\DeadlineAType[] $deadline
     */
    private $deadline = [
        
    ];

    /**
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @var \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\PenaltyFeeAType $penaltyFee
     */
    private $penaltyFee = null;

    /**
     * Provides additional information about the cancel penalty.
     *
     * @var \Recranet\OTA\Type\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as guaranteeRequiredInd
     *
     * When true, a guarantee is required.
     *
     * @return bool
     */
    public function getGuaranteeRequiredInd()
    {
        return $this->guaranteeRequiredInd;
    }

    /**
     * Sets a new guaranteeRequiredInd
     *
     * When true, a guarantee is required.
     *
     * @param bool $guaranteeRequiredInd
     * @return self
     */
    public function setGuaranteeRequiredInd($guaranteeRequiredInd)
    {
        $this->guaranteeRequiredInd = $guaranteeRequiredInd;
        return $this;
    }

    /**
     * Gets as modifyPenaltyInd
     *
     * When true, this indicates the penalty information is for a modification rather than a cancellation.
     *
     * @return bool
     */
    public function getModifyPenaltyInd()
    {
        return $this->modifyPenaltyInd;
    }

    /**
     * Sets a new modifyPenaltyInd
     *
     * When true, this indicates the penalty information is for a modification rather than a cancellation.
     *
     * @param bool $modifyPenaltyInd
     * @return self
     */
    public function setModifyPenaltyInd($modifyPenaltyInd)
    {
        $this->modifyPenaltyInd = $modifyPenaltyInd;
        return $this;
    }

    /**
     * Adds as deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\DeadlineAType $deadline
     */
    public function addToDeadline(\Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\DeadlineAType $deadline)
    {
        $this->deadline[] = $deadline;
        return $this;
    }

    /**
     * isset deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeadline($index)
    {
        return isset($this->deadline[$index]);
    }

    /**
     * unset deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeadline($index)
    {
        unset($this->deadline[$index]);
    }

    /**
     * Gets as deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @return \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\DeadlineAType[]
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur.
     *
     * @param \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\DeadlineAType[] $deadline
     * @return self
     */
    public function setDeadline(array $deadline = null)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Gets as penaltyFee
     *
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @return \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\PenaltyFeeAType
     */
    public function getPenaltyFee()
    {
        return $this->penaltyFee;
    }

    /**
     * Sets a new penaltyFee
     *
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @param \Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\PenaltyFeeAType $penaltyFee
     * @return self
     */
    public function setPenaltyFee(?\Recranet\OTA\Type\RateRulesType\CancelPenaltyInfoAType\PenaltyFeeAType $penaltyFee = null)
    {
        $this->penaltyFee = $penaltyFee;
        return $this;
    }

    /**
     * Gets as description
     *
     * Provides additional information about the cancel penalty.
     *
     * @return \Recranet\OTA\Type\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Provides additional information about the cancel penalty.
     *
     * @param \Recranet\OTA\Type\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\FormattedTextTextType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

