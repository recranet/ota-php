<?php

namespace Recranet\OTA;

/**
 * Class representing BankAcctType
 *
 * Customer bank account definition.
 * XSD Type: BankAcctType
 */
class BankAcctType
{
    /**
     * Checks accepted indicator.
     * Example: true
     * Implementer: If true, checks are accepted.
     *
     * @var bool $checksAcceptedInd
     */
    private $checksAcceptedInd = null;

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
     * Check number.
     * Example: 999
     *
     * @var string $checkNumber
     */
    private $checkNumber = null;

    /**
     * Account holder name.
     * Example: Joseph L Smith
     *
     * @var string $bankAcctName
     */
    private $bankAcctName = null;

    /**
     * Account number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @var \Recranet\OTA\EncryptionTokenType $bankAcctNumber
     */
    private $bankAcctNumber = null;

    /**
     * Bank ID or routing number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @var \Recranet\OTA\EncryptionTokenType $bankID
     */
    private $bankID = null;

    /**
     * Bank account type.
     * Example: Checking
     *
     * @var \Recranet\OTA\ListBankAccountType $type
     */
    private $type = null;

    /**
     * Gets as checksAcceptedInd
     *
     * Checks accepted indicator.
     * Example: true
     * Implementer: If true, checks are accepted.
     *
     * @return bool
     */
    public function getChecksAcceptedInd()
    {
        return $this->checksAcceptedInd;
    }

    /**
     * Sets a new checksAcceptedInd
     *
     * Checks accepted indicator.
     * Example: true
     * Implementer: If true, checks are accepted.
     *
     * @param bool $checksAcceptedInd
     * @return self
     */
    public function setChecksAcceptedInd($checksAcceptedInd)
    {
        $this->checksAcceptedInd = $checksAcceptedInd;
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
     * Gets as checkNumber
     *
     * Check number.
     * Example: 999
     *
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Sets a new checkNumber
     *
     * Check number.
     * Example: 999
     *
     * @param string $checkNumber
     * @return self
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    /**
     * Gets as bankAcctName
     *
     * Account holder name.
     * Example: Joseph L Smith
     *
     * @return string
     */
    public function getBankAcctName()
    {
        return $this->bankAcctName;
    }

    /**
     * Sets a new bankAcctName
     *
     * Account holder name.
     * Example: Joseph L Smith
     *
     * @param string $bankAcctName
     * @return self
     */
    public function setBankAcctName($bankAcctName)
    {
        $this->bankAcctName = $bankAcctName;
        return $this;
    }

    /**
     * Gets as bankAcctNumber
     *
     * Account number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @return \Recranet\OTA\EncryptionTokenType
     */
    public function getBankAcctNumber()
    {
        return $this->bankAcctNumber;
    }

    /**
     * Sets a new bankAcctNumber
     *
     * Account number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @param \Recranet\OTA\EncryptionTokenType $bankAcctNumber
     * @return self
     */
    public function setBankAcctNumber(?\Recranet\OTA\EncryptionTokenType $bankAcctNumber = null)
    {
        $this->bankAcctNumber = $bankAcctNumber;
        return $this;
    }

    /**
     * Gets as bankID
     *
     * Bank ID or routing number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @return \Recranet\OTA\EncryptionTokenType
     */
    public function getBankID()
    {
        return $this->bankID;
    }

    /**
     * Sets a new bankID
     *
     * Bank ID or routing number.
     * OpenTravel Best Practice: Bank Account Payment Instruction Tokens: Some OpenTravel schema may contain combinations of elements and attributes that have bank account number and other personally identifying information within the schema, such as customer name and date of birth. For enhanced customer privacy and security, it is RECOMMENDED that the bank account number and ID be encrypted, using tokenization or some other method.
     *
     * @param \Recranet\OTA\EncryptionTokenType $bankID
     * @return self
     */
    public function setBankID(?\Recranet\OTA\EncryptionTokenType $bankID = null)
    {
        $this->bankID = $bankID;
        return $this;
    }

    /**
     * Gets as type
     *
     * Bank account type.
     * Example: Checking
     *
     * @return \Recranet\OTA\ListBankAccountType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Bank account type.
     * Example: Checking
     *
     * @param \Recranet\OTA\ListBankAccountType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\ListBankAccountType $type = null)
    {
        $this->type = $type;
        return $this;
    }
}

