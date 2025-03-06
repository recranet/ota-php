<?php

namespace Recranet\OTA\Type;

/**
 * Class representing TrainSegmentSummaryType
 *
 * Defines train segment summary information, including departure and arrival stations, departure and arrival dates/times, and train identification information.
 * XSD Type: TrainSegmentSummaryType
 */
class TrainSegmentSummaryType
{
    /**
     * Train departure station information.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $departureStation
     */
    private $departureStation = null;

    /**
     * Train arrival station information.
     *
     * @var \Recranet\OTA\Type\StationDetailsType $arrivalStation
     */
    private $arrivalStation = null;

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
     * Train identification information, including a train number and a train network code.
     *
     * @var \Recranet\OTA\Type\TrainIdentificationType $trainIdentification
     */
    private $trainIdentification = null;

    /**
     * Gets as departureStation
     *
     * Train departure station information.
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
     * Train departure station information.
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
     * Train arrival station information.
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
     * Train arrival station information.
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
     * Gets as trainIdentification
     *
     * Train identification information, including a train number and a train network code.
     *
     * @return \Recranet\OTA\Type\TrainIdentificationType
     */
    public function getTrainIdentification()
    {
        return $this->trainIdentification;
    }

    /**
     * Sets a new trainIdentification
     *
     * Train identification information, including a train number and a train network code.
     *
     * @param \Recranet\OTA\Type\TrainIdentificationType $trainIdentification
     * @return self
     */
    public function setTrainIdentification(\Recranet\OTA\Type\TrainIdentificationType $trainIdentification)
    {
        $this->trainIdentification = $trainIdentification;
        return $this;
    }
}

