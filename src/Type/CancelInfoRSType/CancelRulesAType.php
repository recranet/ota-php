<?php

namespace Recranet\OTA\Type\CancelInfoRSType;

/**
 * Class representing CancelRulesAType
 */
class CancelRulesAType
{
    /**
     * Details of a cancellation rule.
     *
     * @var \Recranet\OTA\Type\CancelRuleType[] $cancelRule
     */
    private $cancelRule = [
        
    ];

    /**
     * Adds as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return self
     * @param \Recranet\OTA\Type\CancelRuleType $cancelRule
     */
    public function addToCancelRule(\Recranet\OTA\Type\CancelRuleType $cancelRule)
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
     * @return \Recranet\OTA\Type\CancelRuleType[]
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
     * @param \Recranet\OTA\Type\CancelRuleType[] $cancelRule
     * @return self
     */
    public function setCancelRule(array $cancelRule)
    {
        $this->cancelRule = $cancelRule;
        return $this;
    }
}

