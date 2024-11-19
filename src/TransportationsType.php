<?php

namespace Recranet\OTA;

/**
 * Class representing TransportationsType
 *
 * Used to define the types of transportation offered.
 * XSD Type: TransportationsType
 */
class TransportationsType
{
    /**
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @var \Recranet\OTA\TransportationType\TransportationAType[] $transportations
     */
    private $transportations = null;

    /**
     * Adds as transportation
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @return self
     * @param \Recranet\OTA\TransportationType\TransportationAType $transportation
     */
    public function addToTransportations(\Recranet\OTA\TransportationType\TransportationAType $transportation)
    {
        $this->transportations[] = $transportation;
        return $this;
    }

    /**
     * isset transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportations($index)
    {
        return isset($this->transportations[$index]);
    }

    /**
     * unset transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportations($index)
    {
        unset($this->transportations[$index]);
    }

    /**
     * Gets as transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @return \Recranet\OTA\TransportationType\TransportationAType[]
     */
    public function getTransportations()
    {
        return $this->transportations;
    }

    /**
     * Sets a new transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param \Recranet\OTA\TransportationType\TransportationAType[] $transportations
     * @return self
     */
    public function setTransportations(array $transportations = null)
    {
        $this->transportations = $transportations;
        return $this;
    }
}

