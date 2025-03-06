<?php

namespace Recranet\OTA\Type\MultiModalOfferType;

/**
 * Class representing TripCharacteristicsAType
 */
class TripCharacteristicsAType
{
    /**
     * Requestor trip mode.
     * Example: Flight
     * Note: This is the trip mode that has been accommodated by the offer requestor, e.g. the mode that serves as the basis for all information in this subsequent offer request.
     *
     * @var \Recranet\OTA\Type\OntologyTripModeType $mode
     */
    private $mode = null;

    /**
     * Reservation booking method.
     *
     * @var \Recranet\OTA\Type\OntologyBookingMethodType $bookingMethod
     */
    private $bookingMethod = null;

    /**
     * Trip mode time period.
     * Note: This data is for informational use only as is assumed that traveler(s) are already engaged during this time period.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType $dateTimeDuration
     */
    private $dateTimeDuration = null;

    /**
     * Location(s).
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LocationAType[] $location
     */
    private $location = [
        
    ];

    /**
     * Price and payment details.
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType $priceAndPayment
     */
    private $priceAndPayment = null;

    /**
     * Reservation status.
     *
     * @var \Recranet\OTA\Type\OntologyReservationStatusType $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Baggage.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\BaggageAType $baggage
     */
    private $baggage = null;

    /**
     * Pets and service animals.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType $animals
     */
    private $animals = null;

    /**
     * Activity related trip mode information.
     *
     * @var \Recranet\OTA\Type\OntologyActivityType $activity
     */
    private $activity = null;

    /**
     * Lodging related trip mode information.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LodgingAType $lodging
     */
    private $lodging = null;

    /**
     * Transportation trip mode information.
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType $transportation
     */
    private $transportation = null;

    /**
     * Offer requestor assessed trip value.
     *
     * @var \Recranet\OTA\Type\OntologyValueType $tripValue
     */
    private $tripValue = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as mode
     *
     * Requestor trip mode.
     * Example: Flight
     * Note: This is the trip mode that has been accommodated by the offer requestor, e.g. the mode that serves as the basis for all information in this subsequent offer request.
     *
     * @return \Recranet\OTA\Type\OntologyTripModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Requestor trip mode.
     * Example: Flight
     * Note: This is the trip mode that has been accommodated by the offer requestor, e.g. the mode that serves as the basis for all information in this subsequent offer request.
     *
     * @param \Recranet\OTA\Type\OntologyTripModeType $mode
     * @return self
     */
    public function setMode(\Recranet\OTA\Type\OntologyTripModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as bookingMethod
     *
     * Reservation booking method.
     *
     * @return \Recranet\OTA\Type\OntologyBookingMethodType
     */
    public function getBookingMethod()
    {
        return $this->bookingMethod;
    }

    /**
     * Sets a new bookingMethod
     *
     * Reservation booking method.
     *
     * @param \Recranet\OTA\Type\OntologyBookingMethodType $bookingMethod
     * @return self
     */
    public function setBookingMethod(?\Recranet\OTA\Type\OntologyBookingMethodType $bookingMethod = null)
    {
        $this->bookingMethod = $bookingMethod;
        return $this;
    }

    /**
     * Gets as dateTimeDuration
     *
     * Trip mode time period.
     * Note: This data is for informational use only as is assumed that traveler(s) are already engaged during this time period.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType
     */
    public function getDateTimeDuration()
    {
        return $this->dateTimeDuration;
    }

    /**
     * Sets a new dateTimeDuration
     *
     * Trip mode time period.
     * Note: This data is for informational use only as is assumed that traveler(s) are already engaged during this time period.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType $dateTimeDuration
     * @return self
     */
    public function setDateTimeDuration(?\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType $dateTimeDuration = null)
    {
        $this->dateTimeDuration = $dateTimeDuration;
        return $this;
    }

    /**
     * Adds as location
     *
     * Location(s).
     *
     * @return self
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LocationAType $location
     */
    public function addToLocation(\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LocationAType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * Location(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Location(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Location(s).
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LocationAType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Location(s).
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LocationAType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as priceAndPayment
     *
     * Price and payment details.
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType
     */
    public function getPriceAndPayment()
    {
        return $this->priceAndPayment;
    }

    /**
     * Sets a new priceAndPayment
     *
     * Price and payment details.
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType $priceAndPayment
     * @return self
     */
    public function setPriceAndPayment(?\Recranet\OTA\Type\OntologyPaymentType $priceAndPayment = null)
    {
        $this->priceAndPayment = $priceAndPayment;
        return $this;
    }

    /**
     * Gets as reservationStatus
     *
     * Reservation status.
     *
     * @return \Recranet\OTA\Type\OntologyReservationStatusType
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * Reservation status.
     *
     * @param \Recranet\OTA\Type\OntologyReservationStatusType $reservationStatus
     * @return self
     */
    public function setReservationStatus(?\Recranet\OTA\Type\OntologyReservationStatusType $reservationStatus = null)
    {
        $this->reservationStatus = $reservationStatus;
        return $this;
    }

    /**
     * Gets as baggage
     *
     * Baggage.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\BaggageAType
     */
    public function getBaggage()
    {
        return $this->baggage;
    }

    /**
     * Sets a new baggage
     *
     * Baggage.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\BaggageAType $baggage
     * @return self
     */
    public function setBaggage(?\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\BaggageAType $baggage = null)
    {
        $this->baggage = $baggage;
        return $this;
    }

    /**
     * Gets as animals
     *
     * Pets and service animals.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Sets a new animals
     *
     * Pets and service animals.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType $animals
     * @return self
     */
    public function setAnimals(?\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType $animals = null)
    {
        $this->animals = $animals;
        return $this;
    }

    /**
     * Gets as activity
     *
     * Activity related trip mode information.
     *
     * @return \Recranet\OTA\Type\OntologyActivityType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Activity related trip mode information.
     *
     * @param \Recranet\OTA\Type\OntologyActivityType $activity
     * @return self
     */
    public function setActivity(?\Recranet\OTA\Type\OntologyActivityType $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as lodging
     *
     * Lodging related trip mode information.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LodgingAType
     */
    public function getLodging()
    {
        return $this->lodging;
    }

    /**
     * Sets a new lodging
     *
     * Lodging related trip mode information.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LodgingAType $lodging
     * @return self
     */
    public function setLodging(?\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType\LodgingAType $lodging = null)
    {
        $this->lodging = $lodging;
        return $this;
    }

    /**
     * Gets as transportation
     *
     * Transportation trip mode information.
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Transportation trip mode information.
     *
     * @param \Recranet\OTA\Type\OntologyTransportationType $transportation
     * @return self
     */
    public function setTransportation(?\Recranet\OTA\Type\OntologyTransportationType $transportation = null)
    {
        $this->transportation = $transportation;
        return $this;
    }

    /**
     * Gets as tripValue
     *
     * Offer requestor assessed trip value.
     *
     * @return \Recranet\OTA\Type\OntologyValueType
     */
    public function getTripValue()
    {
        return $this->tripValue;
    }

    /**
     * Sets a new tripValue
     *
     * Offer requestor assessed trip value.
     *
     * @param \Recranet\OTA\Type\OntologyValueType $tripValue
     * @return self
     */
    public function setTripValue(?\Recranet\OTA\Type\OntologyValueType $tripValue = null)
    {
        $this->tripValue = $tripValue;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

