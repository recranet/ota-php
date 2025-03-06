<?php

namespace Recranet\OTA\Type;

/**
 * Class representing BusSegmentType
 *
 * Defines information about a bus segment.
 * XSD Type: BusSegmentType
 */
class BusSegmentType
{
    /**
     * The departure date and time.
     *
     * @var \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and time.
     *
     * @var \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The number of stops the bus makes.
     *
     * @var int $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * The duration of the bus from departure location to destination location.
     *
     * @var \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * When true, the bus schedule includes a border crossing.
     *
     * @var bool $crossBorderInd
     */
    private $crossBorderInd = null;

    /**
     * The departure point of the bus segment.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $departureStation
     */
    private $departureStation = null;

    /**
     * The arrival point of the bus segment.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * The marketing bus company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $marketingCompany
     */
    private $marketingCompany = null;

    /**
     * The operating bus company, if different from the Marketing Company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $operatingCompany
     */
    private $operatingCompany = null;

    /**
     * The type of equipment used for the bus journey. Use a string value, such as an operator equipment code or UIC code, or an OpenTravel code list value (to be defined in 2011B specification.)
     *
     * @var \Recranet\OTA\Type\BusSegmentType\EquipmentAType $equipment
     */
    private $equipment = null;

    /**
     * Detailed information about the bus.
     *
     * @var \Recranet\OTA\Type\BusInfoType $busInfo
     */
    private $busInfo = null;

    /**
     * Gets as departureDateTime
     *
     * The departure date and time.
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
     * The departure date and time.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and time.
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
     * The arrival date and time.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }

    /**
     * Gets as stopQuantity
     *
     * The number of stops the bus makes.
     *
     * @return int
     */
    public function getStopQuantity()
    {
        return $this->stopQuantity;
    }

    /**
     * Sets a new stopQuantity
     *
     * The number of stops the bus makes.
     *
     * @param int $stopQuantity
     * @return self
     */
    public function setStopQuantity($stopQuantity)
    {
        $this->stopQuantity = $stopQuantity;
        return $this;
    }

    /**
     * Gets as journeyDuration
     *
     * The duration of the bus from departure location to destination location.
     *
     * @return \DateInterval
     */
    public function getJourneyDuration()
    {
        return $this->journeyDuration;
    }

    /**
     * Sets a new journeyDuration
     *
     * The duration of the bus from departure location to destination location.
     *
     * @param \DateInterval $journeyDuration
     * @return self
     */
    public function setJourneyDuration(\DateInterval $journeyDuration)
    {
        $this->journeyDuration = $journeyDuration;
        return $this;
    }

    /**
     * Gets as crossBorderInd
     *
     * When true, the bus schedule includes a border crossing.
     *
     * @return bool
     */
    public function getCrossBorderInd()
    {
        return $this->crossBorderInd;
    }

    /**
     * Sets a new crossBorderInd
     *
     * When true, the bus schedule includes a border crossing.
     *
     * @param bool $crossBorderInd
     * @return self
     */
    public function setCrossBorderInd($crossBorderInd)
    {
        $this->crossBorderInd = $crossBorderInd;
        return $this;
    }

    /**
     * Gets as departureStation
     *
     * The departure point of the bus segment.
     *
     * @return \Recranet\OTA\Type\StationDetailsType
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * Sets a new departureStation
     *
     * The departure point of the bus segment.
     *
     * @param \Recranet\OTA\Type\StationDetailsType $departureStation
     * @return self
     */
    public function setDepartureStation(\Recranet\OTA\Type\StationDetailsType $departureStation)
    {
        $this->departureStation = $departureStation;
        return $this;
    }

    /**
     * Gets as arrivalStation
     *
     * The arrival point of the bus segment.
     *
     * @return \Recranet\OTA\Type\StationDetailsType
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * Sets a new arrivalStation
     *
     * The arrival point of the bus segment.
     *
     * @param \Recranet\OTA\Type\StationDetailsType $arrivalStation
     * @return self
     */
    public function setArrivalStation(\Recranet\OTA\Type\StationDetailsType $arrivalStation)
    {
        $this->arrivalStation = $arrivalStation;
        return $this;
    }

    /**
     * Gets as marketingCompany
     *
     * The marketing bus company.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * Sets a new marketingCompany
     *
     * The marketing bus company.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $marketingCompany
     * @return self
     */
    public function setMarketingCompany(\Recranet\OTA\Type\CompanyNameType $marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;
        return $this;
    }

    /**
     * Gets as operatingCompany
     *
     * The operating bus company, if different from the Marketing Company.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * Sets a new operatingCompany
     *
     * The operating bus company, if different from the Marketing Company.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $operatingCompany
     * @return self
     */
    public function setOperatingCompany(?\Recranet\OTA\Type\CompanyNameType $operatingCompany = null)
    {
        $this->operatingCompany = $operatingCompany;
        return $this;
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the bus journey. Use a string value, such as an operator equipment code or UIC code, or an OpenTravel code list value (to be defined in 2011B specification.)
     *
     * @return \Recranet\OTA\Type\BusSegmentType\EquipmentAType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the bus journey. Use a string value, such as an operator equipment code or UIC code, or an OpenTravel code list value (to be defined in 2011B specification.)
     *
     * @param \Recranet\OTA\Type\BusSegmentType\EquipmentAType $equipment
     * @return self
     */
    public function setEquipment(?\Recranet\OTA\Type\BusSegmentType\EquipmentAType $equipment = null)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as busInfo
     *
     * Detailed information about the bus.
     *
     * @return \Recranet\OTA\Type\BusInfoType
     */
    public function getBusInfo()
    {
        return $this->busInfo;
    }

    /**
     * Sets a new busInfo
     *
     * Detailed information about the bus.
     *
     * @param \Recranet\OTA\Type\BusInfoType $busInfo
     * @return self
     */
    public function setBusInfo(?\Recranet\OTA\Type\BusInfoType $busInfo = null)
    {
        $this->busInfo = $busInfo;
        return $this;
    }
}

