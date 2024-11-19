<?php

namespace Recranet\OTA\VehicleLocationVehiclesType;

use Recranet\OTA\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{
    /**
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @var bool $isConfirmableInd
     */
    private $isConfirmableInd = null;

    /**
     * To specify whether mileage information is miles or kilometers.
     *
     * @var string $distanceUnit
     */
    private $distanceUnit = null;

    /**
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @var int $distancePerFuelUnit
     */
    private $distancePerFuelUnit = null;

    /**
     * Free text information for this vehicle type.
     *
     * @var \Recranet\OTA\FormattedTextType[] $text
     */
    private $text = [
        
    ];

    /**
     * Gets as isConfirmableInd
     *
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @return bool
     */
    public function getIsConfirmableInd()
    {
        return $this->isConfirmableInd;
    }

    /**
     * Sets a new isConfirmableInd
     *
     * If true, this car type may be confirmed. If false, it may not be confirmed.
     *
     * @param bool $isConfirmableInd
     * @return self
     */
    public function setIsConfirmableInd($isConfirmableInd)
    {
        $this->isConfirmableInd = $isConfirmableInd;
        return $this;
    }

    /**
     * Gets as distanceUnit
     *
     * To specify whether mileage information is miles or kilometers.
     *
     * @return string
     */
    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    /**
     * Sets a new distanceUnit
     *
     * To specify whether mileage information is miles or kilometers.
     *
     * @param string $distanceUnit
     * @return self
     */
    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;
        return $this;
    }

    /**
     * Gets as distancePerFuelUnit
     *
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @return int
     */
    public function getDistancePerFuelUnit()
    {
        return $this->distancePerFuelUnit;
    }

    /**
     * Sets a new distancePerFuelUnit
     *
     * To specify the number of miles/kilometers per gallon/litre of gas.
     *
     * @param int $distancePerFuelUnit
     * @return self
     */
    public function setDistancePerFuelUnit($distancePerFuelUnit)
    {
        $this->distancePerFuelUnit = $distancePerFuelUnit;
        return $this;
    }

    /**
     * Adds as text
     *
     * Free text information for this vehicle type.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextType $text
     */
    public function addToText(\Recranet\OTA\FormattedTextType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * Free text information for this vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * Free text information for this vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * Free text information for this vehicle type.
     *
     * @return \Recranet\OTA\FormattedTextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Free text information for this vehicle type.
     *
     * @param \Recranet\OTA\FormattedTextType[] $text
     * @return self
     */
    public function setText(array $text = null)
    {
        $this->text = $text;
        return $this;
    }
}

