<?php

namespace Recranet\OTA\PTCFareBreakdownType\PricingUnitAType;

/**
 * Class representing FareComponentAType
 */
class FareComponentAType
{
    /**
     * The fare component number.
     *
     * @var int $number
     */
    private $number = null;

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
     * The flight leg information for the fare component.
     *
     * @var \Recranet\OTA\PTCFareBreakdownType\PricingUnitAType\FareComponentAType\FlightLegAType[] $flightLeg
     */
    private $flightLeg = [
        
    ];

    /**
     * Gets as number
     *
     * The fare component number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The fare component number.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
     * Adds as flightLeg
     *
     * The flight leg information for the fare component.
     *
     * @return self
     * @param \Recranet\OTA\PTCFareBreakdownType\PricingUnitAType\FareComponentAType\FlightLegAType $flightLeg
     */
    public function addToFlightLeg(\Recranet\OTA\PTCFareBreakdownType\PricingUnitAType\FareComponentAType\FlightLegAType $flightLeg)
    {
        $this->flightLeg[] = $flightLeg;
        return $this;
    }

    /**
     * isset flightLeg
     *
     * The flight leg information for the fare component.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightLeg($index)
    {
        return isset($this->flightLeg[$index]);
    }

    /**
     * unset flightLeg
     *
     * The flight leg information for the fare component.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightLeg($index)
    {
        unset($this->flightLeg[$index]);
    }

    /**
     * Gets as flightLeg
     *
     * The flight leg information for the fare component.
     *
     * @return \Recranet\OTA\PTCFareBreakdownType\PricingUnitAType\FareComponentAType\FlightLegAType[]
     */
    public function getFlightLeg()
    {
        return $this->flightLeg;
    }

    /**
     * Sets a new flightLeg
     *
     * The flight leg information for the fare component.
     *
     * @param \Recranet\OTA\PTCFareBreakdownType\PricingUnitAType\FareComponentAType\FlightLegAType[] $flightLeg
     * @return self
     */
    public function setFlightLeg(array $flightLeg)
    {
        $this->flightLeg = $flightLeg;
        return $this;
    }
}

