<?php

namespace Recranet\OTA\OriginDestinationInformationType;

use Recranet\OTA\LocationType;

/**
 * Class representing OriginLocationAType
 */
class OriginLocationAType extends LocationType
{
    /**
     * If true, other airports within this city may be considered (i.e., EWR, JFK when origin location is LGA.)
     *
     * @var bool $multiAirportCityInd
     */
    private $multiAirportCityInd = null;

    /**
     * If true, alternate locations may be considered.
     *
     * @var bool $alternateLocationInd
     */
    private $alternateLocationInd = null;

    /**
     * Gets as multiAirportCityInd
     *
     * If true, other airports within this city may be considered (i.e., EWR, JFK when origin location is LGA.)
     *
     * @return bool
     */
    public function getMultiAirportCityInd()
    {
        return $this->multiAirportCityInd;
    }

    /**
     * Sets a new multiAirportCityInd
     *
     * If true, other airports within this city may be considered (i.e., EWR, JFK when origin location is LGA.)
     *
     * @param bool $multiAirportCityInd
     * @return self
     */
    public function setMultiAirportCityInd($multiAirportCityInd)
    {
        $this->multiAirportCityInd = $multiAirportCityInd;
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

