<?php

namespace Recranet\OTA;

/**
 * Class representing LocationGeneralType
 *
 * Provides high-level information regarding a location.
 * XSD Type: LocationGeneralType
 */
class LocationGeneralType
{
    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * State or Province name (e.g., Texas).
     *
     * @var \Recranet\OTA\StateProvType $stateProv
     */
    private $stateProv = null;

    /**
     * Country name (e.g., Ireland).
     *
     * @var \Recranet\OTA\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @return \Recranet\OTA\StateProvType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @param \Recranet\OTA\StateProvType $stateProv
     * @return self
     */
    public function setStateProv(?\Recranet\OTA\StateProvType $stateProv = null)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Recranet\OTA\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Recranet\OTA\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(?\Recranet\OTA\CountryNameType $countryName = null)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

