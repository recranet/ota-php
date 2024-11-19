<?php

namespace Recranet\OTA;

/**
 * Class representing SeatRequestType
 *
 * Object to hold a passengers' seat request
 * XSD Type: SeatRequestType
 */
class SeatRequestType
{
    /**
     * Used to provide the seat number.
     *
     * @var string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @var string[] $seatPreference
     */
    private $seatPreference = null;

    /**
     * The level of the deck, e.g. "Upper."
     *
     * @var string $deckLevel
     */
    private $deckLevel = null;

    /**
     * Sequence number of a row.
     *
     * @var int $rowNumber
     */
    private $rowNumber = null;

    /**
     * Seat number within a row.
     *
     * @var string $seatInRow
     */
    private $seatInRow = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @var bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The departure date of the flight for the seat requested.
     *
     * @var \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * The number of the flight for which this seat is requested.
     *
     * @var string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Departure point of flight segment.
     *
     * @var \Recranet\OTA\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @var \Recranet\OTA\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Specify the airline the seat was requested for.
     *
     * @var \Recranet\OTA\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Summary offer information that applies to this seat.
     *
     * @var \Recranet\OTA\AirOfferType[] $offers
     */
    private $offers = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as seatNumber
     *
     * Used to provide the seat number.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * Used to provide the seat number.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
        return $this;
    }

    /**
     * Adds as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return self
     * @param string $seatPreference
     */
    public function addToSeatPreference($seatPreference)
    {
        $this->seatPreference[] = $seatPreference;
        return $this;
    }

    /**
     * isset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatPreference($index)
    {
        return isset($this->seatPreference[$index]);
    }

    /**
     * unset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatPreference($index)
    {
        unset($this->seatPreference[$index]);
    }

    /**
     * Gets as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return string[]
     */
    public function getSeatPreference()
    {
        return $this->seatPreference;
    }

    /**
     * Sets a new seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param string $seatPreference
     * @return self
     */
    public function setSeatPreference(array $seatPreference)
    {
        $this->seatPreference = $seatPreference;
        return $this;
    }

    /**
     * Gets as deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @return string
     */
    public function getDeckLevel()
    {
        return $this->deckLevel;
    }

    /**
     * Sets a new deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @param string $deckLevel
     * @return self
     */
    public function setDeckLevel($deckLevel)
    {
        $this->deckLevel = $deckLevel;
        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Sequence number of a row.
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Sequence number of a row.
     *
     * @param int $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;
        return $this;
    }

    /**
     * Gets as seatInRow
     *
     * Seat number within a row.
     *
     * @return string
     */
    public function getSeatInRow()
    {
        return $this->seatInRow;
    }

    /**
     * Sets a new seatInRow
     *
     * Seat number within a row.
     *
     * @param string $seatInRow
     * @return self
     */
    public function setSeatInRow($seatInRow)
    {
        $this->seatInRow = $seatInRow;
        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * The number of the flight for which this seat is requested.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The number of the flight for which this seat is requested.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Recranet\OTA\LocationType
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
     * @param \Recranet\OTA\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(?\Recranet\OTA\LocationType $departureAirport = null)
    {
        $this->departureAirport = $departureAirport;
        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Recranet\OTA\LocationType
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
     * @param \Recranet\OTA\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(?\Recranet\OTA\LocationType $arrivalAirport = null)
    {
        $this->arrivalAirport = $arrivalAirport;
        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify the airline the seat was requested for.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specify the airline the seat was requested for.
     *
     * @param \Recranet\OTA\CompanyNameType $airline
     * @return self
     */
    public function setAirline(?\Recranet\OTA\CompanyNameType $airline = null)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Adds as offers
     *
     * Summary offer information that applies to this seat.
     *
     * @return self
     * @param \Recranet\OTA\AirOfferType $offers
     */
    public function addToOffers(\Recranet\OTA\AirOfferType $offers)
    {
        $this->offers[] = $offers;
        return $this;
    }

    /**
     * isset offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffers($index)
    {
        return isset($this->offers[$index]);
    }

    /**
     * unset offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffers($index)
    {
        unset($this->offers[$index]);
    }

    /**
     * Gets as offers
     *
     * Summary offer information that applies to this seat.
     *
     * @return \Recranet\OTA\AirOfferType[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param \Recranet\OTA\AirOfferType[] $offers
     * @return self
     */
    public function setOffers(array $offers = null)
    {
        $this->offers = $offers;
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

