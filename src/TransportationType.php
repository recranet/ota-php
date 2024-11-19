<?php

namespace Recranet\OTA;

/**
 * Class representing TransportationType
 *
 * Defines the type of transportation offered.
 * XSD Type: TransportationType
 */
class TransportationType
{
    /**
     * Detailed transportation information.
     *
     * @var \Recranet\OTA\TransportationType\TransportationAType[] $transportation
     */
    private $transportation = [
        
    ];

    /**
     * Adds as transportation
     *
     * Detailed transportation information.
     *
     * @return self
     * @param \Recranet\OTA\TransportationType\TransportationAType $transportation
     */
    public function addToTransportation(\Recranet\OTA\TransportationType\TransportationAType $transportation)
    {
        $this->transportation[] = $transportation;
        return $this;
    }

    /**
     * isset transportation
     *
     * Detailed transportation information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportation($index)
    {
        return isset($this->transportation[$index]);
    }

    /**
     * unset transportation
     *
     * Detailed transportation information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportation($index)
    {
        unset($this->transportation[$index]);
    }

    /**
     * Gets as transportation
     *
     * Detailed transportation information.
     *
     * @return \Recranet\OTA\TransportationType\TransportationAType[]
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Detailed transportation information.
     *
     * @param \Recranet\OTA\TransportationType\TransportationAType[] $transportation
     * @return self
     */
    public function setTransportation(array $transportation)
    {
        $this->transportation = $transportation;
        return $this;
    }
}

