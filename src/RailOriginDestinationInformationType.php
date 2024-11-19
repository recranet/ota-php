<?php

namespace Recranet\OTA;

/**
 * Class representing RailOriginDestinationInformationType
 *
 * Defines rail journey origin and destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * XSD Type: RailOriginDestinationInformationType
 */
class RailOriginDestinationInformationType extends TravelDateTimeType
{
    /**
     * Travel Origin Location.
     *
     * @var \Recranet\OTA\RailOriginDestinationInformationType\OriginLocationAType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @var \Recranet\OTA\RailOriginDestinationInformationType\DestinationLocationAType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection location and other information.
     *
     * @var \Recranet\OTA\RailConnectionType\ConnectionLocationAType[] $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location.
     *
     * @return \Recranet\OTA\RailOriginDestinationInformationType\OriginLocationAType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location.
     *
     * @param \Recranet\OTA\RailOriginDestinationInformationType\OriginLocationAType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\RailOriginDestinationInformationType\OriginLocationAType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location.
     *
     * @return \Recranet\OTA\RailOriginDestinationInformationType\DestinationLocationAType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location.
     *
     * @param \Recranet\OTA\RailOriginDestinationInformationType\DestinationLocationAType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\RailOriginDestinationInformationType\DestinationLocationAType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @return self
     * @param \Recranet\OTA\RailConnectionType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocations(\Recranet\OTA\RailConnectionType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocations[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLocations($index)
    {
        return isset($this->connectionLocations[$index]);
    }

    /**
     * unset connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLocations($index)
    {
        unset($this->connectionLocations[$index]);
    }

    /**
     * Gets as connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @return \Recranet\OTA\RailConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param \Recranet\OTA\RailConnectionType\ConnectionLocationAType[] $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations = null)
    {
        $this->connectionLocations = $connectionLocations;
        return $this;
    }
}

