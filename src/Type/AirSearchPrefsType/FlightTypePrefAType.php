<?php

namespace Recranet\OTA\Type\AirSearchPrefsType;

/**
 * Class representing FlightTypePrefAType
 */
class FlightTypePrefAType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @var string $flightType
     */
    private $flightType = null;

    /**
     * Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @var int $maxConnections
     */
    private $maxConnections = null;

    /**
     * To specify which types of non-scheduled air service should be included.
     *
     * @var string $nonScheduledFltInfo
     */
    private $nonScheduledFltInfo = null;

    /**
     * If true, include connections where one of the enroute stops is the same as the initial board point or the final off point of the flight.
     *
     * @var bool $backhaulIndicator
     */
    private $backhaulIndicator = null;

    /**
     * If true, include flights that include at least one leg that is ground transportation.
     *
     * @var bool $groundTransportIndicator
     */
    private $groundTransportIndicator = null;

    /**
     * If true, direct and non-stop flights are requested.
     *
     * @var bool $directAndNonStopOnlyInd
     */
    private $directAndNonStopOnlyInd = null;

    /**
     * If true, only non-stop flights are requested.
     *
     * @var bool $nonStopsOnlyInd
     */
    private $nonStopsOnlyInd = null;

    /**
     * If true, only online connection flights are requested (i.e., same marketing airline).
     *
     * @var bool $onlineConnectionsOnlyInd
     */
    private $onlineConnectionsOnlyInd = null;

    /**
     * Specifies the travel routing preference.
     *
     * @var string $routingType
     */
    private $routingType = null;

    /**
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @var bool $excludeTrainInd
     */
    private $excludeTrainInd = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as flightType
     *
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @return string
     */
    public function getFlightType()
    {
        return $this->flightType;
    }

    /**
     * Sets a new flightType
     *
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @param string $flightType
     * @return self
     */
    public function setFlightType($flightType)
    {
        $this->flightType = $flightType;
        return $this;
    }

    /**
     * Gets as maxConnections
     *
     * Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * Sets a new maxConnections
     *
     * Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @param int $maxConnections
     * @return self
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }

    /**
     * Gets as nonScheduledFltInfo
     *
     * To specify which types of non-scheduled air service should be included.
     *
     * @return string
     */
    public function getNonScheduledFltInfo()
    {
        return $this->nonScheduledFltInfo;
    }

    /**
     * Sets a new nonScheduledFltInfo
     *
     * To specify which types of non-scheduled air service should be included.
     *
     * @param string $nonScheduledFltInfo
     * @return self
     */
    public function setNonScheduledFltInfo($nonScheduledFltInfo)
    {
        $this->nonScheduledFltInfo = $nonScheduledFltInfo;
        return $this;
    }

    /**
     * Gets as backhaulIndicator
     *
     * If true, include connections where one of the enroute stops is the same as the initial board point or the final off point of the flight.
     *
     * @return bool
     */
    public function getBackhaulIndicator()
    {
        return $this->backhaulIndicator;
    }

    /**
     * Sets a new backhaulIndicator
     *
     * If true, include connections where one of the enroute stops is the same as the initial board point or the final off point of the flight.
     *
     * @param bool $backhaulIndicator
     * @return self
     */
    public function setBackhaulIndicator($backhaulIndicator)
    {
        $this->backhaulIndicator = $backhaulIndicator;
        return $this;
    }

    /**
     * Gets as groundTransportIndicator
     *
     * If true, include flights that include at least one leg that is ground transportation.
     *
     * @return bool
     */
    public function getGroundTransportIndicator()
    {
        return $this->groundTransportIndicator;
    }

    /**
     * Sets a new groundTransportIndicator
     *
     * If true, include flights that include at least one leg that is ground transportation.
     *
     * @param bool $groundTransportIndicator
     * @return self
     */
    public function setGroundTransportIndicator($groundTransportIndicator)
    {
        $this->groundTransportIndicator = $groundTransportIndicator;
        return $this;
    }

    /**
     * Gets as directAndNonStopOnlyInd
     *
     * If true, direct and non-stop flights are requested.
     *
     * @return bool
     */
    public function getDirectAndNonStopOnlyInd()
    {
        return $this->directAndNonStopOnlyInd;
    }

    /**
     * Sets a new directAndNonStopOnlyInd
     *
     * If true, direct and non-stop flights are requested.
     *
     * @param bool $directAndNonStopOnlyInd
     * @return self
     */
    public function setDirectAndNonStopOnlyInd($directAndNonStopOnlyInd)
    {
        $this->directAndNonStopOnlyInd = $directAndNonStopOnlyInd;
        return $this;
    }

    /**
     * Gets as nonStopsOnlyInd
     *
     * If true, only non-stop flights are requested.
     *
     * @return bool
     */
    public function getNonStopsOnlyInd()
    {
        return $this->nonStopsOnlyInd;
    }

    /**
     * Sets a new nonStopsOnlyInd
     *
     * If true, only non-stop flights are requested.
     *
     * @param bool $nonStopsOnlyInd
     * @return self
     */
    public function setNonStopsOnlyInd($nonStopsOnlyInd)
    {
        $this->nonStopsOnlyInd = $nonStopsOnlyInd;
        return $this;
    }

    /**
     * Gets as onlineConnectionsOnlyInd
     *
     * If true, only online connection flights are requested (i.e., same marketing airline).
     *
     * @return bool
     */
    public function getOnlineConnectionsOnlyInd()
    {
        return $this->onlineConnectionsOnlyInd;
    }

    /**
     * Sets a new onlineConnectionsOnlyInd
     *
     * If true, only online connection flights are requested (i.e., same marketing airline).
     *
     * @param bool $onlineConnectionsOnlyInd
     * @return self
     */
    public function setOnlineConnectionsOnlyInd($onlineConnectionsOnlyInd)
    {
        $this->onlineConnectionsOnlyInd = $onlineConnectionsOnlyInd;
        return $this;
    }

    /**
     * Gets as routingType
     *
     * Specifies the travel routing preference.
     *
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * Sets a new routingType
     *
     * Specifies the travel routing preference.
     *
     * @param string $routingType
     * @return self
     */
    public function setRoutingType($routingType)
    {
        $this->routingType = $routingType;
        return $this;
    }

    /**
     * Gets as excludeTrainInd
     *
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @return bool
     */
    public function getExcludeTrainInd()
    {
        return $this->excludeTrainInd;
    }

    /**
     * Sets a new excludeTrainInd
     *
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @param bool $excludeTrainInd
     * @return self
     */
    public function setExcludeTrainInd($excludeTrainInd)
    {
        $this->excludeTrainInd = $excludeTrainInd;
        return $this;
    }
}

