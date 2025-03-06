<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CustomerType
 *
 * Contains basic data on the customer's identity, location, relationships, finances, memberships, etc.
 * XSD Type: CustomerType
 */
class CustomerType
{
    /**
     * Identifies the gender.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * When true the customer is deceased.
     *
     * @var bool $deceased
     */
    private $deceased = null;

    /**
     * Indicates reason for locking out record, such as Emergency, Incident, etc.
     *
     * @var string $lockoutType
     */
    private $lockoutType = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * If true, indicates a very important person.
     *
     * @var bool $vIPIndicator
     */
    private $vIPIndicator = null;

    /**
     * Used to specify textual information about the customer.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Language identification.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @var string $customerValue
     */
    private $customerValue = null;

    /**
     * Marital status of the traveler.
     *
     * @var string $maritalStatus
     */
    private $maritalStatus = null;

    /**
     * When true, indicates the customer was previously married. When false, indicates the customer was not previously married.
     *
     * @var bool $previouslyMarriedIndicator
     */
    private $previouslyMarriedIndicator = null;

    /**
     * The number of children of the customer.
     *
     * @var int $childQuantity
     */
    private $childQuantity = null;

    /**
     * Detailed name information for the customer.
     *
     * @var \Recranet\OTA\Type\PersonNameType[] $personName
     */
    private $personName = [
        
    ];

    /**
     * Information on a telephone number for the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Information on an email address for the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Detailed information on an address for the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\AddressAType[] $address
     */
    private $address = [
        
    ];

    /**
     * Information on a URL for the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\URLAType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @var \Recranet\OTA\Type\CustomerType\CitizenCountryNameAType[] $citizenCountryName
     */
    private $citizenCountryName = [
        
    ];

    /**
     * Describes the customer's physical challenge.
     *
     * @var \Recranet\OTA\Type\CustomerType\PhysChallNameAType[] $physChallName
     */
    private $physChallName = [
        
    ];

    /**
     * Describes the customer's pet.
     *
     * @var string[] $petInfo
     */
    private $petInfo = [
        
    ];

    /**
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\PaymentFormAType[] $paymentForm
     */
    private $paymentForm = [
        
    ];

    /**
     * Identifies a traveler associated with the customer.
     *
     * @var \Recranet\OTA\Type\RelatedTravelerType[] $relatedTraveler
     */
    private $relatedTraveler = [
        
    ];

    /**
     * Information on a contact person for the customer.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contactPerson
     */
    private $contactPerson = [
        
    ];

    /**
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @var \Recranet\OTA\Type\DocumentType[] $document
     */
    private $document = [
        
    ];

    /**
     * Loyalty program information for the customer.
     *
     * @var \Recranet\OTA\Type\CustomerType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Employment information for the customer.
     *
     * @var \Recranet\OTA\Type\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = [
        
    ];

    /**
     * Identifies the customer's employer.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $employerInfo
     */
    private $employerInfo = null;

    /**
     * Additional languages spoken by the traveler.
     *
     * @var \Recranet\OTA\Type\CustomerType\AdditionalLanguageAType[] $additionalLanguage
     */
    private $additionalLanguage = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as deceased
     *
     * When true the customer is deceased.
     *
     * @return bool
     */
    public function getDeceased()
    {
        return $this->deceased;
    }

    /**
     * Sets a new deceased
     *
     * When true the customer is deceased.
     *
     * @param bool $deceased
     * @return self
     */
    public function setDeceased($deceased)
    {
        $this->deceased = $deceased;
        return $this;
    }

    /**
     * Gets as lockoutType
     *
     * Indicates reason for locking out record, such as Emergency, Incident, etc.
     *
     * @return string
     */
    public function getLockoutType()
    {
        return $this->lockoutType;
    }

