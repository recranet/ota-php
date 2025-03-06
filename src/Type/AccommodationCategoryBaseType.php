<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AccommodationCategoryBaseType
 *
 * The category of accommodation on a train.
 * XSD Type: AccommodationCategoryBaseType
 */
class AccommodationCategoryBaseType
{
    /**
     * The seat type, such as Seat and Sleeperette.
     *
     * @var string $seat
     */
    private $seat = null;

    /**
     * The berth type, such as Sleeper and Couchette.
     *
     * @var string $berth
     */
    private $berth = null;

    /**
     * The accommodation class, such as First Class and Second Class.
     *
     * @var \Recranet\OTA\Type\AccommodationClassType $class
     */
    private $class = null;

    /**
     * The compartment type, such as Family and Single.
     *
     * @var \Recranet\OTA\Type\CompartmentType $compartment
     */
    private $compartment = null;

    /**
     * Gets as seat
     *
     * The seat type, such as Seat and Sleeperette.
     *
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * The seat type, such as Seat and Sleeperette.
     *
     * @param string $seat
     * @return self
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
        return $this;
    }

    /**
     * Gets as berth
     *
     * The berth type, such as Sleeper and Couchette.
     *
     * @return string
     */
    public function getBerth()
    {
        return $this->berth;
    }

    /**
     * Sets a new berth
     *
     * The berth type, such as Sleeper and Couchette.
     *
     * @param string $berth
     * @return self
     */
    public function setBerth($berth)
    {
        $this->berth = $berth;
        return $this;
    }

    /**
     * Gets as class
     *
     * The accommodation class, such as First Class and Second Class.
     *
     * @return \Recranet\OTA\Type\AccommodationClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The accommodation class, such as First Class and Second Class.
     *
     * @param \Recranet\OTA\Type\AccommodationClassType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\Type\AccommodationClassType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as compartment
     *
     * The compartment type, such as Family and Single.
     *
     * @return \Recranet\OTA\Type\CompartmentType
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * The compartment type, such as Family and Single.
     *
     * @param \Recranet\OTA\Type\CompartmentType $compartment
     * @return self
     */
    public function setCompartment(?\Recranet\OTA\Type\CompartmentType $compartment = null)
    {
        $this->compartment = $compartment;
        return $this;
    }
}

