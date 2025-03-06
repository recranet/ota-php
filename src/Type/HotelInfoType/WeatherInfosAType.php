<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing WeatherInfosAType
 */
class WeatherInfosAType
{
    /**
     * Provides detailed information regarding weather.
     *
     * @var \Recranet\OTA\Type\WeatherInfoType[] $weatherInfo
     */
    private $weatherInfo = [
        
    ];

    /**
     * Adds as weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @return self
     * @param \Recranet\OTA\Type\WeatherInfoType $weatherInfo
     */
    public function addToWeatherInfo(\Recranet\OTA\Type\WeatherInfoType $weatherInfo)
    {
        $this->weatherInfo[] = $weatherInfo;
        return $this;
    }

    /**
     * isset weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeatherInfo($index)
    {
        return isset($this->weatherInfo[$index]);
    }

    /**
     * unset weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeatherInfo($index)
    {
        unset($this->weatherInfo[$index]);
    }

    /**
     * Gets as weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @return \Recranet\OTA\Type\WeatherInfoType[]
     */
    public function getWeatherInfo()
    {
        return $this->weatherInfo;
    }

    /**
     * Sets a new weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param \Recranet\OTA\Type\WeatherInfoType[] $weatherInfo
     * @return self
     */
    public function setWeatherInfo(array $weatherInfo)
    {
        $this->weatherInfo = $weatherInfo;
        return $this;
    }
}

