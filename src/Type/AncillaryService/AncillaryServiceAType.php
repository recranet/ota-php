<?php

namespace Recranet\OTA\Type\AncillaryService;

use Recranet\OTA\Type\AncillaryServiceType;

/**
 * Class representing AncillaryServiceAType
 */
class AncillaryServiceAType extends AncillaryServiceType
{
    /**
     * The preference level for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as preferLevel
     *
     * The preference level for an associated item.
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
     * The preference level for an associated item.
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

