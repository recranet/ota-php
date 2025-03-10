<?php

namespace Recranet\OTA\Type;

/**
 * Class representing InsuranceType
 *
 * Travel insurance carried by the customer or company.
 * XSD Type: InsuranceType
 */
class InsuranceType
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
     * Type of insurance policy carried by the individual or company.
     *
     * @var string $insuranceType
     */
    private $insuranceType = null;

    /**
     * Identifier assigned by insurance company to the insurance policy.
     *
     * @var string $policyNumber
     */
    private $policyNumber = null;

    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * A unique reference for this insurance policy within this message.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Name of the person insured.
     *
     * @var \Recranet\OTA\Type\PersonNameType $insuredName
     */
    private $insuredName = null;

    /**
     * Name of the insurance company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $insuranceCompany
     */
    private $insuranceCompany = null;

    /**
     * Underwriting company providing coverage.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $underwriter
     */
    private $underwriter = null;

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
     * Gets as insuranceType
     *
     * Type of insurance policy carried by the individual or company.
     *
     * @return string
     */
    public function getInsuranceType()
    {
        return $this->insuranceType;
    }

    /**
     * Sets a new insuranceType
     *
     * Type of insurance policy carried by the individual or company.
     *
     * @param string $insuranceType
     * @return self
     */
    public function setInsuranceType($insuranceType)
    {
        $this->insuranceType = $insuranceType;
        return $this;
    }

    /**
     * Gets as policyNumber
     *
     * Identifier assigned by insurance company to the insurance policy.
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * Identifier assigned by insurance company to the insurance policy.
     *
     * @param string $policyNumber
     * @return self
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique reference for this insurance policy within this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for this insurance policy within this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as insuredName
     *
     * Name of the person insured.
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getInsuredName()
    {
        return $this->insuredName;
    }

    /**
     * Sets a new insuredName
     *
     * Name of the person insured.
     *
     * @param \Recranet\OTA\Type\PersonNameType $insuredName
     * @return self
     */
    public function setInsuredName(?\Recranet\OTA\Type\PersonNameType $insuredName = null)
    {
        $this->insuredName = $insuredName;
        return $this;
    }

    /**
     * Gets as insuranceCompany
     *
     * Name of the insurance company.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getInsuranceCompany()
    {
        return $this->insuranceCompany;
    }

    /**
     * Sets a new insuranceCompany
     *
     * Name of the insurance company.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $insuranceCompany
     * @return self
     */
    public function setInsuranceCompany(?\Recranet\OTA\Type\CompanyNameType $insuranceCompany = null)
    {
        $this->insuranceCompany = $insuranceCompany;
        return $this;
    }

    /**
     * Gets as underwriter
     *
     * Underwriting company providing coverage.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getUnderwriter()
    {
        return $this->underwriter;
    }

    /**
     * Sets a new underwriter
     *
     * Underwriting company providing coverage.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $underwriter
     * @return self
     */
    public function setUnderwriter(?\Recranet\OTA\Type\CompanyNameType $underwriter = null)
    {
        $this->underwriter = $underwriter;
        return $this;
    }
}

