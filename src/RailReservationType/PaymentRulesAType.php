<?php

namespace Recranet\OTA\RailReservationType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType
{
    /**
     * A specific payment rule associated with this reservation.
     *
     * @var \Recranet\OTA\MonetaryRuleType[] $paymentRule
     */
    private $paymentRule = [
        
    ];

    /**
     * Adds as paymentRule
     *
     * A specific payment rule associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRule(\Recranet\OTA\MonetaryRuleType $paymentRule)
    {
        $this->paymentRule[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRule
     *
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
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
     * A specific payment rule associated with this reservation.
     *
     * @return \Recranet\OTA\MonetaryRuleType[]
     */
    public function getPaymentRule()
    {
        return $this->paymentRule;
    }

    /**
     * Sets a new paymentRule
     *
     * A specific payment rule associated with this reservation.
     *
     * @param \Recranet\OTA\MonetaryRuleType[] $paymentRule
     * @return self
     */
    public function setPaymentRule(array $paymentRule)
    {
        $this->paymentRule = $paymentRule;
        return $this;
    }
}

