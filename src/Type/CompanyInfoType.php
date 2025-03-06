<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CompanyInfoType
 *
 * Detailed information about a company.
 * XSD Type: CompanyInfoType
 */
class CompanyInfoType
{
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
     * Detailed name information for the company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType[] $companyName
     */
    private $companyName = [
        
    ];

    /**
     * Detailed information on an address for the company.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType\AddressInfoAType[] $addressInfo
     */
    private $addressInfo = [
        
    ];

    /**
     * Information on a telephone number for the company.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType\TelephoneInfoAType[] $telephoneInfo
     */
    private $telephoneInfo = [
        
    ];

    /**
     * Information on an email address for the company.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Information on a URL for the company.
     *
     * @var \Recranet\OTA\Type\URLType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @var \Recranet\OTA\Type\AddressType[] $businessLocale
     */
    private $businessLocale = [
        
    ];

    /**
     * Method of providing funds for travel by the company.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType\PaymentFormAType[] $paymentForm
     */
    private $paymentForm = [
        
    ];

    /**
     * Description: A deposit policy that is associated to this profile.
     *
     * @var \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayment
     */
    private $depositPayment = null;

    /**
     * Information on a contact person for the company.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contactPerson
     */
    private $contactPerson = [
        
    ];

    /**
     * Information on the organization responsible for arranging travel for the company.
     *
     * @var \Recranet\OTA\Type\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * Company's loyalty program information.
     *
     * @var \Recranet\OTA\Type\LoyaltyProgramType[] $loyaltyProgram
     */
    private $loyaltyProgram = [
        
    ];

    /**
     * Trip purpose codes used by this company.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType\TripPurposeAType[] $tripPurpose
     */
    private $tripPurpose = [
        
    ];

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
     * Adds as companyName
     *
     * Detailed name information for the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyNameType $companyName
     */
    public function addToCompanyName(\Recranet\OTA\Type\CompanyNameType $companyName)
    {
        $this->companyName[] = $companyName;
        return $this;
    }

