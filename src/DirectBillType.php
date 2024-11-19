<?php

namespace Recranet\OTA;

/**
 * Class representing DirectBillType
 *
 * Company name and location for sending invoice for remittances for travel services.
 * XSD Type: DirectBillType
 */
class DirectBillType
{
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
     * Identifier for the organization to be billed directly for travel services.
     *
     * @var string $directBillID
     */
    private $directBillID = null;

    /**
     * The number assigned by the subscriber for billing reconciliation of a corporate account.
     *
     * @var string $billingNumber
     */
    private $billingNumber = null;

    /**
     * Company name to whom remittance should be directed.
     *
     * @var \Recranet\OTA\DirectBillType\CompanyNameAType $companyName
     */
    private $companyName = null;

    /**
     * Address where remittance should be directed.
     *
     * @var \Recranet\OTA\AddressInfoType $address
     */
    private $address = null;

    /**
     * Email address to which remittance should be directed.
     *
     * @var \Recranet\OTA\EmailType $email
     */
    private $email = null;

    /**
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @var \Recranet\OTA\DirectBillType\TelephoneAType $telephone
     */
    private $telephone = null;

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
     * Gets as directBillID
     *
     * Identifier for the organization to be billed directly for travel services.
     *
     * @return string
     */
    public function getDirectBillID()
    {
        return $this->directBillID;
    }

    /**
     * Sets a new directBillID
     *
     * Identifier for the organization to be billed directly for travel services.
     *
     * @param string $directBillID
     * @return self
     */
    public function setDirectBillID($directBillID)
    {
        $this->directBillID = $directBillID;
        return $this;
    }

    /**
     * Gets as billingNumber
     *
     * The number assigned by the subscriber for billing reconciliation of a corporate account.
     *
     * @return string
     */
    public function getBillingNumber()
    {
        return $this->billingNumber;
    }

    /**
     * Sets a new billingNumber
     *
     * The number assigned by the subscriber for billing reconciliation of a corporate account.
     *
     * @param string $billingNumber
     * @return self
     */
    public function setBillingNumber($billingNumber)
    {
        $this->billingNumber = $billingNumber;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Company name to whom remittance should be directed.
     *
     * @return \Recranet\OTA\DirectBillType\CompanyNameAType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Company name to whom remittance should be directed.
     *
     * @param \Recranet\OTA\DirectBillType\CompanyNameAType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\DirectBillType\CompanyNameAType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as address
     *
     * Address where remittance should be directed.
     *
     * @return \Recranet\OTA\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address where remittance should be directed.
     *
     * @param \Recranet\OTA\AddressInfoType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\AddressInfoType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as email
     *
     * Email address to which remittance should be directed.
     *
     * @return \Recranet\OTA\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address to which remittance should be directed.
     *
     * @param \Recranet\OTA\EmailType $email
     * @return self
     */
    public function setEmail(?\Recranet\OTA\EmailType $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @return \Recranet\OTA\DirectBillType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @param \Recranet\OTA\DirectBillType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(?\Recranet\OTA\DirectBillType\TelephoneAType $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }
}

