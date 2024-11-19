<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing BestAvailableRateCandidateAType
 */
class BestAvailableRateCandidateAType
{
    /**
     * Boolean Flag indicating if length of stays are requested. Not including this attribute or setting it to false impies there will be one best available rate sent for all lengths of stay.
     *
     * @var bool $sendLengthOfStayTime
     */
    private $sendLengthOfStayTime = null;

    /**
     * Boolean flag indicating the best available rate should be sent as a rate plan code.
     *
     * @var bool $sendRatePlanCode
     */
    private $sendRatePlanCode = null;

    /**
     * Boolean flag indicating the best available rate should be sent as a rate amount. If this attrinbute is true, the currency code attributes may be included to ensure the responder currency matches the sender currency.
     *
     * @var bool $sendAmount
     */
    private $sendAmount = null;

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
     * Gets as sendLengthOfStayTime
     *
     * Boolean Flag indicating if length of stays are requested. Not including this attribute or setting it to false impies there will be one best available rate sent for all lengths of stay.
     *
     * @return bool
     */
    public function getSendLengthOfStayTime()
    {
        return $this->sendLengthOfStayTime;
    }

    /**
     * Sets a new sendLengthOfStayTime
     *
     * Boolean Flag indicating if length of stays are requested. Not including this attribute or setting it to false impies there will be one best available rate sent for all lengths of stay.
     *
     * @param bool $sendLengthOfStayTime
     * @return self
     */
    public function setSendLengthOfStayTime($sendLengthOfStayTime)
    {
        $this->sendLengthOfStayTime = $sendLengthOfStayTime;
        return $this;
    }

    /**
     * Gets as sendRatePlanCode
     *
     * Boolean flag indicating the best available rate should be sent as a rate plan code.
     *
     * @return bool
     */
    public function getSendRatePlanCode()
    {
        return $this->sendRatePlanCode;
    }

    /**
     * Sets a new sendRatePlanCode
     *
     * Boolean flag indicating the best available rate should be sent as a rate plan code.
     *
     * @param bool $sendRatePlanCode
     * @return self
     */
    public function setSendRatePlanCode($sendRatePlanCode)
    {
        $this->sendRatePlanCode = $sendRatePlanCode;
        return $this;
    }

    /**
     * Gets as sendAmount
     *
     * Boolean flag indicating the best available rate should be sent as a rate amount. If this attrinbute is true, the currency code attributes may be included to ensure the responder currency matches the sender currency.
     *
     * @return bool
     */
    public function getSendAmount()
    {
        return $this->sendAmount;
    }

    /**
     * Sets a new sendAmount
     *
     * Boolean flag indicating the best available rate should be sent as a rate amount. If this attrinbute is true, the currency code attributes may be included to ensure the responder currency matches the sender currency.
     *
     * @param bool $sendAmount
     * @return self
     */
    public function setSendAmount($sendAmount)
    {
        $this->sendAmount = $sendAmount;
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
}

