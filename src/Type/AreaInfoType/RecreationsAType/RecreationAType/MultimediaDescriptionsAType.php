<?php

namespace Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType;

use Recranet\OTA\Type\MultimediaDescriptionsType;

/**
 * Class representing MultimediaDescriptionsAType
 */
class MultimediaDescriptionsAType extends MultimediaDescriptionsType
{
    /**
     * An indicator for whether this is a location description.
     *
     *  false
     *
     * @var bool $location
     */
    private $location = null;

    /**
     * An indicator for whether this is a description TO the location (TRUE is TO the location, else FROM).
     *
     *  true
     *
     * @var bool $refDirectionTo
     */
    private $refDirectionTo = null;

    /**
     * Gets as location
     *
     * An indicator for whether this is a location description.
     *
     *  false
     *
     * @return bool
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * An indicator for whether this is a location description.
     *
     *  false
     *
     * @param bool $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as refDirectionTo
     *
     * An indicator for whether this is a description TO the location (TRUE is TO the location, else FROM).
     *
     *  true
     *
     * @return bool
     */
    public function getRefDirectionTo()
    {
        return $this->refDirectionTo;
    }

    /**
     * Sets a new refDirectionTo
     *
     * An indicator for whether this is a description TO the location (TRUE is TO the location, else FROM).
     *
     *  true
     *
     * @param bool $refDirectionTo
     * @return self
     */
    public function setRefDirectionTo($refDirectionTo)
    {
        $this->refDirectionTo = $refDirectionTo;
        return $this;
    }
}

