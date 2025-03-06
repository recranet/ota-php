<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AuthorizationType
 *
 * Information with which a traveller's identification is verified and/or charges are authorized.
 * ToDo - this types should be moved to OTA_CommonTypes. It's required in a common types file, since the both AuthRQ/RS use it.
 * XSD Type: AuthorizationType
 */
class AuthorizationType
{
    /**
     * The code associated with the company (e.g., two to three character airline designator) submitting a request to an authorization vendor system.
     *
     * @var string $principalCompanyCode
     */
    private $principalCompanyCode = null;

    /**
     * A unique identifier for an authorization request. It may be used to link a response to a corresponding request item.
     *
     * @var string $refNumber
     */
    private $refNumber = null;

    /**
     * Specifies check information about the customer seeking authorization.
     *
     * @var \Recranet\OTA\Type\AuthorizationType\CheckAuthorizationAType $checkAuthorization
     */
    private $checkAuthorization = null;

    /**
     * Specifies credit card information about the customer seeking authorization.
     *
     * @var \Recranet\OTA\Type\AuthorizationType\CreditCardAuthorizationAType $creditCardAuthorization
     */
    private $creditCardAuthorization = null;

    /**
     * Specifies account information about the customer seeking authorization.
     *
     * @var \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType $accountAuthorization
     */
    private $accountAuthorization = null;

    /**
     * Information used for validating a drivers license or for supporting a check or credit card authorization request.
     *
     * @var \Recranet\OTA\Type\DocumentType $driversLicenseAuthorization
     */
    private $driversLicenseAuthorization = null;

    /**
     * The booking or confirmation number for which charges are being authorized.
     *
     * @var \Recranet\OTA\Type\AuthorizationType\BookingReferenceIDAType $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Gets as principalCompanyCode
     *
     * The code associated with the company (e.g., two to three character airline designator) submitting a request to an authorization vendor system.
     *
     * @return string
     */
    public function getPrincipalCompanyCode()
    {
        return $this->principalCompanyCode;
    }

    /**
     * Sets a new principalCompanyCode
     *
     * The code associated with the company (e.g., two to three character airline designator) submitting a request to an authorization vendor system.
     *
     * @param string $principalCompanyCode
     * @return self
     */
    public function setPrincipalCompanyCode($principalCompanyCode)
    {
        $this->principalCompanyCode = $principalCompanyCode;
        return $this;
    }

    /**
     * Gets as refNumber
     *
     * A unique identifier for an authorization request. It may be used to link a response to a corresponding request item.
     *
     * @return string
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * A unique identifier for an authorization request. It may be used to link a response to a corresponding request item.
     *
     * @param string $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * Gets as checkAuthorization
     *
     * Specifies check information about the customer seeking authorization.
     *
     * @return \Recranet\OTA\Type\AuthorizationType\CheckAuthorizationAType
     */
    public function getCheckAuthorization()
    {
        return $this->checkAuthorization;
    }

    /**
     * Sets a new checkAuthorization
     *
     * Specifies check information about the customer seeking authorization.
     *
     * @param \Recranet\OTA\Type\AuthorizationType\CheckAuthorizationAType $checkAuthorization
     * @return self
     */
    public function setCheckAuthorization(?\Recranet\OTA\Type\AuthorizationType\CheckAuthorizationAType $checkAuthorization = null)
    {
        $this->checkAuthorization = $checkAuthorization;
        return $this;
    }

    /**
     * Gets as creditCardAuthorization
     *
     * Specifies credit card information about the customer seeking authorization.
     *
     * @return \Recranet\OTA\Type\AuthorizationType\CreditCardAuthorizationAType
     */
    public function getCreditCardAuthorization()
    {
        return $this->creditCardAuthorization;
    }

    /**
     * Sets a new creditCardAuthorization
     *
     * Specifies credit card information about the customer seeking authorization.
     *
     * @param \Recranet\OTA\Type\AuthorizationType\CreditCardAuthorizationAType $creditCardAuthorization
     * @return self
     */
    public function setCreditCardAuthorization(?\Recranet\OTA\Type\AuthorizationType\CreditCardAuthorizationAType $creditCardAuthorization = null)
    {
        $this->creditCardAuthorization = $creditCardAuthorization;
        return $this;
    }

    /**
     * Gets as accountAuthorization
     *
     * Specifies account information about the customer seeking authorization.
     *
     * @return \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType
     */
    public function getAccountAuthorization()
    {
        return $this->accountAuthorization;
    }

    /**
     * Sets a new accountAuthorization
     *
     * Specifies account information about the customer seeking authorization.
     *
     * @param \Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType $accountAuthorization
     * @return self
     */
    public function setAccountAuthorization(?\Recranet\OTA\Type\AuthorizationType\AccountAuthorizationAType $accountAuthorization = null)
    {
        $this->accountAuthorization = $accountAuthorization;
        return $this;
    }

    /**
     * Gets as driversLicenseAuthorization
     *
     * Information used for validating a drivers license or for supporting a check or credit card authorization request.
     *
     * @return \Recranet\OTA\Type\DocumentType
     */
    public function getDriversLicenseAuthorization()
    {
        return $this->driversLicenseAuthorization;
    }

    /**
     * Sets a new driversLicenseAuthorization
     *
     * Information used for validating a drivers license or for supporting a check or credit card authorization request.
     *
     * @param \Recranet\OTA\Type\DocumentType $driversLicenseAuthorization
     * @return self
     */
    public function setDriversLicenseAuthorization(?\Recranet\OTA\Type\DocumentType $driversLicenseAuthorization = null)
    {
        $this->driversLicenseAuthorization = $driversLicenseAuthorization;
        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * The booking or confirmation number for which charges are being authorized.
     *
     * @return \Recranet\OTA\Type\AuthorizationType\BookingReferenceIDAType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The booking or confirmation number for which charges are being authorized.
     *
     * @param \Recranet\OTA\Type\AuthorizationType\BookingReferenceIDAType $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(?\Recranet\OTA\Type\AuthorizationType\BookingReferenceIDAType $bookingReferenceID = null)
    {
        $this->bookingReferenceID = $bookingReferenceID;
        return $this;
    }
}

