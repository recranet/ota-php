<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EquipmentType
 *
 * Specifies the aircraft equipment type.
 * XSD Type: EquipmentType
 */
class EquipmentType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * This is the 3 character IATA code.
     *
     * @var string $airEquipType
     */
    private $airEquipType = null;

    /**
     * Indicates there is an equipment change.
     *
     *  false
     *
     * @var bool $changeofGauge
     */
    private $changeofGauge = null;

    /**
     * The aircraft number assigned for the flight.
     *
     * @var string $aircraftTailNumber
     */
    private $aircraftTailNumber = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as airEquipType
     *
     * This is the 3 character IATA code.
     *
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->airEquipType;
    }

    /**
     * Sets a new airEquipType
     *
     * This is the 3 character IATA code.
     *
     * @param string $airEquipType
     * @return self
     */
    public function setAirEquipType($airEquipType)
    {
        $this->airEquipType = $airEquipType;
        return $this;
    }

    /**
     * Gets as changeofGauge
     *
     * Indicates there is an equipment change.
     *
     *  false
     *
     * @return bool
     */
    public function getChangeofGauge()
    {
        return $this->changeofGauge;
    }

    /**
     * Sets a new changeofGauge
     *
     * Indicates there is an equipment change.
     *
     *  false
     *
     * @param bool $changeofGauge
     * @return self
     */
    public function setChangeofGauge($changeofGauge)
    {
        $this->changeofGauge = $changeofGauge;
        return $this;
    }

    /**
     * Gets as aircraftTailNumber
     *
     * The aircraft number assigned for the flight.
     *
     * @return string
     */
    public function getAircraftTailNumber()
    {
        return $this->aircraftTailNumber;
    }

    /**
     * Sets a new aircraftTailNumber
     *
     * The aircraft number assigned for the flight.
     *
     * @param string $aircraftTailNumber
     * @return self
     */
    public function setAircraftTailNumber($aircraftTailNumber)
    {
        $this->aircraftTailNumber = $aircraftTailNumber;
        return $this;
    }
}

