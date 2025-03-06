<?php

namespace Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType\VehiclesAType;

use Recranet\OTA\Type\VehicleCoreType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleCoreType
{
    /**
     * To specify if this car type is allowed, required, included, excluded for the associated age.
     *
     * @var string $includeExclude
     */
    private $includeExclude = null;

    /**
     * Gets as includeExclude
     *
     * To specify if this car type is allowed, required, included, excluded for the associated age.
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
     * To specify if this car type is allowed, required, included, excluded for the associated age.
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

