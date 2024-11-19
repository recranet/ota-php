<?php

namespace Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType;

/**
 * Class representing GatewayAType
 */
class GatewayAType
{
    /**
     * Electronic commerce indicator.
     * Example: 1
     * Note: The ECI indicates the security level associated with an Internet purchase transaction.
     *
     * @var string $eCI
     */
    private $eCI = null;

    /**
     * Merchant ID.
     * Example: mycart
     *
     * @var string $merchantID
     */
    private $merchantID = null;

    /**
     * Processor ID.
     * Example: 201
     *
     * @var string $processorID
     */
    private $processorID = null;

    /**
     * Transaction URL.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Specifes the merchant name used by the authenticator in the authentication request.
     *
     * @var string $merchantName
     */
    private $merchantName = null;

    /**
     * Specifies the version of 3DS that was used in the authorization (ex. 1.02 would be sent as 102 as no decimal point is sent).??
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Cardholder authentication value information.
     *
     * @var \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType $authenticationVerificationValue
     */
    private $authenticationVerificationValue = null;

    /**
     * Merchant transaction password information.
     *
     * @var \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType $transactionPassword
     */
    private $transactionPassword = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as eCI
     *
     * Electronic commerce indicator.
     * Example: 1
     * Note: The ECI indicates the security level associated with an Internet purchase transaction.
     *
     * @return string
     */
    public function getECI()
    {
        return $this->eCI;
    }

    /**
     * Sets a new eCI
     *
     * Electronic commerce indicator.
     * Example: 1
     * Note: The ECI indicates the security level associated with an Internet purchase transaction.
     *
     * @param string $eCI
     * @return self
     */
    public function setECI($eCI)
    {
        $this->eCI = $eCI;
        return $this;
    }

    /**
     * Gets as merchantID
     *
     * Merchant ID.
     * Example: mycart
     *
     * @return string
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Sets a new merchantID
     *
     * Merchant ID.
     * Example: mycart
     *
     * @param string $merchantID
     * @return self
     */
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;
        return $this;
    }

    /**
     * Gets as processorID
     *
     * Processor ID.
     * Example: 201
     *
     * @return string
     */
    public function getProcessorID()
    {
        return $this->processorID;
    }

    /**
     * Sets a new processorID
     *
     * Processor ID.
     * Example: 201
     *
     * @param string $processorID
     * @return self
     */
    public function setProcessorID($processorID)
    {
        $this->processorID = $processorID;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * Transaction URL.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Transaction URL.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as merchantName
     *
     * Specifes the merchant name used by the authenticator in the authentication request.
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Sets a new merchantName
     *
     * Specifes the merchant name used by the authenticator in the authentication request.
     *
     * @param string $merchantName
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
     * Gets as version
     *
     * Specifies the version of 3DS that was used in the authorization (ex. 1.02 would be sent as 102 as no decimal point is sent).??
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Specifies the version of 3DS that was used in the authorization (ex. 1.02 would be sent as 102 as no decimal point is sent).??
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as authenticationVerificationValue
     *
     * Cardholder authentication value information.
     *
     * @return \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType
     */
    public function getAuthenticationVerificationValue()
    {
        return $this->authenticationVerificationValue;
    }

    /**
     * Sets a new authenticationVerificationValue
     *
     * Cardholder authentication value information.
     *
     * @param \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType $authenticationVerificationValue
     * @return self
     */
    public function setAuthenticationVerificationValue(?\Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType $authenticationVerificationValue = null)
    {
        $this->authenticationVerificationValue = $authenticationVerificationValue;
        return $this;
    }

    /**
     * Gets as transactionPassword
     *
     * Merchant transaction password information.
     *
     * @return \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType
     */
    public function getTransactionPassword()
    {
        return $this->transactionPassword;
    }

    /**
     * Sets a new transactionPassword
     *
     * Merchant transaction password information.
     *
     * @param \Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType $transactionPassword
     * @return self
     */
    public function setTransactionPassword(?\Recranet\OTA\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType $transactionPassword = null)
    {
        $this->transactionPassword = $transactionPassword;
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

