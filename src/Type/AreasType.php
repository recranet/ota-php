<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AreasType
 *
 * Defines an area determined by the reservation system.
 * XSD Type: AreasType
 */
class AreasType
{
    /**
     * An area determined by the reservation system.
     *
     * @var \Recranet\OTA\Type\AreasType\AreaAType[] $area
     */
    private $area = [
        
    ];

    /**
     * Adds as area
     *
     * An area determined by the reservation system.
     *
     * @return self
     * @param \Recranet\OTA\Type\AreasType\AreaAType $area
     */
    public function addToArea(\Recranet\OTA\Type\AreasType\AreaAType $area)
    {
        $this->area[] = $area;
        return $this;
    }

    /**
     * isset area
     *
     * An area determined by the reservation system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArea($index)
    {
        return isset($this->area[$index]);
    }

    /**
     * unset area
     *
     * An area determined by the reservation system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArea($index)
    {
        unset($this->area[$index]);
    }

    /**
     * Gets as area
     *
     * An area determined by the reservation system.
     *
     * @return \Recranet\OTA\Type\AreasType\AreaAType[]
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * An area determined by the reservation system.
     *
     * @param \Recranet\OTA\Type\AreasType\AreaAType[] $area
     * @return self
     */
    public function setArea(array $area)
    {
        $this->area = $area;
        return $this;
    }
}

