<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ConnectionType
 *
 * To specify connection locations, preference level for each, min connection time, and whether location is specified for stopping or changing.
 * XSD Type: ConnectionType
 */
class ConnectionType
{
    /**
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
     *
     * @var \Recranet\OTA\Type\ConnectionType\ConnectionLocationAType[] $connectionLocation
     */
    private $connectionLocation = [
        
    ];

    /**
     * Adds as connectionLocation
     *
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
     *
     * @return self
     * @param \Recranet\OTA\Type\ConnectionType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocation(\Recranet\OTA\Type\ConnectionType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocation[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocation
     *
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
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
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
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
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
     *
     * @return \Recranet\OTA\Type\ConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocation()
    {
        return $this->connectionLocation;
    }

    /**
     * Sets a new connectionLocation
     *
     * Specifies a connection location, preference level, min connection time, and whether the location is allowed for stopping or changing.
     *
     * @param \Recranet\OTA\Type\ConnectionType\ConnectionLocationAType[] $connectionLocation
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation)
    {
        $this->connectionLocation = $connectionLocation;
        return $this;
    }
}

