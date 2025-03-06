<?php

namespace Recranet\OTA\Type\AreaInfoType;

use Recranet\OTA\Type\RefPointsType;

/**
 * Class representing RefPointsAType
 */
class RefPointsAType extends RefPointsType
{
    /**
     * The date and time when RefPoints was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when RefPoints was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when RefPoints was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }
}

