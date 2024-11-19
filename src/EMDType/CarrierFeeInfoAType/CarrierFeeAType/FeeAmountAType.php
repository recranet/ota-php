<?php

namespace Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType;

/**
 * Class representing FeeAmountAType
 */
class FeeAmountAType
{
    /**
     * 1 to 3 alpha numeric carrier fee code.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The carrier fee amount.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @var string[] $applicationCode
     */
    private $applicationCode = null;

    /**
     * The origin airport city code.
     *
     * @var string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @var string $originCodeContext
     */
    private $originCodeContext = null;

    /**
     * The destination airport city code.
     *
     * @var string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @var string $destinationCodeContext
     */
    private $destinationCodeContext = null;

    /**
     * Gets as type
     *
     * 1 to 3 alpha numeric carrier fee code.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * 1 to 3 alpha numeric carrier fee code.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The carrier fee amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The carrier fee amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as applicationCode
     *
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @return self
     * @param string $applicationCode
     */
    public function addToApplicationCode($applicationCode)
    {
        $this->applicationCode[] = $applicationCode;
        return $this;
    }

    /**
     * isset applicationCode
     *
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicationCode($index)
    {
        return isset($this->applicationCode[$index]);
    }

    /**
     * unset applicationCode
     *
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicationCode($index)
    {
        unset($this->applicationCode[$index]);
    }

    /**
     * Gets as applicationCode
     *
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @return string[]
     */
    public function getApplicationCode()
    {
        return $this->applicationCode;
    }

    /**
     * Sets a new applicationCode
     *
     * To specify if not interlineable, not refundable, commissionable or not commissionable. Refer to OpenTravel Code List "EMD Application Code PADIS 9988".
     *
     * @param string $applicationCode
     * @return self
     */
    public function setApplicationCode(array $applicationCode)
    {
        $this->applicationCode = $applicationCode;
        return $this;
    }

    /**
     * Gets as originCityCode
     *
     * The origin airport city code.
     *
     * @return string
     */
    public function getOriginCityCode()
    {
        return $this->originCityCode;
    }

    /**
     * Sets a new originCityCode
     *
     * The origin airport city code.
     *
     * @param string $originCityCode
     * @return self
     */
    public function setOriginCityCode($originCityCode)
    {
        $this->originCityCode = $originCityCode;
        return $this;
    }

    /**
     * Gets as originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @return string
     */
    public function getOriginCodeContext()
    {
        return $this->originCodeContext;
    }

    /**
     * Sets a new originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @param string $originCodeContext
     * @return self
     */
    public function setOriginCodeContext($originCodeContext)
    {
        $this->originCodeContext = $originCodeContext;
        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * The destination airport city code.
     *
     * @return string
     */
    public function getDestinationCityCode()
    {
        return $this->destinationCityCode;
    }

    /**
     * Sets a new destinationCityCode
     *
     * The destination airport city code.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;
        return $this;
    }

    /**
     * Gets as destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @return string
     */
    public function getDestinationCodeContext()
    {
        return $this->destinationCodeContext;
    }

    /**
     * Sets a new destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @param string $destinationCodeContext
     * @return self
     */
    public function setDestinationCodeContext($destinationCodeContext)
    {
        $this->destinationCodeContext = $destinationCodeContext;
        return $this;
    }
}

