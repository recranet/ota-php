<?php

namespace Recranet\OTA\Type;

/**
 * Class representing TrainSegmentType
 *
 * Defines information about a train segment.
 * XSD Type: TrainSegmentType
 */
class TrainSegmentType
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
     * The number of stops the train makes.
     *
     * @var int $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * The duration of the train from departure location to destination location.
     *
     * @var \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * When true, the train schedule includes a border crossing.
     *
     * @var bool $crossBorderInd
     */
    private $crossBorderInd = null;

    /**
     * The departure point of the train segment.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $departureStation
     */
    private $departureStation = null;

    /**
     * The arrival point of the train segment.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * The marketing train company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $marketingCompany
     */
    private $marketingCompany = null;

    /**
     * The operating train company, if different from the Marketing Company.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $operatingCompany
     */
    private $operatingCompany = null;

    /**
     * The type of equipment used for the train journey. Use a string value, such as the operator equipment code or a UIC code.
     *
     * @var \Recranet\OTA\Type\ClassCodeType $equipment
     */
    private $equipment = null;

    /**
     * Detailed information about the train.
     *
     * @var \Recranet\OTA\Type\TrainInfoType $trainInfo
     */
    private $trainInfo = null;

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
     * The number of stops the train makes.
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
     * The number of stops the train makes.
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
     * The duration of the train from departure location to destination location.
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
     * The duration of the train from departure location to destination location.
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
     * When true, the train schedule includes a border crossing.
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
     * When true, the train schedule includes a border crossing.
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
     * The departure point of the train segment.
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
     * The departure point of the train segment.
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
     * The arrival point of the train segment.
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
     * The arrival point of the train segment.
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
     * The marketing train company.
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
     * The marketing train company.
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
     * The operating train company, if different from the Marketing Company.
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
     * The operating train company, if different from the Marketing Company.
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
     * The type of equipment used for the train journey. Use a string value, such as the operator equipment code or a UIC code.
     *
     * @return \Recranet\OTA\Type\ClassCodeType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the train journey. Use a string value, such as the operator equipment code or a UIC code.
     *
     * @param \Recranet\OTA\Type\ClassCodeType $equipment
     * @return self
     */
    public function setEquipment(?\Recranet\OTA\Type\ClassCodeType $equipment = null)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as trainInfo
     *
     * Detailed information about the train.
     *
     * @return \Recranet\OTA\Type\TrainInfoType
     */
    public function getTrainInfo()
    {
        return $this->trainInfo;
    }

    /**
     * Sets a new trainInfo
     *
     * Detailed information about the train.
     *
     * @param \Recranet\OTA\Type\TrainInfoType $trainInfo
     * @return self
     */
    public function setTrainInfo(?\Recranet\OTA\Type\TrainInfoType $trainInfo = null)
    {
        $this->trainInfo = $trainInfo;
        return $this;
    }
}

