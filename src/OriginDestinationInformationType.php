<?php

namespace Recranet\OTA;

/**
 * Class representing OriginDestinationInformationType
 *
 * Origin and Destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * XSD Type: OriginDestinationInformationType
 */
class OriginDestinationInformationType extends TravelDateTimeType
{
    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @var \Recranet\OTA\OriginDestinationInformationType\OriginLocationAType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @var \Recranet\OTA\OriginDestinationInformationType\DestinationLocationAType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @var \Recranet\OTA\ConnectionType\ConnectionLocationAType[] $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Recranet\OTA\OriginDestinationInformationType\OriginLocationAType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Recranet\OTA\OriginDestinationInformationType\OriginLocationAType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\OriginDestinationInformationType\OriginLocationAType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Recranet\OTA\OriginDestinationInformationType\DestinationLocationAType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Recranet\OTA\OriginDestinationInformationType\DestinationLocationAType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\OriginDestinationInformationType\DestinationLocationAType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return self
     * @param \Recranet\OTA\ConnectionType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocations(\Recranet\OTA\ConnectionType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocations[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
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
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
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
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Recranet\OTA\ConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Recranet\OTA\ConnectionType\ConnectionLocationAType[] $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations = null)
    {
        $this->connectionLocations = $connectionLocations;
        return $this;
    }
}

