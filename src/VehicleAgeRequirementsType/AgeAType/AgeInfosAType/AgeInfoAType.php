<?php

namespace Recranet\OTA\VehicleAgeRequirementsType\AgeAType\AgeInfosAType;

use Recranet\OTA\FormattedTextType;

/**
 * Class representing AgeInfoAType
 */
class AgeInfoAType extends FormattedTextType
{
    /**
     * Identifies the type of Age Requirement.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Age Requirement.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of Age Requirement.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

