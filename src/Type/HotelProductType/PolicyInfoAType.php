<?php

namespace Recranet\OTA\Type\HotelProductType;

/**
 * Class representing PolicyInfoAType
 */
class PolicyInfoAType
{
    /**
     * The cancel policy details.
     *
     * @var \Recranet\OTA\Type\CancelPenaltiesType $cancelPolicy
     */
    private $cancelPolicy = null;

    /**
     * Guarantee and payment policy details.
     *
     * @var \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $guaranteePaymentPolicy
     */
    private $guaranteePaymentPolicy = null;

    /**
     * A collection of booking rules.
     *
     * @var \Recranet\OTA\Type\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[] $bookingRules
     */
    private $bookingRules = null;

    /**
     * Gets as cancelPolicy
     *
     * The cancel policy details.
     *
     * @return \Recranet\OTA\Type\CancelPenaltiesType
     */
    public function getCancelPolicy()
    {
        return $this->cancelPolicy;
    }

    /**
     * Sets a new cancelPolicy
     *
     * The cancel policy details.
     *
     * @param \Recranet\OTA\Type\CancelPenaltiesType $cancelPolicy
     * @return self
     */
    public function setCancelPolicy(?\Recranet\OTA\Type\CancelPenaltiesType $cancelPolicy = null)
    {
        $this->cancelPolicy = $cancelPolicy;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Guarantee and payment policy details.
     *
     * @return self
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToGuaranteePaymentPolicy(\Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->guaranteePaymentPolicy[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePaymentPolicy($index)
    {
        return isset($this->guaranteePaymentPolicy[$index]);
    }

    /**
     * unset guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePaymentPolicy($index)
    {
        unset($this->guaranteePaymentPolicy[$index]);
    }

    /**
     * Gets as guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @return \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getGuaranteePaymentPolicy()
    {
        return $this->guaranteePaymentPolicy;
    }

    /**
     * Sets a new guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $guaranteePaymentPolicy
     * @return self
     */
    public function setGuaranteePaymentPolicy(array $guaranteePaymentPolicy = null)
    {
        $this->guaranteePaymentPolicy = $guaranteePaymentPolicy;
        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * A collection of booking rules.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule
     */
    public function addToBookingRules(\Recranet\OTA\Type\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;
        return $this;
    }

    /**
     * isset bookingRules
     *
     * A collection of booking rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * A collection of booking rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * A collection of booking rules.
     *
     * @return \Recranet\OTA\Type\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * A collection of booking rules.
     *
     * @param \Recranet\OTA\Type\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[] $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules = null)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }
}

