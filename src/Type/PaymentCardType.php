<?php

namespace Recranet\OTA\Type;

/**
 * Class representing PaymentCardType
 *
 * Specific payment card information.
 * OpenTravel Best Practice: Use of Encrypted, Masked or Tokenized Information: Certain OpenTravel schema may have combinations payment and/or account information with other personally identifying information, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the payment and account information be protected, using tokenization or some other encryption method and displayed in a masked format.
 * XSD Type: PaymentCardType
 */
class PaymentCardType
{
    /**
     * Extended payments indicator.
     * Example: true
     * Implementer: If true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @var bool $extendedPaymentInd
     */
    private $extendedPaymentInd = null;

    /**
     * Secure data indicator.
     * Example: true
     * Implementer: If true, all or a portion of this data is secure, via tokenization, encryption and/or masking.
     *
     * @var bool $secureInd
     */
    private $secureInd = null;

    /**
     * Cardholder signature on file indicator.
     * Implementer: If true, the cardholder signature is on file.
     * Example: true
     *
     * @var bool $signatureOnFileInd
     */
    private $signatureOnFileInd = null;

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
     * Issuer code.
     * Example: MC
     * DEPRECATION WARNING: This attribute will be deprecated in the 2012B publication. It will be replaced with the List_PaymentCardCode Open List.
     *
     * @var string $cardCode
     */
    private $cardCode = null;

    /**
     * Card Holder Reference ID.
     * Example: 1
     * Note: This card holder reference ID was defined elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @var string $cardHolderRPH
     */
    private $cardHolderRPH = null;

    /**
     * Company sponsor.
     * Example: Universal Airline Travel Plan
     * Note: This is a reference for a company sponsor for the card.
     *
     * @var string $companyCardReference
     */
    private $companyCardReference = null;

    /**
     * Country of issue code.
     * Example: US
     *
     * @var string $countryOfIssue
     */
    private $countryOfIssue = null;

    /**
     * Indicates the starting date.
     *
     * @var string $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var string $expireDate
     */
    private $expireDate = null;

    /**
     * Remark.
     * Example: Travel rewards card.
     *
     * @var string $remark
     */
    private $remark = null;

    /**
     * Payment Card Reference ID.
     * Example: 1
     * Note: This is a unique reference ID for one set of payment card information that is set here and may be referenced elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Specifies the type of channel in which the booking was performed. Refer to OpenTravel Code List Merchant Channel Type (MER).
     *
     * @var string $merchantChannelCode
     */
    private $merchantChannelCode = null;

    /**
     * Specifies how the card or token number was collected for the transaction.
     *
     * @var string $cardCollectType
     */
    private $cardCollectType = null;

    /**
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @var string[] $exemptionCode
     */
    private $exemptionCode = null;

    /**
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @var string[] $mITCode
     */
    private $mITCode = null;

    /**
     * Specifies the Transaction ID/Trace ID of the authorization request when performed by the booking agent which only occurs in certain circumstances.
     *
     * @var string $authorizationID
     */
    private $authorizationID = null;

    /**
     * Specifies why an authentication could not be completed. Refer to OpenTravel Code List Authentication Issue Type (AIT).
     *
     * @var string $authenticationIssue
     */
    private $authenticationIssue = null;

    /**
     * Payment card type.
     * Example: Mastercard
     *
     * @var \Recranet\OTA\Type\ListPaymentCardIssuerType $cardType
     */
    private $cardType = null;

    /**
     * Payment card issuer.
     * Example: BritishAirwaysVisaSignatureCard
     *
     * @var \Recranet\OTA\Type\PaymentCardType\IssuerAType $issuer
     */
    private $issuer = null;

    /**
     * Card holder name.
     *
     * @var string $cardHolderName
     */
    private $cardHolderName = null;

    /**
     * Description: The details of the Card Holder's Name.
     *
     * @var \Recranet\OTA\Type\PersonNameType $cardHolderNameDetails
     */
    private $cardHolderNameDetails = null;

    /**
     * Card holder address.
     *
     * @var \Recranet\OTA\Type\AddressType $address
     */
    private $address = null;

    /**
     * Card holder telephone number.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Card holder email.
     *
     * @var \Recranet\OTA\Type\EmailType[] $email
     */
    private $email = [
        
    ];

    /**
     * Credit card number embossed on the card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @var \Recranet\OTA\Type\EncryptionTokenType $cardNumber
     */
    private $cardNumber = null;

