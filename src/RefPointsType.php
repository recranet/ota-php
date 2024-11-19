<?php

namespace Recranet\OTA;

/**
 * Class representing RefPointsType
 *
 * Reference points in relation to/from the current entity.
 * XSD Type: RefPointsType
 */
class RefPointsType
{
    /**
     * Provides information on the location of an area attraction.
     *
     * @var \Recranet\OTA\RefPointsType\RefPointAType[] $refPoint
     */
    private $refPoint = [
        
    ];

    /**
     * Adds as refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @return self
     * @param \Recranet\OTA\RefPointsType\RefPointAType $refPoint
     */
    public function addToRefPoint(\Recranet\OTA\RefPointsType\RefPointAType $refPoint)
    {
        $this->refPoint[] = $refPoint;
        return $this;
    }

    /**
     * isset refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefPoint($index)
    {
        return isset($this->refPoint[$index]);
    }

    /**
     * unset refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefPoint($index)
    {
        unset($this->refPoint[$index]);
    }

    /**
     * Gets as refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @return \Recranet\OTA\RefPointsType\RefPointAType[]
     */
    public function getRefPoint()
    {
        return $this->refPoint;
    }

    /**
     * Sets a new refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param \Recranet\OTA\RefPointsType\RefPointAType[] $refPoint
     * @return self
     */
    public function setRefPoint(array $refPoint)
    {
        $this->refPoint = $refPoint;
        return $this;
    }
}

