<?php

namespace Recranet\OTA\Type\RateRulesType;

use Recranet\OTA\Type\PaymentRulesType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType extends PaymentRulesType
{
    /**
     * A collection of acceptable methods of payment.
     *
     * @var \Recranet\OTA\Type\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[] $acceptablePayments
     */
    private $acceptablePayments = [
        
    ];

    /**
     * Adds as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType $acceptablePayments
     */
    public function addToAcceptablePayments(\Recranet\OTA\Type\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType $acceptablePayments)
    {
        $this->acceptablePayments[] = $acceptablePayments;
        return $this;
    }

    /**
     * isset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePayments($index)
    {
        return isset($this->acceptablePayments[$index]);
    }

    /**
     * unset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePayments($index)
    {
        unset($this->acceptablePayments[$index]);
    }

    /**
     * Gets as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return \Recranet\OTA\Type\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[]
     */
    public function getAcceptablePayments()
    {
        return $this->acceptablePayments;
    }

    /**
     * Sets a new acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param \Recranet\OTA\Type\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[] $acceptablePayments
     * @return self
     */
    public function setAcceptablePayments(array $acceptablePayments = null)
    {
        $this->acceptablePayments = $acceptablePayments;
        return $this;
    }
}

