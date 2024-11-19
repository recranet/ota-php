<?php

namespace Recranet\OTA\RailPrefType;

/**
 * Class representing TrainPrefAType
 */
class TrainPrefAType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @var string $trainType
     */
    private $trainType = null;

    /**
     * Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @var int $maxConnections
     */
    private $maxConnections = null;

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
     * Specifies the travel routing preference.
     *
     * @var string $routingType
     */
    private $routingType = null;

    /**
     * Same carrier/operator only.
     *
     * @var bool $sameOperatorOnlyInd
     */
    private $sameOperatorOnlyInd = null;

    /**
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @var \Recranet\OTA\RailPrefType\TrainPrefAType\TransportModesPrefAType[] $transportModesPref
     */
    private $transportModesPref = [
        
    ];

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
     * Gets as trainType
     *
     * Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @return string
     */
    public function getTrainType()
    {
        return $this->trainType;
    }

    /**
     * Sets a new trainType
     *
     * Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @param string $trainType
     * @return self
     */
    public function setTrainType($trainType)
    {
        $this->trainType = $trainType;
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
     * Gets as sameOperatorOnlyInd
     *
     * Same carrier/operator only.
     *
     * @return bool
     */
    public function getSameOperatorOnlyInd()
    {
        return $this->sameOperatorOnlyInd;
    }

    /**
     * Sets a new sameOperatorOnlyInd
     *
     * Same carrier/operator only.
     *
     * @param bool $sameOperatorOnlyInd
     * @return self
     */
    public function setSameOperatorOnlyInd($sameOperatorOnlyInd)
    {
        $this->sameOperatorOnlyInd = $sameOperatorOnlyInd;
        return $this;
    }

    /**
     * Adds as transportModesPref
     *
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\TrainPrefAType\TransportModesPrefAType $transportModesPref
     */
    public function addToTransportModesPref(\Recranet\OTA\RailPrefType\TrainPrefAType\TransportModesPrefAType $transportModesPref)
    {
        $this->transportModesPref[] = $transportModesPref;
        return $this;
    }

    /**
     * isset transportModesPref
     *
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportModesPref($index)
    {
        return isset($this->transportModesPref[$index]);
    }

    /**
     * unset transportModesPref
     *
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportModesPref($index)
    {
        unset($this->transportModesPref[$index]);
    }

    /**
     * Gets as transportModesPref
     *
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @return \Recranet\OTA\RailPrefType\TrainPrefAType\TransportModesPrefAType[]
     */
    public function getTransportModesPref()
    {
        return $this->transportModesPref;
    }

    /**
     * Sets a new transportModesPref
     *
     * Additional modes of transportation prefences, e.g. bus.
     *
     * @param \Recranet\OTA\RailPrefType\TrainPrefAType\TransportModesPrefAType[] $transportModesPref
     * @return self
     */
    public function setTransportModesPref(array $transportModesPref = null)
    {
        $this->transportModesPref = $transportModesPref;
        return $this;
    }
}

