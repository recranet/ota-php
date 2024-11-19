<?php

namespace Recranet\OTA;

/**
 * Class representing RailAvailScheduleQueryType
 *
 * Defines rail availability and schedule search criteria, including origin-destination information and train number and network code.
 * XSD Type: RailAvailScheduleQueryType
 */
class RailAvailScheduleQueryType
{
    /**
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @var int $maxConnections
     */
    private $maxConnections = null;

    /**
     * The type of train to include in the response. Refer to OpenTravel code list Train Type Code (TTC).
     *
     * @var string $trainTypeCode
     */
    private $trainTypeCode = null;

    /**
     * Information on the locations between which schedules and/or availability are to be checked.
     *
     * @var \Recranet\OTA\RailOriginDestinationInformationType $originDestinationInformation
     */
    private $originDestinationInformation = null;

    /**
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @var \Recranet\OTA\TrainQueryType[] $railSearchCriteria
     */
    private $railSearchCriteria = [
        
    ];

    /**
     * Gets as maxConnections
     *
     * Indicates the maximum number of connections (if 0, then direct).
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
     * Indicates the maximum number of connections (if 0, then direct).
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
     * Gets as trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list Train Type Code (TTC).
     *
     * @return string
     */
    public function getTrainTypeCode()
    {
        return $this->trainTypeCode;
    }

    /**
     * Sets a new trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list Train Type Code (TTC).
     *
     * @param string $trainTypeCode
     * @return self
     */
    public function setTrainTypeCode($trainTypeCode)
    {
        $this->trainTypeCode = $trainTypeCode;
        return $this;
    }

    /**
     * Gets as originDestinationInformation
     *
     * Information on the locations between which schedules and/or availability are to be checked.
     *
     * @return \Recranet\OTA\RailOriginDestinationInformationType
     */
    public function getOriginDestinationInformation()
    {
        return $this->originDestinationInformation;
    }

    /**
     * Sets a new originDestinationInformation
     *
     * Information on the locations between which schedules and/or availability are to be checked.
     *
     * @param \Recranet\OTA\RailOriginDestinationInformationType $originDestinationInformation
     * @return self
     */
    public function setOriginDestinationInformation(\Recranet\OTA\RailOriginDestinationInformationType $originDestinationInformation)
    {
        $this->originDestinationInformation = $originDestinationInformation;
        return $this;
    }

    /**
     * Adds as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @return self
     * @param \Recranet\OTA\TrainQueryType $railSearchCriteria
     */
    public function addToRailSearchCriteria(\Recranet\OTA\TrainQueryType $railSearchCriteria)
    {
        $this->railSearchCriteria[] = $railSearchCriteria;
        return $this;
    }

    /**
     * isset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRailSearchCriteria($index)
    {
        return isset($this->railSearchCriteria[$index]);
    }

    /**
     * unset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRailSearchCriteria($index)
    {
        unset($this->railSearchCriteria[$index]);
    }

    /**
     * Gets as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @return \Recranet\OTA\TrainQueryType[]
     */
    public function getRailSearchCriteria()
    {
        return $this->railSearchCriteria;
    }

    /**
     * Sets a new railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination or just a network code.
     *
     * @param \Recranet\OTA\TrainQueryType[] $railSearchCriteria
     * @return self
     */
    public function setRailSearchCriteria(array $railSearchCriteria = null)
    {
        $this->railSearchCriteria = $railSearchCriteria;
        return $this;
    }
}

