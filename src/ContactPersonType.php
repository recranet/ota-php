<?php

namespace Recranet\OTA;

/**
 * Class representing ContactPersonType
 *
 * Name of an individual and appropriate contact information. May be contact information for the customer or someone affiliated with the customer.
 * XSD Type: ContactPersonType
 */
class ContactPersonType
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
     * When true, indicates a default value should be used.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * Type of contact in the context of use for the travel experience; such as permanent, temporary, affiliation, travel arranger, etc.
     *
     * @var string $contactType
     */
    private $contactType = null;

    /**
     * Indicates the type of relationship with the person or company in the profile, such as Spouse, Child, Family, Business Associate, Interest Group, Medical, Security,Other, etc.
     *
     * @var string $relation
     */
    private $relation = null;

    /**
     * Indicates if this contact should be used in the case of an emergency.
     *
     *  false
     *
     * @var bool $emergencyFlag
     */
    private $emergencyFlag = null;

    /**
     * Provides a unique reference to this contact person.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Provides the preferred method of communication. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @var string $communicationMethodCode
     */
    private $communicationMethodCode = null;

    /**
     * Indicates the method of distribution for the booking documentation. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @var string $documentDistribMethodCode
     */
    private $documentDistribMethodCode = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * This provides name information for a person.
     *
     * @var \Recranet\OTA\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Information about a telephone number, including the actual number and its usage.
     *
     * @var \Recranet\OTA\ContactPersonType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Information about an address that identifies a location for a specific purposes.
     *
     * @var \Recranet\OTA\AddressInfoType[] $address
     */
    private $address = [
        
    ];

    /**
     * Electronic email addresses, in IETF specified format.
     *
     * @var \Recranet\OTA\EmailType[] $email
     */
    private $email = [
        
    ];

    /**
     * Web site address, in IETF specified format.
     *
     * @var \Recranet\OTA\URLType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * Identifies a company by name.
     *
     * @var \Recranet\OTA\CompanyNameType[] $companyName
     */
    private $companyName = [
        
    ];

    /**
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
     *
     * @var \Recranet\OTA\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = [
        
    ];

    /**
     * Specifies social media information used for communication with the traveler.
     *
     * @var \Recranet\OTA\SocialMediaType[] $socialMediaInfo
     */
    private $socialMediaInfo = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as contactType
     *
     * Type of contact in the context of use for the travel experience; such as permanent, temporary, affiliation, travel arranger, etc.
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets a new contactType
     *
     * Type of contact in the context of use for the travel experience; such as permanent, temporary, affiliation, travel arranger, etc.
     *
     * @param string $contactType
     * @return self
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    /**
     * Gets as relation
     *
     * Indicates the type of relationship with the person or company in the profile, such as Spouse, Child, Family, Business Associate, Interest Group, Medical, Security,Other, etc.
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * Indicates the type of relationship with the person or company in the profile, such as Spouse, Child, Family, Business Associate, Interest Group, Medical, Security,Other, etc.
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as emergencyFlag
     *
     * Indicates if this contact should be used in the case of an emergency.
     *
     *  false
     *
     * @return bool
     */
    public function getEmergencyFlag()
    {
        return $this->emergencyFlag;
    }

    /**
     * Sets a new emergencyFlag
     *
     * Indicates if this contact should be used in the case of an emergency.
     *
     *  false
     *
     * @param bool $emergencyFlag
     * @return self
     */
    public function setEmergencyFlag($emergencyFlag)
    {
        $this->emergencyFlag = $emergencyFlag;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a unique reference to this contact person.
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
     * Provides a unique reference to this contact person.
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
     * Gets as communicationMethodCode
     *
     * Provides the preferred method of communication. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @return string
     */
    public function getCommunicationMethodCode()
    {
        return $this->communicationMethodCode;
    }

    /**
     * Sets a new communicationMethodCode
     *
     * Provides the preferred method of communication. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @param string $communicationMethodCode
     * @return self
     */
    public function setCommunicationMethodCode($communicationMethodCode)
    {
        $this->communicationMethodCode = $communicationMethodCode;
        return $this;
    }

    /**
     * Gets as documentDistribMethodCode
     *
     * Indicates the method of distribution for the booking documentation. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @return string
     */
    public function getDocumentDistribMethodCode()
    {
        return $this->documentDistribMethodCode;
    }

    /**
     * Sets a new documentDistribMethodCode
     *
     * Indicates the method of distribution for the booking documentation. Refer to OpenTravel Code list Distribution Type (DTB).
     *
     * @param string $documentDistribMethodCode
     * @return self
     */
    public function setDocumentDistribMethodCode($documentDistribMethodCode)
    {
        $this->documentDistribMethodCode = $documentDistribMethodCode;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as personName
     *
     * This provides name information for a person.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * This provides name information for a person.
     *
     * @param \Recranet\OTA\PersonNameType $personName
     * @return self
     */
    public function setPersonName(?\Recranet\OTA\PersonNameType $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @return self
     * @param \Recranet\OTA\ContactPersonType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\ContactPersonType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @return \Recranet\OTA\ContactPersonType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @param \Recranet\OTA\ContactPersonType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Adds as address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @return self
     * @param \Recranet\OTA\AddressInfoType $address
     */
    public function addToAddress(\Recranet\OTA\AddressInfoType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @return \Recranet\OTA\AddressInfoType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @param \Recranet\OTA\AddressInfoType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as email
     *
     * Electronic email addresses, in IETF specified format.
     *
     * @return self
     * @param \Recranet\OTA\EmailType $email
     */
    public function addToEmail(\Recranet\OTA\EmailType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Electronic email addresses, in IETF specified format.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Electronic email addresses, in IETF specified format.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Electronic email addresses, in IETF specified format.
     *
     * @return \Recranet\OTA\EmailType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Electronic email addresses, in IETF specified format.
     *
     * @param \Recranet\OTA\EmailType[] $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * Web site address, in IETF specified format.
     *
     * @return self
     * @param \Recranet\OTA\URLType $uRL
     */
    public function addToURL(\Recranet\OTA\URLType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * Web site address, in IETF specified format.
     *
     * @return \Recranet\OTA\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param \Recranet\OTA\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Adds as companyName
     *
     * Identifies a company by name.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNameType $companyName
     */
    public function addToCompanyName(\Recranet\OTA\CompanyNameType $companyName)
    {
        $this->companyName[] = $companyName;
        return $this;
    }

    /**
     * isset companyName
     *
     * Identifies a company by name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompanyName($index)
    {
        return isset($this->companyName[$index]);
    }

    /**
     * unset companyName
     *
     * Identifies a company by name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompanyName($index)
    {
        unset($this->companyName[$index]);
    }

    /**
     * Gets as companyName
     *
     * Identifies a company by name.
     *
     * @return \Recranet\OTA\CompanyNameType[]
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies a company by name.
     *
     * @param \Recranet\OTA\CompanyNameType[] $companyName
     * @return self
     */
    public function setCompanyName(array $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Adds as employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
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
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
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
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
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
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
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
     * Employment identification; using an employee ID number, title, level within the company, and an indication of their status, i.e.: active, retired, on leave, or terminated from employment. Additional information about an employee can be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact.
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
     * Adds as socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @return self
     * @param \Recranet\OTA\SocialMediaType $socialMediaInfo
     */
    public function addToSocialMediaInfo(\Recranet\OTA\SocialMediaType $socialMediaInfo)
    {
        $this->socialMediaInfo[] = $socialMediaInfo;
        return $this;
    }

    /**
     * isset socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocialMediaInfo($index)
    {
        return isset($this->socialMediaInfo[$index]);
    }

    /**
     * unset socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocialMediaInfo($index)
    {
        unset($this->socialMediaInfo[$index]);
    }

    /**
     * Gets as socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @return \Recranet\OTA\SocialMediaType[]
     */
    public function getSocialMediaInfo()
    {
        return $this->socialMediaInfo;
    }

    /**
     * Sets a new socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param \Recranet\OTA\SocialMediaType[] $socialMediaInfo
     * @return self
     */
    public function setSocialMediaInfo(array $socialMediaInfo = null)
    {
        $this->socialMediaInfo = $socialMediaInfo;
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

