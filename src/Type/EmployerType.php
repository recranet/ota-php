<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * The name of a company affiliated with the employer.
     *
     * @var \Recranet\OTA\Type\CompanyNameType[] $relatedEmployer
     */
    private $relatedEmployer = [
        
    ];

    /**
     * Information about the employee.
     *
     * @var \Recranet\OTA\Type\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = [
        
    ];

    /**
     * Accounting code(s) assigned to travel for employer.
     *
     * @var \Recranet\OTA\Type\FreeTextType[] $internalRefNmbr
     */
    private $internalRefNmbr = [
        
    ];

    /**
     * Information on the organization responsible for arranging travel for the employer.
     *
     * @var \Recranet\OTA\Type\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * Employer's loyalty program information.
     *
     * @var \Recranet\OTA\Type\LoyaltyProgramType[] $loyaltyProgram
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
     * @return \Recranet\OTA\Type\CompanyNameType
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
     * @param \Recranet\OTA\Type\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\Type\CompanyNameType $companyName = null)
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
     * @param \Recranet\OTA\Type\CompanyNameType $relatedEmployer
     */
    public function addToRelatedEmployer(\Recranet\OTA\Type\CompanyNameType $relatedEmployer)
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
     * @return \Recranet\OTA\Type\CompanyNameType[]
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
     * @param \Recranet\OTA\Type\CompanyNameType[] $relatedEmployer
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
     * @param \Recranet\OTA\Type\EmployeeInfoType $employeeInfo
     */
    public function addToEmployeeInfo(\Recranet\OTA\Type\EmployeeInfoType $employeeInfo)
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
     * @return \Recranet\OTA\Type\EmployeeInfoType[]
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
     * @param \Recranet\OTA\Type\EmployeeInfoType[] $employeeInfo
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
     * @param \Recranet\OTA\Type\FreeTextType $internalRefNmbr
     */
    public function addToInternalRefNmbr(\Recranet\OTA\Type\FreeTextType $internalRefNmbr)
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
     * @return \Recranet\OTA\Type\FreeTextType[]
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
     * @param \Recranet\OTA\Type\FreeTextType[] $internalRefNmbr
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
     * @param \Recranet\OTA\Type\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Recranet\OTA\Type\TravelArrangerType $travelArranger)
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
     * @return \Recranet\OTA\Type\TravelArrangerType[]
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
     * @param \Recranet\OTA\Type\TravelArrangerType[] $travelArranger
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
     * @param \Recranet\OTA\Type\LoyaltyProgramType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Recranet\OTA\Type\LoyaltyProgramType $loyaltyProgram)
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
     * @return \Recranet\OTA\Type\LoyaltyProgramType[]
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
     * @param \Recranet\OTA\Type\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram = null)
    {
        $this->loyaltyProgram = $loyaltyProgram;
        return $this;
    }
}

