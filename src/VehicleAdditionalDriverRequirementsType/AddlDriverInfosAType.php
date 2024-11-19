<?php

namespace Recranet\OTA\VehicleAdditionalDriverRequirementsType;

/**
 * Class representing AddlDriverInfosAType
 */
class AddlDriverInfosAType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

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
     * A monetary amount.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * To specify if the charge is per rental, day, etc. Refer to OpenTravel Charge Type code list (CHG).
     *
     * @var string $chargeType
     */
    private $chargeType = null;

    /**
     * Textual description about a specific restriction related to additional drivers.
     *
     * @var \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\AddlDriverInfoAType[] $addlDriverInfo
     */
    private $addlDriverInfo = [
        
    ];

    /**
     * A collection of vehicles associated with additional driver information.
     *
     * @var \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicles
     */
    private $vehicles = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
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
     * Gets as amount
     *
     * A monetary amount.
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
     * A monetary amount.
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
     * Gets as chargeType
     *
     * To specify if the charge is per rental, day, etc. Refer to OpenTravel Charge Type code list (CHG).
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * Sets a new chargeType
     *
     * To specify if the charge is per rental, day, etc. Refer to OpenTravel Charge Type code list (CHG).
     *
     * @param string $chargeType
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * Adds as addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\AddlDriverInfoAType $addlDriverInfo
     */
    public function addToAddlDriverInfo(\Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\AddlDriverInfoAType $addlDriverInfo)
    {
        $this->addlDriverInfo[] = $addlDriverInfo;
        return $this;
    }

    /**
     * isset addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddlDriverInfo($index)
    {
        return isset($this->addlDriverInfo[$index]);
    }

    /**
     * unset addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddlDriverInfo($index)
    {
        unset($this->addlDriverInfo[$index]);
    }

    /**
     * Gets as addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @return \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\AddlDriverInfoAType[]
     */
    public function getAddlDriverInfo()
    {
        return $this->addlDriverInfo;
    }

    /**
     * Sets a new addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\AddlDriverInfoAType[] $addlDriverInfo
     * @return self
     */
    public function setAddlDriverInfo(array $addlDriverInfo)
    {
        $this->addlDriverInfo = $addlDriverInfo;
        return $this;
    }

    /**
     * Adds as vehicle
     *
     * A collection of vehicles associated with additional driver information.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicles(\Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicles[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicles associated with additional driver information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicles associated with additional driver information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicles associated with additional driver information.
     *
     * @return \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicles associated with additional driver information.
     *
     * @param \Recranet\OTA\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles = null)
    {
        $this->vehicles = $vehicles;
        return $this;
    }
}

