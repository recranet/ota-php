<?php

namespace Recranet\OTA;

/**
 * Class representing RailConnectionType
 *
 * Defines connection locations and preference levels, minimum connection times and if the location is specified for stopping or changing.
 * XSD Type: RailConnectionType
 */
class RailConnectionType
{
    /**
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @var \Recranet\OTA\RailConnectionType\ConnectionLocationAType[] $connectionLocation
     */
    private $connectionLocation = [
        
    ];

    /**
     * Adds as connectionLocation
     *
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @return self
     * @param \Recranet\OTA\RailConnectionType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocation(\Recranet\OTA\RailConnectionType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocation[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocation
     *
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLocation($index)
    {
        return isset($this->connectionLocation[$index]);
    }

    /**
     * unset connectionLocation
     *
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLocation($index)
    {
        unset($this->connectionLocation[$index]);
    }

    /**
     * Gets as connectionLocation
     *
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @return \Recranet\OTA\RailConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocation()
    {
        return $this->connectionLocation;
    }

    /**
     * Sets a new connectionLocation
     *
     * Specifies a connection location, preference level, minimum connection time, and whether the location is allowed for stopping or changing.
     *
     * @param \Recranet\OTA\RailConnectionType\ConnectionLocationAType[] $connectionLocation
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation)
    {
        $this->connectionLocation = $connectionLocation;
        return $this;
    }
}