    /**
     * Sets a new lockoutType
     *
     * Indicates reason for locking out record, such as Emergency, Incident, etc.
     *
     * @param string $lockoutType
     * @return self
     */
    public function setLockoutType($lockoutType)
    {
        $this->lockoutType = $lockoutType;
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
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as vIPIndicator
     *
     * If true, indicates a very important person.
     *
     * @return bool
     */
    public function getVIPIndicator()
    {
        return $this->vIPIndicator;
    }

    /**
     * Sets a new vIPIndicator
     *
     * If true, indicates a very important person.
     *
     * @param bool $vIPIndicator
     * @return self
     */
    public function setVIPIndicator($vIPIndicator)
    {
        $this->vIPIndicator = $vIPIndicator;
        return $this;
    }

    /**
     * Gets as text
     *
     * Used to specify textual information about the customer.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Used to specify textual information about the customer.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as language
     *
     * Language identification.
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
     * Language identification.
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
     * Gets as customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @return string
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }

    /**
     * Sets a new customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @param string $customerValue
     * @return self
     */
    public function setCustomerValue($customerValue)
    {
        $this->customerValue = $customerValue;
        return $this;
    }

    /**
     * Gets as maritalStatus
     *
     * Marital status of the traveler.
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Sets a new maritalStatus
     *
     * Marital status of the traveler.
     *
     * @param string $maritalStatus
     * @return self
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Gets as previouslyMarriedIndicator
     *
     * When true, indicates the customer was previously married. When false, indicates the customer was not previously married.
     *
     * @return bool
     */
    public function getPreviouslyMarriedIndicator()
    {
        return $this->previouslyMarriedIndicator;
    }

    /**
     * Sets a new previouslyMarriedIndicator
     *
     * When true, indicates the customer was previously married. When false, indicates the customer was not previously married.
     *
     * @param bool $previouslyMarriedIndicator
     * @return self
     */
    public function setPreviouslyMarriedIndicator($previouslyMarriedIndicator)
    {
        $this->previouslyMarriedIndicator = $previouslyMarriedIndicator;
        return $this;
    }

    /**
     * Gets as childQuantity
     *
     * The number of children of the customer.
     *
     * @return int
     */
    public function getChildQuantity()
    {
        return $this->childQuantity;
    }

    /**
     * Sets a new childQuantity
     *
     * The number of children of the customer.
     *
     * @param int $childQuantity
     * @return self
     */
    public function setChildQuantity($childQuantity)
    {
        $this->childQuantity = $childQuantity;
        return $this;
    }

    /**
     * Adds as personName
     *
     * Detailed name information for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\PersonNameType $personName
     */
    public function addToPersonName(\Recranet\OTA\Type\PersonNameType $personName)
    {
        $this->personName[] = $personName;
        return $this;
    }

    /**
     * isset personName
     *
     * Detailed name information for the customer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonName($index)
    {
        return isset($this->personName[$index]);
    }

    /**
     * unset personName
     *
     * Detailed name information for the customer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonName($index)
    {
        unset($this->personName[$index]);
    }

    /**
     * Gets as personName
     *
     * Detailed name information for the customer.
     *
     * @return \Recranet\OTA\Type\PersonNameType[]
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Detailed name information for the customer.
     *
     * @param \Recranet\OTA\Type\PersonNameType[] $personName
     * @return self
     */
    public function setPersonName(array $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Information on a telephone number for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\Type\CustomerType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Information on a telephone number for the customer.
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
     * Information on a telephone number for the customer.
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
     * Information on a telephone number for the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Information on a telephone number for the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Adds as email
     *
     * Information on an email address for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\EmailAType $email
     */
    public function addToEmail(\Recranet\OTA\Type\CustomerType\EmailAType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Information on an email address for the customer.
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
     * Information on an email address for the customer.
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
     * Information on an email address for the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address for the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\EmailAType[] $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as address
     *
     * Detailed information on an address for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\AddressAType $address
     */
    public function addToAddress(\Recranet\OTA\Type\CustomerType\AddressAType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * Detailed information on an address for the customer.
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
     * Detailed information on an address for the customer.
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
     * Detailed information on an address for the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Detailed information on an address for the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\AddressAType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * Information on a URL for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\URLAType $uRL
     */
    public function addToURL(\Recranet\OTA\Type\CustomerType\URLAType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * Information on a URL for the customer.
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
     * Information on a URL for the customer.
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
     * Information on a URL for the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\URLAType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Information on a URL for the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\URLAType[] $uRL
     * @return self
     */
    public function setURL(array $uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Adds as citizenCountryName
     *
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\CitizenCountryNameAType $citizenCountryName
     */
    public function addToCitizenCountryName(\Recranet\OTA\Type\CustomerType\CitizenCountryNameAType $citizenCountryName)
    {
        $this->citizenCountryName[] = $citizenCountryName;
        return $this;
    }

    /**
     * isset citizenCountryName
     *
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCitizenCountryName($index)
    {
        return isset($this->citizenCountryName[$index]);
    }

    /**
     * unset citizenCountryName
     *
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCitizenCountryName($index)
    {
        unset($this->citizenCountryName[$index]);
    }

    /**
     * Gets as citizenCountryName
     *
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @return \Recranet\OTA\Type\CustomerType\CitizenCountryNameAType[]
     */
    public function getCitizenCountryName()
    {
        return $this->citizenCountryName;
    }

    /**
     * Sets a new citizenCountryName
     *
     * Name of the (self-professed) country that is claimed for citizenship.
     *
     * @param \Recranet\OTA\Type\CustomerType\CitizenCountryNameAType[] $citizenCountryName
     * @return self
     */
    public function setCitizenCountryName(array $citizenCountryName = null)
    {
        $this->citizenCountryName = $citizenCountryName;
        return $this;
    }

    /**
     * Adds as physChallName
     *
     * Describes the customer's physical challenge.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\PhysChallNameAType $physChallName
     */
    public function addToPhysChallName(\Recranet\OTA\Type\CustomerType\PhysChallNameAType $physChallName)
    {
        $this->physChallName[] = $physChallName;
        return $this;
    }

    /**
     * isset physChallName
     *
     * Describes the customer's physical challenge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysChallName($index)
    {
        return isset($this->physChallName[$index]);
    }

    /**
     * unset physChallName
     *
     * Describes the customer's physical challenge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysChallName($index)
    {
        unset($this->physChallName[$index]);
    }

    /**
     * Gets as physChallName
     *
     * Describes the customer's physical challenge.
     *
     * @return \Recranet\OTA\Type\CustomerType\PhysChallNameAType[]
     */
    public function getPhysChallName()
    {
        return $this->physChallName;
    }

    /**
     * Sets a new physChallName
     *
     * Describes the customer's physical challenge.
     *
     * @param \Recranet\OTA\Type\CustomerType\PhysChallNameAType[] $physChallName
     * @return self
     */
    public function setPhysChallName(array $physChallName = null)
    {
        $this->physChallName = $physChallName;
        return $this;
    }

    /**
     * Adds as petInfo
     *
     * Describes the customer's pet.
     *
     * @return self
     * @param string $petInfo
     */
    public function addToPetInfo($petInfo)
    {
        $this->petInfo[] = $petInfo;
        return $this;
    }

    /**
     * isset petInfo
     *
     * Describes the customer's pet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPetInfo($index)
    {
        return isset($this->petInfo[$index]);
    }

    /**
     * unset petInfo
     *
     * Describes the customer's pet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPetInfo($index)
    {
        unset($this->petInfo[$index]);
    }

    /**
     * Gets as petInfo
     *
     * Describes the customer's pet.
     *
     * @return string[]
     */
    public function getPetInfo()
    {
        return $this->petInfo;
    }

    /**
     * Sets a new petInfo
     *
     * Describes the customer's pet.
     *
     * @param string $petInfo
     * @return self
     */
    public function setPetInfo(array $petInfo = null)
    {
        $this->petInfo = $petInfo;
        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\PaymentFormAType $paymentForm
     */
    public function addToPaymentForm(\Recranet\OTA\Type\CustomerType\PaymentFormAType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;
        return $this;
    }

    /**
     * isset paymentForm
     *
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\PaymentFormAType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Methods of providing funds and guarantees for travel by the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\PaymentFormAType[] $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm = null)
    {
        $this->paymentForm = $paymentForm;
        return $this;
    }

    /**
     * Adds as relatedTraveler
     *
     * Identifies a traveler associated with the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\RelatedTravelerType $relatedTraveler
     */
    public function addToRelatedTraveler(\Recranet\OTA\Type\RelatedTravelerType $relatedTraveler)
    {
        $this->relatedTraveler[] = $relatedTraveler;
        return $this;
    }

    /**
     * isset relatedTraveler
     *
     * Identifies a traveler associated with the customer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedTraveler($index)
    {
        return isset($this->relatedTraveler[$index]);
    }

    /**
     * unset relatedTraveler
     *
     * Identifies a traveler associated with the customer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedTraveler($index)
    {
        unset($this->relatedTraveler[$index]);
    }

    /**
     * Gets as relatedTraveler
     *
     * Identifies a traveler associated with the customer.
     *
     * @return \Recranet\OTA\Type\RelatedTravelerType[]
     */
    public function getRelatedTraveler()
    {
        return $this->relatedTraveler;
    }

    /**
     * Sets a new relatedTraveler
     *
     * Identifies a traveler associated with the customer.
     *
     * @param \Recranet\OTA\Type\RelatedTravelerType[] $relatedTraveler
     * @return self
     */
    public function setRelatedTraveler(array $relatedTraveler = null)
    {
        $this->relatedTraveler = $relatedTraveler;
        return $this;
    }

    /**
     * Adds as contactPerson
     *
     * Information on a contact person for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contactPerson
     */
    public function addToContactPerson(\Recranet\OTA\Type\ContactPersonType $contactPerson)
    {
        $this->contactPerson[] = $contactPerson;
        return $this;
    }

    /**
     * isset contactPerson
     *
     * Information on a contact person for the customer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactPerson($index)
    {
        return isset($this->contactPerson[$index]);
    }

    /**
     * unset contactPerson
     *
     * Information on a contact person for the customer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactPerson($index)
    {
        unset($this->contactPerson[$index]);
    }

    /**
     * Gets as contactPerson
     *
     * Information on a contact person for the customer.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * Information on a contact person for the customer.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contactPerson
     * @return self
     */
    public function setContactPerson(array $contactPerson = null)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * Adds as document
     *
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @return self
     * @param \Recranet\OTA\Type\DocumentType $document
     */
    public function addToDocument(\Recranet\OTA\Type\DocumentType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @return \Recranet\OTA\Type\DocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * Detailed document information for the customer (e.g., driver license, passport, visa).
     *
     * @param \Recranet\OTA\Type\DocumentType[] $document
     * @return self
     */
    public function setDocument(array $document = null)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Loyalty program information for the customer.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Recranet\OTA\Type\CustomerType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Loyalty program information for the customer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Loyalty program information for the customer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Loyalty program information for the customer.
     *
     * @return \Recranet\OTA\Type\CustomerType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Loyalty program information for the customer.
     *
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty = null)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Adds as employeeInfo
     *
     * Employment information for the customer.
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
     * Employment information for the customer.
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
     * Employment information for the customer.
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
     * Employment information for the customer.
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
     * Employment information for the customer.
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
     * Gets as employerInfo
     *
     * Identifies the customer's employer.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getEmployerInfo()
    {
        return $this->employerInfo;
    }

    /**
     * Sets a new employerInfo
     *
     * Identifies the customer's employer.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $employerInfo
     * @return self
     */
    public function setEmployerInfo(?\Recranet\OTA\Type\CompanyNameType $employerInfo = null)
    {
        $this->employerInfo = $employerInfo;
        return $this;
    }

    /**
     * Adds as additionalLanguage
     *
     * Additional languages spoken by the traveler.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\AdditionalLanguageAType $additionalLanguage
     */
    public function addToAdditionalLanguage(\Recranet\OTA\Type\CustomerType\AdditionalLanguageAType $additionalLanguage)
    {
        $this->additionalLanguage[] = $additionalLanguage;
        return $this;
    }

    /**
     * isset additionalLanguage
     *
     * Additional languages spoken by the traveler.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalLanguage($index)
    {
        return isset($this->additionalLanguage[$index]);
    }

    /**
     * unset additionalLanguage
     *
     * Additional languages spoken by the traveler.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalLanguage($index)
    {
        unset($this->additionalLanguage[$index]);
    }

    /**
     * Gets as additionalLanguage
     *
     * Additional languages spoken by the traveler.
     *
     * @return \Recranet\OTA\Type\CustomerType\AdditionalLanguageAType[]
     */
    public function getAdditionalLanguage()
    {
        return $this->additionalLanguage;
    }

    /**
     * Sets a new additionalLanguage
     *
     * Additional languages spoken by the traveler.
     *
     * @param \Recranet\OTA\Type\CustomerType\AdditionalLanguageAType[] $additionalLanguage
     * @return self
     */
    public function setAdditionalLanguage(array $additionalLanguage = null)
    {
        $this->additionalLanguage = $additionalLanguage;
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

