<?php

namespace Recranet\OTA\Type\FlightSegmentType;

use Recranet\OTA\Type\CompanyNameType;

/**
 * Class representing MarketingAirlineAType
 */
class MarketingAirlineAType extends CompanyNameType
{
    /**
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @var string $singleVendorInd
     */
    private $singleVendorInd = null;

    /**
     * Gets as singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @return string
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }

    /**
     * Sets a new singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @param string $singleVendorInd
     * @return self
     */
    public function setSingleVendorInd($singleVendorInd)
    {
        $this->singleVendorInd = $singleVendorInd;
        return $this;
    }
}

