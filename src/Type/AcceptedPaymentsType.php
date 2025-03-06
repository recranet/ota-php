<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AcceptedPaymentsType
 *
 * Used to define the types of payments accepted.
 * XSD Type: AcceptedPaymentsType
 */
class AcceptedPaymentsType
{
    /**
     * An acceptable form of payment.
     *
     * @var \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[] $acceptedPayment
     */
    private $acceptedPayment = [
        
    ];

    /**
     * Adds as acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @return self
     * @param \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
     */
    public function addToAcceptedPayment(\Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment)
    {
        $this->acceptedPayment[] = $acceptedPayment;
        return $this;
    }

    /**
     * isset acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPayment($index)
    {
        return isset($this->acceptedPayment[$index]);
    }

    /**
     * unset acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPayment($index)
    {
        unset($this->acceptedPayment[$index]);
    }

    /**
     * Gets as acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @return \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getAcceptedPayment()
    {
        return $this->acceptedPayment;
    }

    /**
     * Sets a new acceptedPayment
     *
     * An acceptable form of payment.
     *
     * @param \Recranet\OTA\Type\AcceptedPaymentsType\AcceptedPaymentAType[] $acceptedPayment
     * @return self
     */
    public function setAcceptedPayment(array $acceptedPayment)
    {
        $this->acceptedPayment = $acceptedPayment;
        return $this;
    }
}

