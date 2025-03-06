<?php

namespace Recranet\OTA\Type;

/**
 * Class representing WeatherInfoType
 *
 * Provides detailed information regarding weather.
 * XSD Type: WeatherInfoType
 */
class WeatherInfoType
{
    /**
     * This may be used to define a time period for which a certain type of weather occurs (e.g. January or Spring).
     *
     * @var string $period
     */
    private $period = null;

    /**
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @var \Recranet\OTA\Type\WeatherInfoType\PrecipitationAType[] $precipitation
     */
    private $precipitation = [
        
    ];

    /**
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @var \Recranet\OTA\Type\WeatherInfoType\TemperatureAType[] $temperature
     */
    private $temperature = [
        
    ];

    /**
     * Gets as period
     *
     * This may be used to define a time period for which a certain type of weather occurs (e.g. January or Spring).
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * This may be used to define a time period for which a certain type of weather occurs (e.g. January or Spring).
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as precipitation
     *
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @return self
     * @param \Recranet\OTA\Type\WeatherInfoType\PrecipitationAType $precipitation
     */
    public function addToPrecipitation(\Recranet\OTA\Type\WeatherInfoType\PrecipitationAType $precipitation)
    {
        $this->precipitation[] = $precipitation;
        return $this;
    }

    /**
     * isset precipitation
     *
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrecipitation($index)
    {
        return isset($this->precipitation[$index]);
    }

    /**
     * unset precipitation
     *
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrecipitation($index)
    {
        unset($this->precipitation[$index]);
    }

    /**
     * Gets as precipitation
     *
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @return \Recranet\OTA\Type\WeatherInfoType\PrecipitationAType[]
     */
    public function getPrecipitation()
    {
        return $this->precipitation;
    }

    /**
     * Sets a new precipitation
     *
     * Provides average precipitation and the unit in which it is measured for a Period.
     *
     * @param \Recranet\OTA\Type\WeatherInfoType\PrecipitationAType[] $precipitation
     * @return self
     */
    public function setPrecipitation(array $precipitation = null)
    {
        $this->precipitation = $precipitation;
        return $this;
    }

    /**
     * Adds as temperature
     *
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @return self
     * @param \Recranet\OTA\Type\WeatherInfoType\TemperatureAType $temperature
     */
    public function addToTemperature(\Recranet\OTA\Type\WeatherInfoType\TemperatureAType $temperature)
    {
        $this->temperature[] = $temperature;
        return $this;
    }

    /**
     * isset temperature
     *
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemperature($index)
    {
        return isset($this->temperature[$index]);
    }

    /**
     * unset temperature
     *
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemperature($index)
    {
        unset($this->temperature[$index]);
    }

    /**
     * Gets as temperature
     *
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @return \Recranet\OTA\Type\WeatherInfoType\TemperatureAType[]
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * Provides average temperatures and the unit in which they are measured for a Period.
     *
     * @param \Recranet\OTA\Type\WeatherInfoType\TemperatureAType[] $temperature
     * @return self
     */
    public function setTemperature(array $temperature = null)
    {
        $this->temperature = $temperature;
        return $this;
    }
}

