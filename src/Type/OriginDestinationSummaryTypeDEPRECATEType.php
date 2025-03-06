<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OriginDestinationSummaryTypeDEPRECATEType
 *
 * Defines summary information about the rail origin and destination.
 * XSD Type: OriginDestinationSummaryType_DEPRECATE
 */
class OriginDestinationSummaryTypeDEPRECATEType
{
    /**
     * @var \Recranet\OTA\Type\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * @var \Recranet\OTA\Type\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * @var \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * @var \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Train info in each train segment.
     *
     * @var \Recranet\OTA\Type\TrainInfoType[] $trainInfo
     */
    private $trainInfo = [
        
    ];

    /**
     * Gets as originLocation
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * @param \Recranet\OTA\Type\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\Type\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * @param \Recranet\OTA\Type\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\Type\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(?\DateTime $departureDateTime = null)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(?\DateTime $arrivalDateTime = null)
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }

    /**
     * Adds as trainInfo
     *
     * Train info in each train segment.
     *
     * @return self
     * @param \Recranet\OTA\Type\TrainInfoType $trainInfo
     */
    public function addToTrainInfo(\Recranet\OTA\Type\TrainInfoType $trainInfo)
    {
        $this->trainInfo[] = $trainInfo;
        return $this;
    }

    /**
     * isset trainInfo
     *
     * Train info in each train segment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrainInfo($index)
    {
        return isset($this->trainInfo[$index]);
    }

    /**
     * unset trainInfo
     *
     * Train info in each train segment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrainInfo($index)
    {
        unset($this->trainInfo[$index]);
    }

    /**
     * Gets as trainInfo
     *
     * Train info in each train segment.
     *
     * @return \Recranet\OTA\Type\TrainInfoType[]
     */
    public function getTrainInfo()
    {
        return $this->trainInfo;
    }

    /**
     * Sets a new trainInfo
     *
     * Train info in each train segment.
     *
     * @param \Recranet\OTA\Type\TrainInfoType[] $trainInfo
     * @return self
     */
    public function setTrainInfo(array $trainInfo = null)
    {
        $this->trainInfo = $trainInfo;
        return $this;
    }
}

