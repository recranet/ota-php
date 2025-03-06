<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RailOriginDestinationSummaryType
 *
 * Defines rail journey origin and destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * XSD Type: RailOriginDestinationSummaryType
 */
class RailOriginDestinationSummaryType extends TravelDateTimeType
{
    /**
     * Travel Origin Location.
     *
     * @var \Recranet\OTA\Type\RailOriginDestinationSummaryType\OriginLocationAType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @var \Recranet\OTA\Type\RailOriginDestinationSummaryType\DestinationLocationAType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection location and other information.
     *
     * @var \Recranet\OTA\Type\RailOriginDestinationSummaryType\ConnectionLocationAType[] $connectionLocation
     */
    private $connectionLocation = [
        
    ];

    /**
     * Operator, transport, amenity and accommodation preferences.
     *
     * @var \Recranet\OTA\Type\RailAvailPrefsType $preferences
     */
    private $preferences = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location.
     *
     * @return \Recranet\OTA\Type\RailOriginDestinationSummaryType\OriginLocationAType
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
     * @param \Recranet\OTA\Type\RailOriginDestinationSummaryType\OriginLocationAType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\Type\RailOriginDestinationSummaryType\OriginLocationAType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location.
     *
     * @return \Recranet\OTA\Type\RailOriginDestinationSummaryType\DestinationLocationAType
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
     * @param \Recranet\OTA\Type\RailOriginDestinationSummaryType\DestinationLocationAType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\Type\RailOriginDestinationSummaryType\DestinationLocationAType $destinationLocation)
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
     * @param \Recranet\OTA\Type\RailOriginDestinationSummaryType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocation(\Recranet\OTA\Type\RailOriginDestinationSummaryType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocation[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocation
     *
     * Travel Connection location and other information.
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
     * Travel Connection location and other information.
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
     * Travel Connection location and other information.
     *
     * @return \Recranet\OTA\Type\RailOriginDestinationSummaryType\ConnectionLocationAType[]
     */
    public function getConnectionLocation()
    {
        return $this->connectionLocation;
    }

    /**
     * Sets a new connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @param \Recranet\OTA\Type\RailOriginDestinationSummaryType\ConnectionLocationAType[] $connectionLocation
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation = null)
    {
        $this->connectionLocation = $connectionLocation;
        return $this;
    }

    /**
     * Gets as preferences
     *
     * Operator, transport, amenity and accommodation preferences.
     *
     * @return \Recranet\OTA\Type\RailAvailPrefsType
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Sets a new preferences
     *
     * Operator, transport, amenity and accommodation preferences.
     *
     * @param \Recranet\OTA\Type\RailAvailPrefsType $preferences
     * @return self
     */
    public function setPreferences(?\Recranet\OTA\Type\RailAvailPrefsType $preferences = null)
    {
        $this->preferences = $preferences;
        return $this;
    }
}

