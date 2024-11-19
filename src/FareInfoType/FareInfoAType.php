<?php

namespace Recranet\OTA\FareInfoType;

/**
 * Class representing FareInfoAType
 */
class FareInfoAType
{
    /**
     * The fare basis code for the fare for this rule.
     *
     * @var string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * The global direction for this fare rule.
     *
     * @var string $globalIndicatorCode
     */
    private $globalIndicatorCode = null;

    /**
     * The maximum mileage (in miles) that can be travelled under this fare.
     *
     * @var int $maximumPermittedMileage
     */
    private $maximumPermittedMileage = null;

    /**
     * Tthe type of trip associated with the rule.
     *
     * @var string $tripType
     */
    private $tripType = null;

    /**
     * Specifies the fare type for this fare.
     *
     * @var string $fareType
     */
    private $fareType = null;

    /**
     * Identifies whether the fare was constructed, published, created, etc.
     *
     * @var string $fareStatus
     */
    private $fareStatus = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Provides a reference to a specific FareInfo item between an air modification request and the existing air reservation.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Date information applicable to the fare.
     *
     * @var \Recranet\OTA\FareInfoType\FareInfoAType\DateAType[] $date
     */
    private $date = [
        
    ];

    /**
     * The base and total fare and tax amounts associated with the rule.
     *
     * @var \Recranet\OTA\FareInfoType\FareInfoAType\FareAType $fare
     */
    private $fare = null;

    /**
     * The passenger types for which the fare is applicable.
     *
     * @var \Recranet\OTA\FareInfoType\FareInfoAType\PTCAType[] $pTC
     */
    private $pTC = [
        
    ];

    /**
     * Gets as fareBasisCode
     *
     * The fare basis code for the fare for this rule.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * The fare basis code for the fare for this rule.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;
        return $this;
    }

    /**
     * Gets as globalIndicatorCode
     *
     * The global direction for this fare rule.
     *
     * @return string
     */
    public function getGlobalIndicatorCode()
    {
        return $this->globalIndicatorCode;
    }

    /**
     * Sets a new globalIndicatorCode
     *
     * The global direction for this fare rule.
     *
     * @param string $globalIndicatorCode
     * @return self
     */
    public function setGlobalIndicatorCode($globalIndicatorCode)
    {
        $this->globalIndicatorCode = $globalIndicatorCode;
        return $this;
    }

    /**
     * Gets as maximumPermittedMileage
     *
     * The maximum mileage (in miles) that can be travelled under this fare.
     *
     * @return int
     */
    public function getMaximumPermittedMileage()
    {
        return $this->maximumPermittedMileage;
    }

    /**
     * Sets a new maximumPermittedMileage
     *
     * The maximum mileage (in miles) that can be travelled under this fare.
     *
     * @param int $maximumPermittedMileage
     * @return self
     */
    public function setMaximumPermittedMileage($maximumPermittedMileage)
    {
        $this->maximumPermittedMileage = $maximumPermittedMileage;
        return $this;
    }

    /**
     * Gets as tripType
     *
     * Tthe type of trip associated with the rule.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Tthe type of trip associated with the rule.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;
        return $this;
    }

    /**
     * Gets as fareType
     *
     * Specifies the fare type for this fare.
     *
     * @return string
     */
    public function getFareType()
    {
        return $this->fareType;
    }

    /**
     * Sets a new fareType
     *
     * Specifies the fare type for this fare.
     *
     * @param string $fareType
     * @return self
     */
    public function setFareType($fareType)
    {
        $this->fareType = $fareType;
        return $this;
    }

    /**
     * Gets as fareStatus
     *
     * Identifies whether the fare was constructed, published, created, etc.
     *
     * @return string
     */
    public function getFareStatus()
    {
        return $this->fareStatus;
    }

    /**
     * Sets a new fareStatus
     *
     * Identifies whether the fare was constructed, published, created, etc.
     *
     * @param string $fareStatus
     * @return self
     */
    public function setFareStatus($fareStatus)
    {
        $this->fareStatus = $fareStatus;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a reference to a specific FareInfo item between an air modification request and the existing air reservation.
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
     * Provides a reference to a specific FareInfo item between an air modification request and the existing air reservation.
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
     * Adds as date
     *
     * Date information applicable to the fare.
     *
     * @return self
     * @param \Recranet\OTA\FareInfoType\FareInfoAType\DateAType $date
     */
    public function addToDate(\Recranet\OTA\FareInfoType\FareInfoAType\DateAType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * Date information applicable to the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date information applicable to the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date information applicable to the fare.
     *
     * @return \Recranet\OTA\FareInfoType\FareInfoAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date information applicable to the fare.
     *
     * @param \Recranet\OTA\FareInfoType\FareInfoAType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as fare
     *
     * The base and total fare and tax amounts associated with the rule.
     *
     * @return \Recranet\OTA\FareInfoType\FareInfoAType\FareAType
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * Sets a new fare
     *
     * The base and total fare and tax amounts associated with the rule.
     *
     * @param \Recranet\OTA\FareInfoType\FareInfoAType\FareAType $fare
     * @return self
     */
    public function setFare(?\Recranet\OTA\FareInfoType\FareInfoAType\FareAType $fare = null)
    {
        $this->fare = $fare;
        return $this;
    }

    /**
     * Adds as pTC
     *
     * The passenger types for which the fare is applicable.
     *
     * @return self
     * @param \Recranet\OTA\FareInfoType\FareInfoAType\PTCAType $pTC
     */
    public function addToPTC(\Recranet\OTA\FareInfoType\FareInfoAType\PTCAType $pTC)
    {
        $this->pTC[] = $pTC;
        return $this;
    }

    /**
     * isset pTC
     *
     * The passenger types for which the fare is applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPTC($index)
    {
        return isset($this->pTC[$index]);
    }

    /**
     * unset pTC
     *
     * The passenger types for which the fare is applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPTC($index)
    {
        unset($this->pTC[$index]);
    }

    /**
     * Gets as pTC
     *
     * The passenger types for which the fare is applicable.
     *
     * @return \Recranet\OTA\FareInfoType\FareInfoAType\PTCAType[]
     */
    public function getPTC()
    {
        return $this->pTC;
    }

    /**
     * Sets a new pTC
     *
     * The passenger types for which the fare is applicable.
     *
     * @param \Recranet\OTA\FareInfoType\FareInfoAType\PTCAType[] $pTC
     * @return self
     */
    public function setPTC(array $pTC = null)
    {
        $this->pTC = $pTC;
        return $this;
    }
}

