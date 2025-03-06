<?php

namespace Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType;

use Recranet\OTA\Type\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{
    /**
     * To indicate if the coverage is required, allowed, included, or excluded for this vehicle type.
     *
     * @var string $includeExclude
     */
    private $includeExclude = null;

    /**
     * Gets as includeExclude
     *
     * To indicate if the coverage is required, allowed, included, or excluded for this vehicle type.
     *
     * @return string
     */
    public function getIncludeExclude()
    {
        return $this->includeExclude;
    }

    /**
     * Sets a new includeExclude
     *
     * To indicate if the coverage is required, allowed, included, or excluded for this vehicle type.
     *
     * @param string $includeExclude
     * @return self
     */
    public function setIncludeExclude($includeExclude)
    {
        $this->includeExclude = $includeExclude;
        return $this;
    }
}

