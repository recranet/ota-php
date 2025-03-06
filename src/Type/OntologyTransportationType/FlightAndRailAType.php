<?php

namespace Recranet\OTA\Type\OntologyTransportationType;

/**
 * Class representing FlightAndRailAType
 */
class FlightAndRailAType
{
    /**
     * Flight number.
     * Example: 1437
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\NumberAType $number
     */
    private $number = null;

    /**
     * Flight carrier name or code.
     * Example: United
     *
     * @var \Recranet\OTA\Type\OntologyCodeType $carrier
     */
    private $carrier = null;

    /**
     * Fare class.
     * Example: First
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\ClassAType $class
     */
    private $class = null;

    /**
     * Fare code.
     * Example: 1437
     *
     * @var \Recranet\OTA\Type\OntologyCodeType $fareCode
     */
    private $fareCode = null;

    /**
     * Gets as number
     *
     * Flight number.
     * Example: 1437
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\NumberAType
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
     * @param \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\NumberAType $number
     * @return self
     */
    public function setNumber(?\Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\NumberAType $number = null)
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
     * @return \Recranet\OTA\Type\OntologyCodeType
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
     * @param \Recranet\OTA\Type\OntologyCodeType $carrier
     * @return self
     */
    public function setCarrier(?\Recranet\OTA\Type\OntologyCodeType $carrier = null)
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
     * @return \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\ClassAType
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
     * @param \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\ClassAType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType\ClassAType $class = null)
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
     * @return \Recranet\OTA\Type\OntologyCodeType
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
     * @param \Recranet\OTA\Type\OntologyCodeType $fareCode
     * @return self
     */
    public function setFareCode(?\Recranet\OTA\Type\OntologyCodeType $fareCode = null)
    {
        $this->fareCode = $fareCode;
        return $this;
    }
}

