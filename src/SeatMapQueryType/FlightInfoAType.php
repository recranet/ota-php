<?php

namespace Recranet\OTA\SeatMapQueryType;

/**
 * Class representing FlightInfoAType
 */
class FlightInfoAType
{
    /**
     * The number of the flight for the seat map.
     *
     * @var string $flightNumber
     */
    private $flightNumber = null;

    /**
     * A unique ID for a traveler defined elsewhere in this message.
     *
     * @var string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * The airline the seat map is requested for.
     *
     * @var \Recranet\OTA\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Origin and destination information.
     *
     * @var \Recranet\OTA\OriginDestinationInformationType $originDestination
     */
    private $originDestination = null;

    /**
     * Detailed air itinerary information, including origin/destination options by flight segment.
     *
     * @var \Recranet\OTA\AirItineraryType $airItineraryDetail
     */
    private $airItineraryDetail = null;

    /**
     * Gets as flightNumber
     *
     * The number of the flight for the seat map.
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
     * The number of the flight for the seat map.
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
     * Gets as travelerRPH
     *
     * A unique ID for a traveler defined elsewhere in this message.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A unique ID for a traveler defined elsewhere in this message.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;
        return $this;
    }

    /**
     * Gets as airline
     *
     * The airline the seat map is requested for.
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
     * The airline the seat map is requested for.
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
     * Gets as originDestination
     *
     * Origin and destination information.
     *
     * @return \Recranet\OTA\OriginDestinationInformationType
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Origin and destination information.
     *
     * @param \Recranet\OTA\OriginDestinationInformationType $originDestination
     * @return self
     */
    public function setOriginDestination(?\Recranet\OTA\OriginDestinationInformationType $originDestination = null)
    {
        $this->originDestination = $originDestination;
        return $this;
    }

    /**
     * Gets as airItineraryDetail
     *
     * Detailed air itinerary information, including origin/destination options by flight segment.
     *
     * @return \Recranet\OTA\AirItineraryType
     */
    public function getAirItineraryDetail()
    {
        return $this->airItineraryDetail;
    }

    /**
     * Sets a new airItineraryDetail
     *
     * Detailed air itinerary information, including origin/destination options by flight segment.
     *
     * @param \Recranet\OTA\AirItineraryType $airItineraryDetail
     * @return self
     */
    public function setAirItineraryDetail(?\Recranet\OTA\AirItineraryType $airItineraryDetail = null)
    {
        $this->airItineraryDetail = $airItineraryDetail;
        return $this;
    }
}

