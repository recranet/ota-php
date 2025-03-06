<?php

namespace Recranet\OTA\Type\ItemSearchCriterionType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing CodeRefAType
 */
class CodeRefAType extends LocationType
{
    /**
     * Used to identify the vicinity of the location. Refer to OpenTravel Codelist Vehicle Where at Facility (VWF).
     *
     * @var string $vicinityCode
     */
    private $vicinityCode = null;

    /**
     * Gets as vicinityCode
     *
     * Used to identify the vicinity of the location. Refer to OpenTravel Codelist Vehicle Where at Facility (VWF).
     *
     * @return string
     */
    public function getVicinityCode()
    {
        return $this->vicinityCode;
    }

    /**
     * Sets a new vicinityCode
     *
     * Used to identify the vicinity of the location. Refer to OpenTravel Codelist Vehicle Where at Facility (VWF).
     *
     * @param string $vicinityCode
     * @return self
     */
    public function setVicinityCode($vicinityCode)
    {
        $this->vicinityCode = $vicinityCode;
        return $this;
    }
}

