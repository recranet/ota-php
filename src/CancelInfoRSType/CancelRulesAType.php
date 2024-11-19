<?php

namespace Recranet\OTA\CancelInfoRSType;

/**
 * Class representing CancelRulesAType
 */
class CancelRulesAType
{
    /**
     * Details of a cancellation rule.
     *
     * @var \Recranet\OTA\CancelRuleType[] $cancelRule
     */
    private $cancelRule = [
        
    ];

    /**
     * Adds as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return self
     * @param \Recranet\OTA\CancelRuleType $cancelRule
     */
    public function addToCancelRule(\Recranet\OTA\CancelRuleType $cancelRule)
    {
        $this->cancelRule[] = $cancelRule;
        return $this;
    }

    /**
     * isset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelRule($index)
    {
        return isset($this->cancelRule[$index]);
    }

    /**
     * unset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelRule($index)
    {
        unset($this->cancelRule[$index]);
    }

    /**
     * Gets as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return \Recranet\OTA\CancelRuleType[]
     */
    public function getCancelRule()
    {
        return $this->cancelRule;
    }

    /**
     * Sets a new cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param \Recranet\OTA\CancelRuleType[] $cancelRule
     * @return self
     */
    public function setCancelRule(array $cancelRule)
    {
        $this->cancelRule = $cancelRule;
        return $this;
    }
}

