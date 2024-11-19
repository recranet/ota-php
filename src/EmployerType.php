<?php

namespace Recranet\OTA;

/**
 * Class representing EmployerType
 *
 * Company or organization that employs the customer.
 * XSD Type: EmployerType
 */
class EmployerType
{
    /**
     * When true, indicates a default value should be used.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * Indicates main office, field office, or division of the organization.
     *
     * @var string $officeType
     */
    private $officeType = null;

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
     * The name of the company.
     *
     * @var \Recranet\OTA\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * The name of a company affiliated with the employer.
     *
     * @var \Recranet\OTA\CompanyNameType[] $relatedEmployer
     */
    private $relatedEmployer = [
        
    ];

    /**
     * Information about the employee.
     *
     * @var \Recranet\OTA\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = [
        
    ];

    /**
     * Accounting code(s) assigned to travel for employer.
     *
     * @var \Recranet\OTA\FreeTextType[] $internalRefNmbr
     */
    private $internalRefNmbr = [
        
    ];

    /**
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @var \Recranet\OTA\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * Employer's loyalty program information.
     *
     * @var \Recranet\OTA\LoyaltyProgramType[] $loyaltyProgram
     */
    private $loyaltyProgram = [
        
    ];

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

    /**
     * Gets as officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @return string
     */
    public function getOfficeType()
    {
        return $this->officeType;
    }

    /**
     * Sets a new officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @param string $officeType
     * @return self
     */
    public function setOfficeType($officeType)
    {
        $this->officeType = $officeType;
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
     * Gets as companyName
     *
     * The name of the company.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The name of the company.
     *
     * @param \Recranet\OTA\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\CompanyNameType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Adds as relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNameType $relatedEmployer
     */
    public function addToRelatedEmployer(\Recranet\OTA\CompanyNameType $relatedEmployer)
    {
        $this->relatedEmployer[] = $relatedEmployer;
        return $this;
    }

    /**
     * isset relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedEmployer($index)
    {
        return isset($this->relatedEmployer[$index]);
    }

    /**
     * unset relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedEmployer($index)
    {
        unset($this->relatedEmployer[$index]);
    }

    /**
     * Gets as relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @return \Recranet\OTA\CompanyNameType[]
     */
    public function getRelatedEmployer()
    {
        return $this->relatedEmployer;
    }

    /**
     * Sets a new relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param \Recranet\OTA\CompanyNameType[] $relatedEmployer
     * @return self
     */
    public function setRelatedEmployer(array $relatedEmployer = null)
    {
        $this->relatedEmployer = $relatedEmployer;
        return $this;
    }

    /**
     * Adds as employeeInfo
     *
     * Information about the employee.
     *
     * @return self
     * @param \Recranet\OTA\EmployeeInfoType $employeeInfo
     */
    public function addToEmployeeInfo(\Recranet\OTA\EmployeeInfoType $employeeInfo)
    {
        $this->employeeInfo[] = $employeeInfo;
        return $this;
    }

    /**
     * isset employeeInfo
     *
     * Information about the employee.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmployeeInfo($index)
    {
        return isset($this->employeeInfo[$index]);
    }

    /**
     * unset employeeInfo
     *
     * Information about the employee.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmployeeInfo($index)
    {
        unset($this->employeeInfo[$index]);
    }

    /**
     * Gets as employeeInfo
     *
     * Information about the employee.
     *
     * @return \Recranet\OTA\EmployeeInfoType[]
     */
    public function getEmployeeInfo()
    {
        return $this->employeeInfo;
    }

    /**
     * Sets a new employeeInfo
     *
     * Information about the employee.
     *
     * @param \Recranet\OTA\EmployeeInfoType[] $employeeInfo
     * @return self
     */
    public function setEmployeeInfo(array $employeeInfo = null)
    {
        $this->employeeInfo = $employeeInfo;
        return $this;
    }

    /**
     * Adds as internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @return self
     * @param \Recranet\OTA\FreeTextType $internalRefNmbr
     */
    public function addToInternalRefNmbr(\Recranet\OTA\FreeTextType $internalRefNmbr)
    {
        $this->internalRefNmbr[] = $internalRefNmbr;
        return $this;
    }

    /**
     * isset internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternalRefNmbr($index)
    {
        return isset($this->internalRefNmbr[$index]);
    }

    /**
     * unset internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternalRefNmbr($index)
    {
        unset($this->internalRefNmbr[$index]);
    }

    /**
     * Gets as internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @return \Recranet\OTA\FreeTextType[]
     */
    public function getInternalRefNmbr()
    {
        return $this->internalRefNmbr;
    }

    /**
     * Sets a new internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param \Recranet\OTA\FreeTextType[] $internalRefNmbr
     * @return self
     */
    public function setInternalRefNmbr(array $internalRefNmbr = null)
    {
        $this->internalRefNmbr = $internalRefNmbr;
        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @return self
     * @param \Recranet\OTA\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Recranet\OTA\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;
        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @return \Recranet\OTA\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @param \Recranet\OTA\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger = null)
    {
        $this->travelArranger = $travelArranger;
        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @return self
     * @param \Recranet\OTA\LoyaltyProgramType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Recranet\OTA\LoyaltyProgramType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;
        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @return \Recranet\OTA\LoyaltyProgramType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param \Recranet\OTA\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram = null)
    {
        $this->loyaltyProgram = $loyaltyProgram;
        return $this;
    }
}

