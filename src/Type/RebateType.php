<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RebateType
 *
 * Information about a suppliers participation in a rebate program, e.g. a VAT (value added tax) program.
 * XSD Type: RebateType
 */
class RebateType
{
    /**
     * When true, the supplier is participating in a rebate program, e.g. a VAT (value added tax) program.
     *
     * @var bool $participationInd
     */
    private $participationInd = null;

    /**
     * The name of the rebate program.
     *
     * @var string $programName
     */
    private $programName = null;

    /**
     * The purpose of the trip. If the customer has a default trip purpose this should be pre-populated with that value and the @TripPurposeRequiredInd should be set to FALSE.
     *
     * @var string $tripPurpose
     */
    private $tripPurpose = null;

    /**
     * When true, the customer does not have a default trip purpose selected and they need to be prompted for the trip purpose.
     *
     * @var bool $tripPurposeRequiredInd
     */
    private $tripPurposeRequiredInd = null;

    /**
     * Information about payments eligible for a rebate program.
     *
     * @var \Recranet\OTA\Type\PaymentCardType[] $paymentInformation
     */
    private $paymentInformation = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as participationInd
     *
     * When true, the supplier is participating in a rebate program, e.g. a VAT (value added tax) program.
     *
     * @return bool
     */
    public function getParticipationInd()
    {
        return $this->participationInd;
    }

    /**
     * Sets a new participationInd
     *
     * When true, the supplier is participating in a rebate program, e.g. a VAT (value added tax) program.
     *
     * @param bool $participationInd
     * @return self
     */
    public function setParticipationInd($participationInd)
    {
        $this->participationInd = $participationInd;
        return $this;
    }

    /**
     * Gets as programName
     *
     * The name of the rebate program.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * The name of the rebate program.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * Gets as tripPurpose
     *
     * The purpose of the trip. If the customer has a default trip purpose this should be pre-populated with that value and the @TripPurposeRequiredInd should be set to FALSE.
     *
     * @return string
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * The purpose of the trip. If the customer has a default trip purpose this should be pre-populated with that value and the @TripPurposeRequiredInd should be set to FALSE.
     *
     * @param string $tripPurpose
     * @return self
     */
    public function setTripPurpose($tripPurpose)
    {
        $this->tripPurpose = $tripPurpose;
        return $this;
    }

    /**
     * Gets as tripPurposeRequiredInd
     *
     * When true, the customer does not have a default trip purpose selected and they need to be prompted for the trip purpose.
     *
     * @return bool
     */
    public function getTripPurposeRequiredInd()
    {
        return $this->tripPurposeRequiredInd;
    }

    /**
     * Sets a new tripPurposeRequiredInd
     *
     * When true, the customer does not have a default trip purpose selected and they need to be prompted for the trip purpose.
     *
     * @param bool $tripPurposeRequiredInd
     * @return self
     */
    public function setTripPurposeRequiredInd($tripPurposeRequiredInd)
    {
        $this->tripPurposeRequiredInd = $tripPurposeRequiredInd;
        return $this;
    }

    /**
     * Adds as paymentInformation
     *
     * Information about payments eligible for a rebate program.
     *
     * @return self
     * @param \Recranet\OTA\Type\PaymentCardType $paymentInformation
     */
    public function addToPaymentInformation(\Recranet\OTA\Type\PaymentCardType $paymentInformation)
    {
        $this->paymentInformation[] = $paymentInformation;
        return $this;
    }

    /**
     * isset paymentInformation
     *
     * Information about payments eligible for a rebate program.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentInformation($index)
    {
        return isset($this->paymentInformation[$index]);
    }

    /**
     * unset paymentInformation
     *
     * Information about payments eligible for a rebate program.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentInformation($index)
    {
        unset($this->paymentInformation[$index]);
    }

    /**
     * Gets as paymentInformation
     *
     * Information about payments eligible for a rebate program.
     *
     * @return \Recranet\OTA\Type\PaymentCardType[]
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * Information about payments eligible for a rebate program.
     *
     * @param \Recranet\OTA\Type\PaymentCardType[] $paymentInformation
     * @return self
     */
    public function setPaymentInformation(array $paymentInformation = null)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

