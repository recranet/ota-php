<?php

namespace Recranet\OTA\Type\RailPrefType;

use Recranet\OTA\Type\RailAccommDetailType;

/**
 * Class representing AccommodationPrefAType
 */
class AccommodationPrefAType extends RailAccommDetailType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     *  Preferred
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     *  Preferred
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
     *  Preferred
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

