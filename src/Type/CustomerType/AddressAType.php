<?php

namespace Recranet\OTA\Type\CustomerType;

use Recranet\OTA\Type\AddressInfoType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressInfoType
{
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
     * Indicates if the address has been validated or not and if it has been successful or not.
     *
     * @var string $validationStatus
     */
    private $validationStatus = null;

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @var string $transferAction
     */
    private $transferAction = null;

    /**
     * A reference to the company from which this element has been inherited.
     *
     * @var string $parentCompanyRef
     */
    private $parentCompanyRef = null;

    /**
     * Identifies a company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * Name of the person to whom this address relates.
     *
     * @var \Recranet\OTA\Type\PersonNameType $addresseeName
     */
    private $addresseeName = null;

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
     * Gets as validationStatus
     *
     * Indicates if the address has been validated or not and if it has been successful or not.
     *
     * @return string
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }

    /**
     * Sets a new validationStatus
     *
     * Indicates if the address has been validated or not and if it has been successful or not.
     *
     * @param string $validationStatus
     * @return self
     */
    public function setValidationStatus($validationStatus)
    {
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;
        return $this;
    }

    /**
     * Gets as parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @return string
     */
    public function getParentCompanyRef()
    {
        return $this->parentCompanyRef;
    }

    /**
     * Sets a new parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @param string $parentCompanyRef
     * @return self
     */
    public function setParentCompanyRef($parentCompanyRef)
    {
        $this->parentCompanyRef = $parentCompanyRef;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Identifies a company.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies a company.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\Type\CompanyNameType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as addresseeName
     *
     * Name of the person to whom this address relates.
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getAddresseeName()
    {
        return $this->addresseeName;
    }

    /**
     * Sets a new addresseeName
     *
     * Name of the person to whom this address relates.
     *
     * @param \Recranet\OTA\Type\PersonNameType $addresseeName
     * @return self
     */
    public function setAddresseeName(?\Recranet\OTA\Type\PersonNameType $addresseeName = null)
    {
        $this->addresseeName = $addresseeName;
        return $this;
    }
}

