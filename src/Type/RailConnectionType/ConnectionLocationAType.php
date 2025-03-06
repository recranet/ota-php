<?php

namespace Recranet\OTA\Type\RailConnectionType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing ConnectionLocationAType
 */
class ConnectionLocationAType extends LocationType
{
    /**
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @var bool $multiCityStationInd
     */
    private $multiCityStationInd = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @return bool
     */
    public function getMultiCityStationInd()
    {
        return $this->multiCityStationInd;
    }

    /**
     * Sets a new multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @param bool $multiCityStationInd
     * @return self
     */
    public function setMultiCityStationInd($multiCityStationInd)
    {
        $this->multiCityStationInd = $multiCityStationInd;
        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }
}

