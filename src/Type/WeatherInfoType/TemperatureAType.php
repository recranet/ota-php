<?php

namespace Recranet\OTA\Type\WeatherInfoType;

/**
 * Class representing TemperatureAType
 */
class TemperatureAType
{
    /**
     * Defines the average high tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @var int $averageHighTemp
     */
    private $averageHighTemp = null;

    /**
     * Defines the average low tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @var int $averageLowTemp
     */
    private $averageLowTemp = null;

    /**
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined (i.e. Celsius or Fahrenheit).
     *
     * @var string $tempUnit
     */
    private $tempUnit = null;

    /**
     * Gets as averageHighTemp
     *
     * Defines the average high tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @return int
     */
    public function getAverageHighTemp()
    {
        return $this->averageHighTemp;
    }

    /**
     * Sets a new averageHighTemp
     *
     * Defines the average high tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @param int $averageHighTemp
     * @return self
     */
    public function setAverageHighTemp($averageHighTemp)
    {
        $this->averageHighTemp = $averageHighTemp;
        return $this;
    }

    /**
     * Gets as averageLowTemp
     *
     * Defines the average low tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @return int
     */
    public function getAverageLowTemp()
    {
        return $this->averageLowTemp;
    }

    /**
     * Sets a new averageLowTemp
     *
     * Defines the average low tempature for the time as designated in Period and is qualified by the TempUnit.
     *
     * @param int $averageLowTemp
     * @return self
     */
    public function setAverageLowTemp($averageLowTemp)
    {
        $this->averageLowTemp = $averageLowTemp;
        return $this;
    }

    /**
     * Gets as tempUnit
     *
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined (i.e. Celsius or Fahrenheit).
     *
     * @return string
     */
    public function getTempUnit()
    {
        return $this->tempUnit;
    }

    /**
     * Sets a new tempUnit
     *
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined (i.e. Celsius or Fahrenheit).
     *
     * @param string $tempUnit
     * @return self
     */
    public function setTempUnit($tempUnit)
    {
        $this->tempUnit = $tempUnit;
        return $this;
    }
}

