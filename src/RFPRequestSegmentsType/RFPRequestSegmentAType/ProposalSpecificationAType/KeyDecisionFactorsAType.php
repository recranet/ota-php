<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType;

/**
 * Class representing KeyDecisionFactorsAType
 */
class KeyDecisionFactorsAType
{
    /**
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[] $keyDecisionFactor
     */
    private $keyDecisionFactor = [
        
    ];

    /**
     * Adds as keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor
     */
    public function addToKeyDecisionFactor(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor)
    {
        $this->keyDecisionFactor[] = $keyDecisionFactor;
        return $this;
    }

    /**
     * isset keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyDecisionFactor($index)
    {
        return isset($this->keyDecisionFactor[$index]);
    }

    /**
     * unset keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyDecisionFactor($index)
    {
        unset($this->keyDecisionFactor[$index]);
    }

    /**
     * Gets as keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     */
    public function getKeyDecisionFactor()
    {
        return $this->keyDecisionFactor;
    }

    /**
     * Sets a new keyDecisionFactor
     *
     * Defines what each key decision factor is and how important it is in the proposal evaluation.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[] $keyDecisionFactor
     * @return self
     */
    public function setKeyDecisionFactor(array $keyDecisionFactor)
    {
        $this->keyDecisionFactor = $keyDecisionFactor;
        return $this;
    }
}

