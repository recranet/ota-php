<?php

namespace Recranet\OTA\Type\RailOriginDestinationInformationType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing DestinationLocationAType
 */
class DestinationLocationAType extends LocationType
{
    /**
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @var bool $multiCityStationInd
     */
    private $multiCityStationInd = null;

    /**
     * If true, alternate locations may be considered.
     *
     * @var bool $alternateLocationInd
     */
    private $alternateLocationInd = null;

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
     * Gets as alternateLocationInd
     *
     * If true, alternate locations may be considered.
     *
     * @return bool
     */
    public function getAlternateLocationInd()
    {
        return $this->alternateLocationInd;
    }

    /**
     * Sets a new alternateLocationInd
     *
     * If true, alternate locations may be considered.
     *
     * @param bool $alternateLocationInd
     * @return self
     */
    public function setAlternateLocationInd($alternateLocationInd)
    {
        $this->alternateLocationInd = $alternateLocationInd;
        return $this;
    }
}

