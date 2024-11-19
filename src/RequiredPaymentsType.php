<?php

namespace Recranet\OTA;

/**
 * Class representing RequiredPaymentsType
 *
 * A collection of required payments.
 * XSD Type: RequiredPaymentsType
 */
class RequiredPaymentsType
{
    /**
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @var \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $guaranteePayment
     */
    private $guaranteePayment = [
        
    ];

    /**
     * Adds as guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @return self
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToGuaranteePayment(\Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->guaranteePayment[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePayment($index)
    {
        return isset($this->guaranteePayment[$index]);
    }

    /**
     * unset guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePayment($index)
    {
        unset($this->guaranteePayment[$index]);
    }

    /**
     * Gets as guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @return \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getGuaranteePayment()
    {
        return $this->guaranteePayment;
    }

    /**
     * Sets a new guaranteePayment
     *
     * Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
     *
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $guaranteePayment
     * @return self
     */
    public function setGuaranteePayment(array $guaranteePayment)
    {
        $this->guaranteePayment = $guaranteePayment;
        return $this;
    }
}

