<?php

namespace Recranet\OTA\Type\VehicleSegmentAdditionalInfoType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType
{
    /**
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @var \Recranet\OTA\Type\MonetaryRuleType[] $paymentRule
     */
    private $paymentRule = [
        
    ];

    /**
     * Adds as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @return self
     * @param \Recranet\OTA\Type\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRule(\Recranet\OTA\Type\MonetaryRuleType $paymentRule)
    {
        $this->paymentRule[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRule($index)
    {
        return isset($this->paymentRule[$index]);
    }

    /**
     * unset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRule($index)
    {
        unset($this->paymentRule[$index]);
    }

    /**
     * Gets as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @return \Recranet\OTA\Type\MonetaryRuleType[]
     */
    public function getPaymentRule()
    {
        return $this->paymentRule;
    }

    /**
     * Sets a new paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param \Recranet\OTA\Type\MonetaryRuleType[] $paymentRule
     * @return self
     */
    public function setPaymentRule(array $paymentRule)
    {
        $this->paymentRule = $paymentRule;
        return $this;
    }
}

