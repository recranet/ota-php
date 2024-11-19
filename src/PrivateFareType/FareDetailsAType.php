<?php

namespace Recranet\OTA\PrivateFareType;

/**
 * Class representing FareDetailsAType
 */
class FareDetailsAType
{
    /**
     * Fare basis code.
     * Example: HL7LNR
     *
     * @var string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Fare description.
     * Example: ORLLAS-AA
     *
     * @var string $fareDescription
     */
    private $fareDescription = null;

    /**
     * Fare type.
     * Example: NLX
     *
     * @var string $fareType
     */
    private $fareType = null;

    /**
     * Description: Maximum miles.
     * Example: 2317
     * Note: This is the maximum mileage (in miles) that can be travelled under this fare.
     *
     * @var int $maxPermittedMileage
     */
    private $maxPermittedMileage = null;

    /**
     * Fare reference.
     * Example: 1
     * Note: This is a reference to a specific FareInfo item between an air modification request and the existing air reservation.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Fare rule global direction.
     * Example: AP
     *
     * @var \Recranet\OTA\ListGlobalIndicatorType $globalIndicatorCode
     */
    private $globalIndicatorCode = null;

    /**
     * Required modification type.
     * Example: Create/Add
     *
     * @var \Recranet\OTA\ListDataActionType $operation
     */
    private $operation = null;

    /**
     * Fare status.
     * Example: Published
     *
     * @var \Recranet\OTA\ListFareStatusType $fareStatus
     */
    private $fareStatus = null;

    /**
     * Trip type.
     * Example: OneWay
     *
     * @var \Recranet\OTA\ListAirTripType $tripType
     */
    private $tripType = null;

    /**
     * Date information applicable to the fare.
     *
     * @var \Recranet\OTA\PrivateFareType\FareDetailsAType\DateAType[] $date
     */
    private $date = [
        
    ];

    /**
     * Fare amounts.
     *
     * @var \Recranet\OTA\PrivateFareType\FareDetailsAType\FareAType $fare
     */
    private $fare = null;

    /**
     * Passenger type codes.
     *
     * @var \Recranet\OTA\PrivateFareType\FareDetailsAType\PassengerTypeAType[] $passengerType
     */
    private $passengerType = [
        
    ];

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code.
     * Example: HL7LNR
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
     * Fare basis code.
     * Example: HL7LNR
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
     * Gets as fareDescription
     *
     * Fare description.
     * Example: ORLLAS-AA
     *
     * @return string
     */
    public function getFareDescription()
    {
        return $this->fareDescription;
    }

    /**
     * Sets a new fareDescription
     *
     * Fare description.
     * Example: ORLLAS-AA
     *
     * @param string $fareDescription
     * @return self
     */
    public function setFareDescription($fareDescription)
    {
        $this->fareDescription = $fareDescription;
        return $this;
    }

    /**
     * Gets as fareType
     *
     * Fare type.
     * Example: NLX
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
     * Fare type.
     * Example: NLX
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
     * Gets as maxPermittedMileage
     *
     * Description: Maximum miles.
     * Example: 2317
     * Note: This is the maximum mileage (in miles) that can be travelled under this fare.
     *
     * @return int
     */
    public function getMaxPermittedMileage()
    {
        return $this->maxPermittedMileage;
    }