    /**
     * isset companyName
     *
     * Detailed name information for the company.
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
     * Detailed name information for the company.
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
     * Detailed name information for the company.
     *
     * @return \Recranet\OTA\Type\CompanyNameType[]
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Detailed name information for the company.
     *
     * @param \Recranet\OTA\Type\CompanyNameType[] $companyName
     * @return self
     */
    public function setCompanyName(array $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Adds as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyInfoType\AddressInfoAType $addressInfo
     */
    public function addToAddressInfo(\Recranet\OTA\Type\CompanyInfoType\AddressInfoAType $addressInfo)
    {
        $this->addressInfo[] = $addressInfo;
        return $this;
    }

    /**
     * isset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressInfo($index)
    {
        return isset($this->addressInfo[$index]);
    }

    /**
     * unset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressInfo($index)
    {
        unset($this->addressInfo[$index]);
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType\AddressInfoAType[]
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType\AddressInfoAType[] $addressInfo
     * @return self
     */
    public function setAddressInfo(array $addressInfo = null)
    {
        $this->addressInfo = $addressInfo;
        return $this;
    }

    /**
     * Adds as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyInfoType\TelephoneInfoAType $telephoneInfo
     */
    public function addToTelephoneInfo(\Recranet\OTA\Type\CompanyInfoType\TelephoneInfoAType $telephoneInfo)
    {
        $this->telephoneInfo[] = $telephoneInfo;
        return $this;
    }

    /**
     * isset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephoneInfo($index)
    {
        return isset($this->telephoneInfo[$index]);
    }

    /**
     * unset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephoneInfo($index)
    {
        unset($this->telephoneInfo[$index]);
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType\TelephoneInfoAType[]
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType\TelephoneInfoAType[] $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(array $telephoneInfo = null)
    {
        $this->telephoneInfo = $telephoneInfo;
        return $this;
    }

    /**
     * Adds as email
     *
     * Information on an email address for the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyInfoType\EmailAType $email
     */
    public function addToEmail(\Recranet\OTA\Type\CompanyInfoType\EmailAType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Information on an email address for the company.
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
     * Information on an email address for the company.
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
     * Information on an email address for the company.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address for the company.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType\EmailAType[] $email
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
     * Information on a URL for the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\URLType $uRL
     */
    public function addToURL(\Recranet\OTA\Type\URLType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * Information on a URL for the company.
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
     * Information on a URL for the company.
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
     * Information on a URL for the company.
     *
     * @return \Recranet\OTA\Type\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Information on a URL for the company.
     *
     * @param \Recranet\OTA\Type\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Adds as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @return self
     * @param \Recranet\OTA\Type\AddressType $businessLocale
     */
    public function addToBusinessLocale(\Recranet\OTA\Type\AddressType $businessLocale)
    {
        $this->businessLocale[] = $businessLocale;
        return $this;
    }

    /**
     * isset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessLocale($index)
    {
        return isset($this->businessLocale[$index]);
    }

    /**
     * unset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessLocale($index)
    {
        unset($this->businessLocale[$index]);
    }

    /**
     * Gets as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @return \Recranet\OTA\Type\AddressType[]
     */
    public function getBusinessLocale()
    {
        return $this->businessLocale;
    }

    /**
     * Sets a new businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param \Recranet\OTA\Type\AddressType[] $businessLocale
     * @return self
     */
    public function setBusinessLocale(array $businessLocale = null)
    {
        $this->businessLocale = $businessLocale;
        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyInfoType\PaymentFormAType $paymentForm
     */
    public function addToPaymentForm(\Recranet\OTA\Type\CompanyInfoType\PaymentFormAType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;
        return $this;
    }

    /**
     * isset paymentForm
     *
     * Method of providing funds for travel by the company.
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
     * Method of providing funds for travel by the company.
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
     * Method of providing funds for travel by the company.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType\PaymentFormAType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType\PaymentFormAType[] $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm = null)
    {
        $this->paymentForm = $paymentForm;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @return self
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToDepositPayment(\Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->depositPayment[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayment($index)
    {
        return isset($this->depositPayment[$index]);
    }

    /**
     * unset depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayment($index)
    {
        unset($this->depositPayment[$index]);
    }

    /**
     * Gets as depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @return \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getDepositPayment()
    {
        return $this->depositPayment;
    }

    /**
     * Sets a new depositPayment
     *
     * Description: A deposit policy that is associated to this profile.
     *
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayment
     * @return self
     */
    public function setDepositPayment(array $depositPayment = null)
    {
        $this->depositPayment = $depositPayment;
        return $this;
    }

    /**
     * Adds as contactPerson
     *
     * Information on a contact person for the company.
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
     * Information on a contact person for the company.
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
     * Information on a contact person for the company.
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
     * Information on a contact person for the company.
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
     * Information on a contact person for the company.
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
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
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
     * Information on the organization responsible for arranging travel for the company.
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
     * Information on the organization responsible for arranging travel for the company.
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
     * Information on the organization responsible for arranging travel for the company.
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
     * Information on the organization responsible for arranging travel for the company.
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
     * Company's loyalty program information.
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
     * Company's loyalty program information.
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
     * Company's loyalty program information.
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
     * Company's loyalty program information.
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
     * Company's loyalty program information.
     *
     * @param \Recranet\OTA\Type\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram = null)
    {
        $this->loyaltyProgram = $loyaltyProgram;
        return $this;
    }

    /**
     * Adds as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyInfoType\TripPurposeAType $tripPurpose
     */
    public function addToTripPurpose(\Recranet\OTA\Type\CompanyInfoType\TripPurposeAType $tripPurpose)
    {
        $this->tripPurpose[] = $tripPurpose;
        return $this;
    }

    /**
     * isset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTripPurpose($index)
    {
        return isset($this->tripPurpose[$index]);
    }

    /**
     * unset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTripPurpose($index)
    {
        unset($this->tripPurpose[$index]);
    }

    /**
     * Gets as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType\TripPurposeAType[]
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType\TripPurposeAType[] $tripPurpose
     * @return self
     */
    public function setTripPurpose(array $tripPurpose = null)
    {
        $this->tripPurpose = $tripPurpose;
        return $this;
    }
}

