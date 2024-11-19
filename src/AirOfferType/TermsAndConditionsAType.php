<?php

namespace Recranet\OTA\AirOfferType;

/**
 * Class representing TermsAndConditionsAType
 */
class TermsAndConditionsAType
{
    /**
     * If true, the item(s) associated with the offer are refundable.
     *
     * @var bool $refundableInd
     */
    private $refundableInd = null;

    /**
     * If true, the funds are reusable.
     *
     * @var bool $reusableFundsInd
     */
    private $reusableFundsInd = null;

    /**
     * Specifies a voluntary change charge.
     *
     * @var \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @var \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType $voluntaryRefunds
     */
    private $voluntaryRefunds = null;

    /**
     * Other terms and conditions that apply to offer.
     *
     * @var string $other
     */
    private $other = null;

    /**
     * Gets as refundableInd
     *
     * If true, the item(s) associated with the offer are refundable.
     *
     * @return bool
     */
    public function getRefundableInd()
    {
        return $this->refundableInd;
    }

    /**
     * Sets a new refundableInd
     *
     * If true, the item(s) associated with the offer are refundable.
     *
     * @param bool $refundableInd
     * @return self
     */
    public function setRefundableInd($refundableInd)
    {
        $this->refundableInd = $refundableInd;
        return $this;
    }

    /**
     * Gets as reusableFundsInd
     *
     * If true, the funds are reusable.
     *
     * @return bool
     */
    public function getReusableFundsInd()
    {
        return $this->reusableFundsInd;
    }

    /**
     * Sets a new reusableFundsInd
     *
     * If true, the funds are reusable.
     *
     * @param bool $reusableFundsInd
     * @return self
     */
    public function setReusableFundsInd($reusableFundsInd)
    {
        $this->reusableFundsInd = $reusableFundsInd;
        return $this;
    }

    /**
     * Gets as voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @return \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @param \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(?\Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType $voluntaryChanges = null)
    {
        $this->voluntaryChanges = $voluntaryChanges;
        return $this;
    }

    /**
     * Gets as voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @return \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType
     */
    public function getVoluntaryRefunds()
    {
        return $this->voluntaryRefunds;
    }

    /**
     * Sets a new voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @param \Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType $voluntaryRefunds
     * @return self
     */
    public function setVoluntaryRefunds(?\Recranet\OTA\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType $voluntaryRefunds = null)
    {
        $this->voluntaryRefunds = $voluntaryRefunds;
        return $this;
    }

    /**
     * Gets as other
     *
     * Other terms and conditions that apply to offer.
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Other terms and conditions that apply to offer.
     *
     * @param string $other
     * @return self
     */
    public function setOther($other)
    {
        $this->other = $other;
        return $this;
    }
}

