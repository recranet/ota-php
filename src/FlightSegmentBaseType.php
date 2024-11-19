<?php

namespace Recranet\OTA;

/**
 * Class representing FlightSegmentBaseType
 *
 * Construct for holding a flight segment availability object.
 * XSD Type: FlightSegmentBaseType
 */
class FlightSegmentBaseType
{
    /**
     * The date and time of the flight segment departure.
     *
     * @var \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Specifies the arrival date and time of a flight.
     *
     * @var \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The number of stops the flight makes.
     *
     * @var int $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * Reference place holder for this flight segment.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @var string $infoSource
     */
    private $infoSource = null;

    /**
     * Departure point of flight segment.
     *
     * @var \Recranet\OTA\FlightSegmentBaseType\DepartureAirportAType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @var \Recranet\OTA\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @var \Recranet\OTA\OperatingAirlineType $operatingAirline
     */
    private $operatingAirline = null;

    /**
     * The type of equipment used for the flight.
     *
     * @var \Recranet\OTA\EquipmentType[] $equipment
     */
    private $equipment = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as departureDateTime
     *
     * The date and time of the flight segment departure.
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
     * The date and time of the flight segment departure.
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
     * Specifies the arrival date and time of a flight.
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
     * Specifies the arrival date and time of a flight.
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
     * The number of stops the flight makes.
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
     * The number of stops the flight makes.
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
     * Gets as rPH
     *
     * Reference place holder for this flight segment.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Reference place holder for this flight segment.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;
        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Recranet\OTA\FlightSegmentBaseType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure point of flight segment.
     *
     * @param \Recranet\OTA\FlightSegmentBaseType\DepartureAirportAType $departureAirport
     * @return self
     */
    public function setDepartureAirport(?\Recranet\OTA\FlightSegmentBaseType\DepartureAirportAType $departureAirport = null)
    {
        $this->departureAirport = $departureAirport;
        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Recranet\OTA\FlightSegmentBaseType\ArrivalAirportAType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @param \Recranet\OTA\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(?\Recranet\OTA\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport = null)
    {
        $this->arrivalAirport = $arrivalAirport;
        return $this;
    }

    /**
     * Gets as operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @return \Recranet\OTA\OperatingAirlineType
     */
    public function getOperatingAirline()
    {
        return $this->operatingAirline;
    }

    /**
     * Sets a new operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @param \Recranet\OTA\OperatingAirlineType $operatingAirline
     * @return self
     */
    public function setOperatingAirline(?\Recranet\OTA\OperatingAirlineType $operatingAirline = null)
    {
        $this->operatingAirline = $operatingAirline;
        return $this;
    }

    /**
     * Adds as equipment
     *
     * The type of equipment used for the flight.
     *
     * @return self
     * @param \Recranet\OTA\EquipmentType $equipment
     */
    public function addToEquipment(\Recranet\OTA\EquipmentType $equipment)
    {
        $this->equipment[] = $equipment;
        return $this;
    }

    /**
     * isset equipment
     *
     * The type of equipment used for the flight.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * The type of equipment used for the flight.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the flight.
     *
     * @return \Recranet\OTA\EquipmentType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the flight.
     *
     * @param \Recranet\OTA\EquipmentType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment = null)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

