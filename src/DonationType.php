<?php

namespace Recranet\OTA;

/**
 * Class representing DonationType
 *
 * Provides information about donations made during a booking.
 * XSD Type: DonationType
 */
class DonationType
{
    /**
     * The localized error response language.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * The ID of the GDS (global distribution service) providing the donation.
     *
     * @var string $gDSID
     */
    private $gDSID = null;

    /**
     * If true, the donor wants a donation receipt.
     *
     * @var bool $askForReceiptInd
     */
    private $askForReceiptInd = null;

    /**
     * The 2 character ISO3166 country code of the donor.
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * The origin state of the donor.
     *
     * @var string $stateCode
     */
    private $stateCode = null;

    /**
     * The identifying fields for the front office for a Massive Good donation: Product Name, Product version, Office ID and Corporate ID.
     *
     * @var \Recranet\OTA\DonationType\FrontOfficeInfoAType $frontOfficeInfo
     */
    private $frontOfficeInfo = null;

    /**
     * Donation credit card information.
     *
     * @var \Recranet\OTA\DonationType\CreditCardInfoAType $creditCardInfo
     */
    private $creditCardInfo = null;

    /**
     * Donor information, including Email Address, First Name, Last Name, Street Address, City and Zip Code.
     *
     * @var \Recranet\OTA\DonationType\DonorInfoAType $donorInfo
     */
    private $donorInfo = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as language
     *
     * The localized error response language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The localized error response language.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as gDSID
     *
     * The ID of the GDS (global distribution service) providing the donation.
     *
     * @return string
     */
    public function getGDSID()
    {
        return $this->gDSID;
    }

    /**
     * Sets a new gDSID
     *
     * The ID of the GDS (global distribution service) providing the donation.
     *
     * @param string $gDSID
     * @return self
     */
    public function setGDSID($gDSID)
    {
        $this->gDSID = $gDSID;
        return $this;
    }

    /**
     * Gets as askForReceiptInd
     *
     * If true, the donor wants a donation receipt.
     *
     * @return bool
     */
    public function getAskForReceiptInd()
    {
        return $this->askForReceiptInd;
    }

    /**
     * Sets a new askForReceiptInd
     *
     * If true, the donor wants a donation receipt.
     *
     * @param bool $askForReceiptInd
     * @return self
     */
    public function setAskForReceiptInd($askForReceiptInd)
    {
        $this->askForReceiptInd = $askForReceiptInd;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The 2 character ISO3166 country code of the donor.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The 2 character ISO3166 country code of the donor.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as stateCode
     *
     * The origin state of the donor.
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * The origin state of the donor.
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * Gets as frontOfficeInfo
     *
     * The identifying fields for the front office for a Massive Good donation: Product Name, Product version, Office ID and Corporate ID.
     *
     * @return \Recranet\OTA\DonationType\FrontOfficeInfoAType
     */
    public function getFrontOfficeInfo()
    {
        return $this->frontOfficeInfo;
    }

    /**
     * Sets a new frontOfficeInfo
     *
     * The identifying fields for the front office for a Massive Good donation: Product Name, Product version, Office ID and Corporate ID.
     *
     * @param \Recranet\OTA\DonationType\FrontOfficeInfoAType $frontOfficeInfo
     * @return self
     */
    public function setFrontOfficeInfo(?\Recranet\OTA\DonationType\FrontOfficeInfoAType $frontOfficeInfo = null)
    {
        $this->frontOfficeInfo = $frontOfficeInfo;
        return $this;
    }

    /**
     * Gets as creditCardInfo
     *
     * Donation credit card information.
     *
     * @return \Recranet\OTA\DonationType\CreditCardInfoAType
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * Sets a new creditCardInfo
     *
     * Donation credit card information.
     *
     * @param \Recranet\OTA\DonationType\CreditCardInfoAType $creditCardInfo
     * @return self
     */
    public function setCreditCardInfo(\Recranet\OTA\DonationType\CreditCardInfoAType $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;
        return $this;
    }

    /**
     * Gets as donorInfo
     *
     * Donor information, including Email Address, First Name, Last Name, Street Address, City and Zip Code.
     *
     * @return \Recranet\OTA\DonationType\DonorInfoAType
     */
    public function getDonorInfo()
    {
        return $this->donorInfo;
    }

    /**
     * Sets a new donorInfo
     *
     * Donor information, including Email Address, First Name, Last Name, Street Address, City and Zip Code.
     *
     * @param \Recranet\OTA\DonationType\DonorInfoAType $donorInfo
     * @return self
     */
    public function setDonorInfo(?\Recranet\OTA\DonationType\DonorInfoAType $donorInfo = null)
    {
        $this->donorInfo = $donorInfo;
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

