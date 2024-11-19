<?php

namespace Recranet\OTA;

/**
 * Class representing RailAccommDetailType
 *
 * Specific traveler requested accommodation information, including class and type, and associated accommodation attributes such as seat, berth and compartment number, position, direction and adjacent seating preferences.
 * XSD Type: RailAccommDetailType
 */
class RailAccommDetailType
{
    /**
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @var string $deck
     */
    private $deck = null;

    /**
     * Seat accommodation information, including the seat type and associated seat attributes, such as seat number, position and direction.
     *
     * @var \Recranet\OTA\SeatDetailType $seat
     */
    private $seat = null;

    /**
     * Berth accommodation information, including berth type and associated berth attributes, such as berth number and position.
     *
     * @var \Recranet\OTA\BerthDetailType $berth
     */
    private $berth = null;

    /**
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @var \Recranet\OTA\AccommodationClassType $class
     */
    private $class = null;

    /**
     * Compartment accommodation information, including type and associated compartment attributes such as number and position.
     *
     * @var \Recranet\OTA\RailAccommDetailType\CompartmentAType $compartment
     */
    private $compartment = null;

    /**
     * Car information, such as car number.
     *
     * @var \Recranet\OTA\RailAccommDetailType\CarAType $car
     */
    private $car = null;

    /**
     * Gets as deck
     *
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @return string
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Sets a new deck
     *
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @param string $deck
     * @return self
     */
    public function setDeck($deck)
    {
        $this->deck = $deck;
        return $this;
    }

    /**
     * Gets as seat
     *
     * Seat accommodation information, including the seat type and associated seat attributes, such as seat number, position and direction.
     *
     * @return \Recranet\OTA\SeatDetailType
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * Seat accommodation information, including the seat type and associated seat attributes, such as seat number, position and direction.
     *
     * @param \Recranet\OTA\SeatDetailType $seat
     * @return self
     */
    public function setSeat(?\Recranet\OTA\SeatDetailType $seat = null)
    {
        $this->seat = $seat;
        return $this;
    }

    /**
     * Gets as berth
     *
     * Berth accommodation information, including berth type and associated berth attributes, such as berth number and position.
     *
     * @return \Recranet\OTA\BerthDetailType
     */
    public function getBerth()
    {
        return $this->berth;
    }

    /**
     * Sets a new berth
     *
     * Berth accommodation information, including berth type and associated berth attributes, such as berth number and position.
     *
     * @param \Recranet\OTA\BerthDetailType $berth
     * @return self
     */
    public function setBerth(?\Recranet\OTA\BerthDetailType $berth = null)
    {
        $this->berth = $berth;
        return $this;
    }

    /**
     * Gets as class
     *
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @return \Recranet\OTA\AccommodationClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @param \Recranet\OTA\AccommodationClassType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\AccommodationClassType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as compartment
     *
     * Compartment accommodation information, including type and associated compartment attributes such as number and position.
     *
     * @return \Recranet\OTA\RailAccommDetailType\CompartmentAType
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * Compartment accommodation information, including type and associated compartment attributes such as number and position.
     *
     * @param \Recranet\OTA\RailAccommDetailType\CompartmentAType $compartment
     * @return self
     */
    public function setCompartment(?\Recranet\OTA\RailAccommDetailType\CompartmentAType $compartment = null)
    {
        $this->compartment = $compartment;
        return $this;
    }

    /**
     * Gets as car
     *
     * Car information, such as car number.
     *
     * @return \Recranet\OTA\RailAccommDetailType\CarAType
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * Car information, such as car number.
     *
     * @param \Recranet\OTA\RailAccommDetailType\CarAType $car
     * @return self
     */
    public function setCar(?\Recranet\OTA\RailAccommDetailType\CarAType $car = null)
    {
        $this->car = $car;
        return $this;
    }
}

