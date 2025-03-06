<?php

namespace Recranet\OTA\Type\OTAHotelCacheChangeRS\OTAHotelCacheChangeRSAType;

use Recranet\OTA\Type\CacheType;

/**
 * Class representing CacheChangeInfoAType
 */
class CacheChangeInfoAType extends CacheType
{
    /**
     * When true, identifies changes in Availability data for the designated cache search criteria.
     *
     * @var bool $availabilityInd
     */
    private $availabilityInd = null;

    /**
     * When true, identifies changes in Rates data for the designated cache search criteria.
     *
     * @var bool $ratesInd
     */
    private $ratesInd = null;

    /**
     * When true, identifies changes in Hotel Content for the designated cache search criteria.
     *
     * @var bool $hotelContentInd
     */
    private $hotelContentInd = null;

    /**
     * Gets as availabilityInd
     *
     * When true, identifies changes in Availability data for the designated cache search criteria.
     *
     * @return bool
     */
    public function getAvailabilityInd()
    {
        return $this->availabilityInd;
    }

    /**
     * Sets a new availabilityInd
     *
     * When true, identifies changes in Availability data for the designated cache search criteria.
     *
     * @param bool $availabilityInd
     * @return self
     */
    public function setAvailabilityInd($availabilityInd)
    {
        $this->availabilityInd = $availabilityInd;
        return $this;
    }

    /**
     * Gets as ratesInd
     *
     * When true, identifies changes in Rates data for the designated cache search criteria.
     *
     * @return bool
     */
    public function getRatesInd()
    {
        return $this->ratesInd;
    }

    /**
     * Sets a new ratesInd
     *
     * When true, identifies changes in Rates data for the designated cache search criteria.
     *
     * @param bool $ratesInd
     * @return self
     */
    public function setRatesInd($ratesInd)
    {
        $this->ratesInd = $ratesInd;
        return $this;
    }

    /**
     * Gets as hotelContentInd
     *
     * When true, identifies changes in Hotel Content for the designated cache search criteria.
     *
     * @return bool
     */
    public function getHotelContentInd()
    {
        return $this->hotelContentInd;
    }

    /**
     * Sets a new hotelContentInd
     *
     * When true, identifies changes in Hotel Content for the designated cache search criteria.
     *
     * @param bool $hotelContentInd
     * @return self
     */
    public function setHotelContentInd($hotelContentInd)
    {
        $this->hotelContentInd = $hotelContentInd;
        return $this;
    }
}