    /**
     * Verification digits.
     * Note: This is the verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @var \Recranet\OTA\Type\EncryptionTokenType $seriesCode
     */
    private $seriesCode = null;

    /**
     * Card holder loyalty program.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @var \Recranet\OTA\Type\EncryptionTokenType[] $magneticStripe
     */
    private $magneticStripe = [
        
    ];

    /**
     * 3-D secure financial authorization information.
     * Note: This contains 3-D Secure protocol information for online credit and debit card transactions for programs such as Verified by Visa, MasterCard SecureCode, J/Secure and SafeKey.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType $threeDomainSecurity
     */
    private $threeDomainSecurity = null;

    /**
     * Signature on file.
     * Note: This indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\SignatureOnFileAType $signatureOnFile
     */
    private $signatureOnFile = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as extendedPaymentInd
     *
     * Extended payments indicator.
     * Example: true
     * Implementer: If true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @return bool
     */
    public function getExtendedPaymentInd()
    {
        return $this->extendedPaymentInd;
    }

    /**
     * Sets a new extendedPaymentInd
     *
     * Extended payments indicator.
     * Example: true
     * Implementer: If true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @param bool $extendedPaymentInd
     * @return self
     */
    public function setExtendedPaymentInd($extendedPaymentInd)
    {
        $this->extendedPaymentInd = $extendedPaymentInd;
        return $this;
    }

    /**
     * Gets as secureInd
     *
     * Secure data indicator.
     * Example: true
     * Implementer: If true, all or a portion of this data is secure, via tokenization, encryption and/or masking.
     *
     * @return bool
     */
    public function getSecureInd()
    {
        return $this->secureInd;
    }

    /**
     * Sets a new secureInd
     *
     * Secure data indicator.
     * Example: true
     * Implementer: If true, all or a portion of this data is secure, via tokenization, encryption and/or masking.
     *
     * @param bool $secureInd
     * @return self
     */
    public function setSecureInd($secureInd)
    {
        $this->secureInd = $secureInd;
        return $this;
    }

    /**
     * Gets as signatureOnFileInd
     *
     * Cardholder signature on file indicator.
     * Implementer: If true, the cardholder signature is on file.
     * Example: true
     *
     * @return bool
     */
    public function getSignatureOnFileInd()
    {
        return $this->signatureOnFileInd;
    }

    /**
     * Sets a new signatureOnFileInd
     *
     * Cardholder signature on file indicator.
     * Implementer: If true, the cardholder signature is on file.
     * Example: true
     *
     * @param bool $signatureOnFileInd
     * @return self
     */
    public function setSignatureOnFileInd($signatureOnFileInd)
    {
        $this->signatureOnFileInd = $signatureOnFileInd;
        return $this;
    }

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
     * Gets as cardCode
     *
     * Issuer code.
     * Example: MC
     * DEPRECATION WARNING: This attribute will be deprecated in the 2012B publication. It will be replaced with the List_PaymentCardCode Open List.
     *
     * @return string
     */
    public function getCardCode()
    {
        return $this->cardCode;
    }

    /**
     * Sets a new cardCode
     *
     * Issuer code.
     * Example: MC
     * DEPRECATION WARNING: This attribute will be deprecated in the 2012B publication. It will be replaced with the List_PaymentCardCode Open List.
     *
     * @param string $cardCode
     * @return self
     */
    public function setCardCode($cardCode)
    {
        $this->cardCode = $cardCode;
        return $this;
    }

    /**
     * Gets as cardHolderRPH
     *
     * Card Holder Reference ID.
     * Example: 1
     * Note: This card holder reference ID was defined elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getCardHolderRPH()
    {
        return $this->cardHolderRPH;
    }

    /**
     * Sets a new cardHolderRPH
     *
     * Card Holder Reference ID.
     * Example: 1
     * Note: This card holder reference ID was defined elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
     *
     * @param string $cardHolderRPH
     * @return self
     */
    public function setCardHolderRPH($cardHolderRPH)
    {
        $this->cardHolderRPH = $cardHolderRPH;
        return $this;
    }

    /**
     * Gets as companyCardReference
     *
     * Company sponsor.
     * Example: Universal Airline Travel Plan
     * Note: This is a reference for a company sponsor for the card.
     *
     * @return string
     */
    public function getCompanyCardReference()
    {
        return $this->companyCardReference;
    }

