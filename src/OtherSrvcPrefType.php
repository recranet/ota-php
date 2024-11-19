<?php

namespace Recranet\OTA;

/**
 * Class representing OtherSrvcPrefType
 *
 * Identifies other service preferences.
 * XSD Type: OtherSrvcPrefType
 */
class OtherSrvcPrefType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @var string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * The name identfiying the service.
     *
     * @var string $otherSrvcName
     */
    private $otherSrvcName = null;

    /**
     * Enables a preference to be indicated for a vendor.
     *
     * @var \Recranet\OTA\CompanyNamePrefType[] $vendorPref
     */
    private $vendorPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a loyalty program.
     *
     * @var \Recranet\OTA\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a form of payment.
     *
     * @var \Recranet\OTA\PaymentFormPrefType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a special request.
     *
     * @var \Recranet\OTA\SpecRequestPrefType[] $specRequestPref
     */
    private $specRequestPref = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }

    /**
     * Gets as otherSrvcName
     *
     * The name identfiying the service.
     *
     * @return string
     */
    public function getOtherSrvcName()
    {
        return $this->otherSrvcName;
    }

    /**
     * Sets a new otherSrvcName
     *
     * The name identfiying the service.
     *
     * @param string $otherSrvcName
     * @return self
     */
    public function setOtherSrvcName($otherSrvcName)
    {
        $this->otherSrvcName = $otherSrvcName;
        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNamePrefType $vendorPref
     */
    public function addToVendorPref(\Recranet\OTA\CompanyNamePrefType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;
        return $this;
    }

    /**
     * isset vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @return \Recranet\OTA\CompanyNamePrefType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param \Recranet\OTA\CompanyNamePrefType[] $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref = null)
    {
        $this->vendorPref = $vendorPref;
        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @return self
     * @param \Recranet\OTA\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Recranet\OTA\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;
        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @return \Recranet\OTA\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param \Recranet\OTA\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref = null)
    {
        $this->loyaltyPref = $loyaltyPref;
        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @return self
     * @param \Recranet\OTA\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Recranet\OTA\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;
        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @return \Recranet\OTA\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param \Recranet\OTA\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref = null)
    {
        $this->paymentFormPref = $paymentFormPref;
        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @return self
     * @param \Recranet\OTA\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Recranet\OTA\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;
        return $this;
    }

    /**
     * isset specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @return \Recranet\OTA\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param \Recranet\OTA\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref = null)
    {
        $this->specRequestPref = $specRequestPref;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

