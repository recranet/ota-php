<?php

namespace Recranet\OTA\IndCoverageReqsType;

/**
 * Class representing PreexistingConditionsAType
 */
class PreexistingConditionsAType
{
    /**
     * Contains information on a single pre-existing condition.
     *
     * @var \Recranet\OTA\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[] $preexistingCondition
     */
    private $preexistingCondition = [
        
    ];

    /**
     * Adds as preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @return self
     * @param \Recranet\OTA\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType $preexistingCondition
     */
    public function addToPreexistingCondition(\Recranet\OTA\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType $preexistingCondition)
    {
        $this->preexistingCondition[] = $preexistingCondition;
        return $this;
    }

    /**
     * isset preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreexistingCondition($index)
    {
        return isset($this->preexistingCondition[$index]);
    }

    /**
     * unset preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreexistingCondition($index)
    {
        unset($this->preexistingCondition[$index]);
    }

    /**
     * Gets as preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @return \Recranet\OTA\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     */
    public function getPreexistingCondition()
    {
        return $this->preexistingCondition;
    }

    /**
     * Sets a new preexistingCondition
     *
     * Contains information on a single pre-existing condition.
     *
     * @param \Recranet\OTA\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[] $preexistingCondition
     * @return self
     */
    public function setPreexistingCondition(array $preexistingCondition)
    {
        $this->preexistingCondition = $preexistingCondition;
        return $this;
    }
}