    /**
     * Sets a new companyCardReference
     *
     * Company sponsor.
     * Example: Universal Airline Travel Plan
     * Note: This is a reference for a company sponsor for the card.
     *
     * @param string $companyCardReference
     * @return self
     */
    public function setCompanyCardReference($companyCardReference)
    {
        $this->companyCardReference = $companyCardReference;
        return $this;
    }

    /**
     * Gets as countryOfIssue
     *
     * Country of issue code.
     * Example: US
     *
     * @return string
     */
    public function getCountryOfIssue()
    {
        return $this->countryOfIssue;
    }

    /**
     * Sets a new countryOfIssue
     *
     * Country of issue code.
     * Example: US
     *
     * @param string $countryOfIssue
     * @return self
     */
    public function setCountryOfIssue($countryOfIssue)
    {
        $this->countryOfIssue = $countryOfIssue;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return string
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
     * @param string $effectiveDate
     * @return self
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return string
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
     * @param string $expireDate
     * @return self
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as remark
     *
     * Remark.
     * Example: Travel rewards card.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Remark.
     * Example: Travel rewards card.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Payment Card Reference ID.
     * Example: 1
     * Note: This is a unique reference ID for one set of payment card information that is set here and may be referenced elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
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
     * Payment Card Reference ID.
     * Example: 1
     * Note: This is a unique reference ID for one set of payment card information that is set here and may be referenced elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place holder (RPH) is a unique ID assigned to an instance in a collection of like items (e.g. used to assign a unique ID to each passenger in a list of passengers. When referencing an RPH, the same RPH type is used to identify the assigned unique ID in an element that references the item in a collection.
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
     * Gets as merchantChannelCode
     *
     * Specifies the type of channel in which the booking was performed. Refer to OpenTravel Code List Merchant Channel Type (MER).
     *
     * @return string
     */
    public function getMerchantChannelCode()
    {
        return $this->merchantChannelCode;
    }

    /**
     * Sets a new merchantChannelCode
     *
     * Specifies the type of channel in which the booking was performed. Refer to OpenTravel Code List Merchant Channel Type (MER).
     *
     * @param string $merchantChannelCode
     * @return self
     */
    public function setMerchantChannelCode($merchantChannelCode)
    {
        $this->merchantChannelCode = $merchantChannelCode;
        return $this;
    }

    /**
     * Gets as cardCollectType
     *
     * Specifies how the card or token number was collected for the transaction.
     *
     * @return string
     */
    public function getCardCollectType()
    {
        return $this->cardCollectType;
    }

    /**
     * Sets a new cardCollectType
     *
     * Specifies how the card or token number was collected for the transaction.
     *
     * @param string $cardCollectType
     * @return self
     */
    public function setCardCollectType($cardCollectType)
    {
        $this->cardCollectType = $cardCollectType;
        return $this;
    }

    /**
     * Adds as exemptionCode
     *
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @return self
     * @param string $exemptionCode
     */
    public function addToExemptionCode($exemptionCode)
    {
        $this->exemptionCode[] = $exemptionCode;
        return $this;
    }

    /**
     * isset exemptionCode
     *
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExemptionCode($index)
    {
        return isset($this->exemptionCode[$index]);
    }

    /**
     * unset exemptionCode
     *
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExemptionCode($index)
    {
        unset($this->exemptionCode[$index]);
    }

    /**
     * Gets as exemptionCode
     *
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @return string[]
     */
    public function getExemptionCode()
    {
        return $this->exemptionCode;
    }

    /**
     * Sets a new exemptionCode
     *
     * Specifies which PSD2 SCA exemption was used (EU Only). Refer to OpenTravel Code List Exemption Type (EXT).
     *
     * @param string $exemptionCode
     * @return self
     */
    public function setExemptionCode(array $exemptionCode)
    {
        $this->exemptionCode = $exemptionCode;
        return $this;
    }

    /**
     * Adds as mITCode
     *
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @return self
     * @param string $mITCode
     */
    public function addToMITCode($mITCode)
    {
        $this->mITCode[] = $mITCode;
        return $this;
    }

    /**
     * isset mITCode
     *
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMITCode($index)
    {
        return isset($this->mITCode[$index]);
    }

    /**
     * unset mITCode
     *
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMITCode($index)
    {
        unset($this->mITCode[$index]);
    }

    /**
     * Gets as mITCode
     *
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @return string[]
     */
    public function getMITCode()
    {
        return $this->mITCode;
    }

    /**
     * Sets a new mITCode
     *
     * Specifies the agreed mandate between the cardholder and the agent/third party. Refer to OpenTravel Code List MIT Mandate Type (MIT).
     *
     * @param string $mITCode
     * @return self
     */
    public function setMITCode(array $mITCode)
    {
        $this->mITCode = $mITCode;
        return $this;
    }

    /**
     * Gets as authorizationID
     *
     * Specifies the Transaction ID/Trace ID of the authorization request when performed by the booking agent which only occurs in certain circumstances.
     *
     * @return string
     */
    public function getAuthorizationID()
    {
        return $this->authorizationID;
    }

    /**
     * Sets a new authorizationID
     *
     * Specifies the Transaction ID/Trace ID of the authorization request when performed by the booking agent which only occurs in certain circumstances.
     *
     * @param string $authorizationID
     * @return self
     */
    public function setAuthorizationID($authorizationID)
    {
        $this->authorizationID = $authorizationID;
        return $this;
    }

    /**
     * Gets as authenticationIssue
     *
     * Specifies why an authentication could not be completed. Refer to OpenTravel Code List Authentication Issue Type (AIT).
     *
     * @return string
     */
    public function getAuthenticationIssue()
    {
        return $this->authenticationIssue;
    }

    /**
     * Sets a new authenticationIssue
     *
     * Specifies why an authentication could not be completed. Refer to OpenTravel Code List Authentication Issue Type (AIT).
     *
     * @param string $authenticationIssue
     * @return self
     */
    public function setAuthenticationIssue($authenticationIssue)
    {
        $this->authenticationIssue = $authenticationIssue;
        return $this;
    }

    /**
     * Gets as cardType
     *
     * Payment card type.
     * Example: Mastercard
     *
     * @return \Recranet\OTA\Type\ListPaymentCardIssuerType
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * Payment card type.
     * Example: Mastercard
     *
     * @param \Recranet\OTA\Type\ListPaymentCardIssuerType $cardType
     * @return self
     */
    public function setCardType(?\Recranet\OTA\Type\ListPaymentCardIssuerType $cardType = null)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * Payment card issuer.
     * Example: BritishAirwaysVisaSignatureCard
     *
     * @return \Recranet\OTA\Type\PaymentCardType\IssuerAType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * Payment card issuer.
     * Example: BritishAirwaysVisaSignatureCard
     *
     * @param \Recranet\OTA\Type\PaymentCardType\IssuerAType $issuer
     * @return self
     */
    public function setIssuer(?\Recranet\OTA\Type\PaymentCardType\IssuerAType $issuer = null)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as cardHolderName
     *
     * Card holder name.
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * Sets a new cardHolderName
     *
     * Card holder name.
     *
     * @param string $cardHolderName
     * @return self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    /**
     * Gets as cardHolderNameDetails
     *
     * Description: The details of the Card Holder's Name.
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getCardHolderNameDetails()
    {
        return $this->cardHolderNameDetails;
    }

    /**
     * Sets a new cardHolderNameDetails
     *
     * Description: The details of the Card Holder's Name.
     *
     * @param \Recranet\OTA\Type\PersonNameType $cardHolderNameDetails
     * @return self
     */
    public function setCardHolderNameDetails(?\Recranet\OTA\Type\PersonNameType $cardHolderNameDetails = null)
    {
        $this->cardHolderNameDetails = $cardHolderNameDetails;
        return $this;
    }

    /**
     * Gets as address
     *
     * Card holder address.
     *
     * @return \Recranet\OTA\Type\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Card holder address.
     *
     * @param \Recranet\OTA\Type\AddressType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\Type\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Card holder telephone number.
     *
     * @return self
     * @param \Recranet\OTA\Type\PaymentCardType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\Type\PaymentCardType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Card holder telephone number.
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
     * Card holder telephone number.
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
     * Card holder telephone number.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Card holder telephone number.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\TelephoneAType[] $telephone
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
     * Card holder email.
     *
     * @return self
     * @param \Recranet\OTA\Type\EmailType $email
     */
    public function addToEmail(\Recranet\OTA\Type\EmailType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Card holder email.
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
     * Card holder email.
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
     * Card holder email.
     *
     * @return \Recranet\OTA\Type\EmailType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Card holder email.
     *
     * @param \Recranet\OTA\Type\EmailType[] $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as cardNumber
     *
     * Credit card number embossed on the card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @return \Recranet\OTA\Type\EncryptionTokenType
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Sets a new cardNumber
     *
     * Credit card number embossed on the card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @param \Recranet\OTA\Type\EncryptionTokenType $cardNumber
     * @return self
     */
    public function setCardNumber(?\Recranet\OTA\Type\EncryptionTokenType $cardNumber = null)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * Gets as seriesCode
     *
     * Verification digits.
     * Note: This is the verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @return \Recranet\OTA\Type\EncryptionTokenType
     */
    public function getSeriesCode()
    {
        return $this->seriesCode;
    }

    /**
     * Sets a new seriesCode
     *
     * Verification digits.
     * Note: This is the verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     * OpenTravel Best Practice: Payment Instruction Tokens-Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2,CVC, etc.) in other attributes or elements.
     *
     * @param \Recranet\OTA\Type\EncryptionTokenType $seriesCode
     * @return self
     */
    public function setSeriesCode(?\Recranet\OTA\Type\EncryptionTokenType $seriesCode = null)
    {
        $this->seriesCode = $seriesCode;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Card holder loyalty program.
     *
     * @return self
     * @param \Recranet\OTA\Type\PaymentCardType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Recranet\OTA\Type\PaymentCardType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Card holder loyalty program.
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
     * Card holder loyalty program.
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
     * Card holder loyalty program.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Card holder loyalty program.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty = null)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Adds as magneticStripe
     *
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\EncryptionTokenType $magneticStripe
     */
    public function addToMagneticStripe(\Recranet\OTA\Type\EncryptionTokenType $magneticStripe)
    {
        $this->magneticStripe[] = $magneticStripe;
        return $this;
    }

    /**
     * isset magneticStripe
     *
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMagneticStripe($index)
    {
        return isset($this->magneticStripe[$index]);
    }

    /**
     * unset magneticStripe
     *
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMagneticStripe($index)
    {
        unset($this->magneticStripe[$index]);
    }

    /**
     * Gets as magneticStripe
     *
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @return \Recranet\OTA\Type\EncryptionTokenType[]
     */
    public function getMagneticStripe()
    {
        return $this->magneticStripe;
    }

    /**
     * Sets a new magneticStripe
     *
     * Magnetic stripe.
     * OpenTravel Best Practice: Credit Card Payment Instruction Tokens: Any elements containing a token value MUST NOT and WILL NOT contain unmasked card account numbers, magnetic stripe data, or card security codes (CVV2, CVC, etc.) in other attributes or elements.
     *
     * @param \Recranet\OTA\Type\EncryptionTokenType[] $magneticStripe
     * @return self
     */
    public function setMagneticStripe(array $magneticStripe = null)
    {
        $this->magneticStripe = $magneticStripe;
        return $this;
    }

    /**
     * Gets as threeDomainSecurity
     *
     * 3-D secure financial authorization information.
     * Note: This contains 3-D Secure protocol information for online credit and debit card transactions for programs such as Verified by Visa, MasterCard SecureCode, J/Secure and SafeKey.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType
     */
    public function getThreeDomainSecurity()
    {
        return $this->threeDomainSecurity;
    }

    /**
     * Sets a new threeDomainSecurity
     *
     * 3-D secure financial authorization information.
     * Note: This contains 3-D Secure protocol information for online credit and debit card transactions for programs such as Verified by Visa, MasterCard SecureCode, J/Secure and SafeKey.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType $threeDomainSecurity
     * @return self
     */
    public function setThreeDomainSecurity(?\Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType $threeDomainSecurity = null)
    {
        $this->threeDomainSecurity = $threeDomainSecurity;
        return $this;
    }

    /**
     * Gets as signatureOnFile
     *
     * Signature on file.
     * Note: This indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\SignatureOnFileAType
     */
    public function getSignatureOnFile()
    {
        return $this->signatureOnFile;
    }

    /**
     * Sets a new signatureOnFile
     *
     * Signature on file.
     * Note: This indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\SignatureOnFileAType $signatureOnFile
     * @return self
     */
    public function setSignatureOnFile(?\Recranet\OTA\Type\PaymentCardType\SignatureOnFileAType $signatureOnFile = null)
    {
        $this->signatureOnFile = $signatureOnFile;
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

