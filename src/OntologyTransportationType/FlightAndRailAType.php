<?php

namespace Recranet\OTA\OntologyTransportationType;

/**
 * Class representing FlightAndRailAType
 */
class FlightAndRailAType
{
    /**
     * Flight number.
     * Example: 1437
     *
     * @var \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\NumberAType $number
     */
    private $number = null;

    /**
     * Flight carrier name or code.
     * Example: United
     *
     * @var \Recranet\OTA\OntologyCodeType $carrier
     */
    private $carrier = null;

    /**
     * Fare class.
     * Example: First
     *
     * @var \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\ClassAType $class
     */
    private $class = null;

    /**
     * Fare code.
     * Example: 1437
     *
     * @var \Recranet\OTA\OntologyCodeType $fareCode
     */
    private $fareCode = null;

    /**
     * Gets as number
     *
     * Flight number.
     * Example: 1437
     *
     * @return \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\NumberAType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Flight number.
     * Example: 1437
     *
     * @param \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\NumberAType $number
     * @return self
     */
    public function setNumber(?\Recranet\OTA\OntologyTransportationType\FlightAndRailAType\NumberAType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as carrier
     *
     * Flight carrier name or code.
     * Example: United
     *
     * @return \Recranet\OTA\OntologyCodeType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier
     *
     * Flight carrier name or code.
     * Example: United
     *
     * @param \Recranet\OTA\OntologyCodeType $carrier
     * @return self
     */
    public function setCarrier(?\Recranet\OTA\OntologyCodeType $carrier = null)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * Gets as class
     *
     * Fare class.
     * Example: First
     *
     * @return \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\ClassAType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Fare class.
     * Example: First
     *
     * @param \Recranet\OTA\OntologyTransportationType\FlightAndRailAType\ClassAType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\OntologyTransportationType\FlightAndRailAType\ClassAType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as fareCode
     *
     * Fare code.
     * Example: 1437
     *
     * @return \Recranet\OTA\OntologyCodeType
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Fare code.
     * Example: 1437
     *
     * @param \Recranet\OTA\OntologyCodeType $fareCode
     * @return self
     */
    public function setFareCode(?\Recranet\OTA\OntologyCodeType $fareCode = null)
    {
        $this->fareCode = $fareCode;
        return $this;
    }
}