    /**
     * Sets a new maxPermittedMileage
     *
     * Description: Maximum miles.
     * Example: 2317
     * Note: This is the maximum mileage (in miles) that can be travelled under this fare.
     *
     * @param int $maxPermittedMileage
     * @return self
     */
    public function setMaxPermittedMileage($maxPermittedMileage)
    {
        $this->maxPermittedMileage = $maxPermittedMileage;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Fare reference.
     * Example: 1
     * Note: This is a reference to a specific FareInfo item between an air modification request and the existing air reservation.
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
     * Fare reference.
     * Example: 1
     * Note: This is a reference to a specific FareInfo item between an air modification request and the existing air reservation.
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
     * Gets as globalIndicatorCode
     *
     * Fare rule global direction.
     * Example: AP
     *
     * @return \Recranet\OTA\ListGlobalIndicatorType
     */
    public function getGlobalIndicatorCode()
    {
        return $this->globalIndicatorCode;
    }

    /**
     * Sets a new globalIndicatorCode
     *
     * Fare rule global direction.
     * Example: AP
     *
     * @param \Recranet\OTA\ListGlobalIndicatorType $globalIndicatorCode
     * @return self
     */
    public function setGlobalIndicatorCode(?\Recranet\OTA\ListGlobalIndicatorType $globalIndicatorCode = null)
    {
        $this->globalIndicatorCode = $globalIndicatorCode;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Required modification type.
     * Example: Create/Add
     *
     * @return \Recranet\OTA\ListDataActionType
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Required modification type.
     * Example: Create/Add
     *
     * @param \Recranet\OTA\ListDataActionType $operation
     * @return self
     */
    public function setOperation(?\Recranet\OTA\ListDataActionType $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as fareStatus
     *
     * Fare status.
     * Example: Published
     *
     * @return \Recranet\OTA\ListFareStatusType
     */
    public function getFareStatus()
    {
        return $this->fareStatus;
    }

    /**
     * Sets a new fareStatus
     *
     * Fare status.
     * Example: Published
     *
     * @param \Recranet\OTA\ListFareStatusType $fareStatus
     * @return self
     */
    public function setFareStatus(?\Recranet\OTA\ListFareStatusType $fareStatus = null)
    {
        $this->fareStatus = $fareStatus;
        return $this;
    }

    /**
     * Gets as tripType
     *
     * Trip type.
     * Example: OneWay
     *
     * @return \Recranet\OTA\ListAirTripType
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Trip type.
     * Example: OneWay
     *
     * @param \Recranet\OTA\ListAirTripType $tripType
     * @return self
     */
    public function setTripType(?\Recranet\OTA\ListAirTripType $tripType = null)
    {
        $this->tripType = $tripType;
        return $this;
    }

    /**
     * Adds as date
     *
     * Date information applicable to the fare.
     *
     * @return self
     * @param \Recranet\OTA\PrivateFareType\FareDetailsAType\DateAType $date
     */
    public function addToDate(\Recranet\OTA\PrivateFareType\FareDetailsAType\DateAType $date)
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
     * @return \Recranet\OTA\PrivateFareType\FareDetailsAType\DateAType[]
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
     * @param \Recranet\OTA\PrivateFareType\FareDetailsAType\DateAType[] $date
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
     * Fare amounts.
     *
     * @return \Recranet\OTA\PrivateFareType\FareDetailsAType\FareAType
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * Sets a new fare
     *
     * Fare amounts.
     *
     * @param \Recranet\OTA\PrivateFareType\FareDetailsAType\FareAType $fare
     * @return self
     */
    public function setFare(?\Recranet\OTA\PrivateFareType\FareDetailsAType\FareAType $fare = null)
    {
        $this->fare = $fare;
        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Passenger type codes.
     *
     * @return self
     * @param \Recranet\OTA\PrivateFareType\FareDetailsAType\PassengerTypeAType $passengerType
     */
    public function addToPassengerType(\Recranet\OTA\PrivateFareType\FareDetailsAType\PassengerTypeAType $passengerType)
    {
        $this->passengerType[] = $passengerType;
        return $this;
    }

    /**
     * isset passengerType
     *
     * Passenger type codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Passenger type codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Passenger type codes.
     *
     * @return \Recranet\OTA\PrivateFareType\FareDetailsAType\PassengerTypeAType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Passenger type codes.
     *
     * @param \Recranet\OTA\PrivateFareType\FareDetailsAType\PassengerTypeAType[] $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType = null)
    {
        $this->passengerType = $passengerType;
        return $this;
    }
}

