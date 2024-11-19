<?php

namespace Recranet\OTA;

/**
 * Class representing PaymentDetailType
 *
 * Details of payment.
 * XSD Type: PaymentDetailType
 */
class PaymentDetailType extends PaymentFormType
{
    /**
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * When true, indicates that more than one form of payment will be used.
     *
     * @var bool $splitPaymentInd
     */
    private $splitPaymentInd = null;

    /**
     * Number of days being charged to this payment method.
     *
     * @var int $authorizedDays
     */
    private $authorizedDays = null;

    /**
     * When true, indicates this is the primary method of payment.
     *
     * @var bool $primaryPaymentInd
     */
    private $primaryPaymentInd = null;

    /**
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @var \Recranet\OTA\PaymentDetailType\PaymentAmountAType[] $paymentAmount
     */
    private $paymentAmount = [
        
    ];

    /**
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @var \Recranet\OTA\CommissionType $commission
     */
    private $commission = null;

    /**
     * Gets as paymentType
     *
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as splitPaymentInd
     *
     * When true, indicates that more than one form of payment will be used.
     *
     * @return bool
     */
    public function getSplitPaymentInd()
    {
        return $this->splitPaymentInd;
    }

    /**
     * Sets a new splitPaymentInd
     *
     * When true, indicates that more than one form of payment will be used.
     *
     * @param bool $splitPaymentInd
     * @return self
     */
    public function setSplitPaymentInd($splitPaymentInd)
    {
        $this->splitPaymentInd = $splitPaymentInd;
        return $this;
    }

    /**
     * Gets as authorizedDays
     *
     * Number of days being charged to this payment method.
     *
     * @return int
     */
    public function getAuthorizedDays()
    {
        return $this->authorizedDays;
    }

    /**
     * Sets a new authorizedDays
     *
     * Number of days being charged to this payment method.
     *
     * @param int $authorizedDays
     * @return self
     */
    public function setAuthorizedDays($authorizedDays)
    {
        $this->authorizedDays = $authorizedDays;
        return $this;
    }

    /**
     * Gets as primaryPaymentInd
     *
     * When true, indicates this is the primary method of payment.
     *
     * @return bool
     */
    public function getPrimaryPaymentInd()
    {
        return $this->primaryPaymentInd;
    }

    /**
     * Sets a new primaryPaymentInd
     *
     * When true, indicates this is the primary method of payment.
     *
     * @param bool $primaryPaymentInd
     * @return self
     */
    public function setPrimaryPaymentInd($primaryPaymentInd)
    {
        $this->primaryPaymentInd = $primaryPaymentInd;
        return $this;
    }

    /**
     * Adds as paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @return self
     * @param \Recranet\OTA\PaymentDetailType\PaymentAmountAType $paymentAmount
     */
    public function addToPaymentAmount(\Recranet\OTA\PaymentDetailType\PaymentAmountAType $paymentAmount)
    {
        $this->paymentAmount[] = $paymentAmount;
        return $this;
    }

    /**
     * isset paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentAmount($index)
    {
        return isset($this->paymentAmount[$index]);
    }

    /**
     * unset paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentAmount($index)
    {
        unset($this->paymentAmount[$index]);
    }

    /**
     * Gets as paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @return \Recranet\OTA\PaymentDetailType\PaymentAmountAType[]
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency.
     *
     * @param \Recranet\OTA\PaymentDetailType\PaymentAmountAType[] $paymentAmount
     * @return self
     */
    public function setPaymentAmount(array $paymentAmount = null)
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Gets as commission
     *
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @return \Recranet\OTA\CommissionType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @param \Recranet\OTA\CommissionType $commission
     * @return self
     */
    public function setCommission(?\Recranet\OTA\CommissionType $commission = null)
    {
        $this->commission = $commission;
        return $this;
    }
}

