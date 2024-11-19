<?php

namespace Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType;

/**
 * Class representing CarAType
 */
class CarAType
{
    /**
     * The car number.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * A compartment in this car.
     *
     * @var \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[] $compartment
     */
    private $compartment = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The car number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The car number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Adds as compartment
     *
     * A compartment in this car.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType $compartment
     */
    public function addToCompartment(\Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType $compartment)
    {
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * isset compartment
     *
     * A compartment in this car.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompartment($index)
    {
        return isset($this->compartment[$index]);
    }

    /**
     * unset compartment
     *
     * A compartment in this car.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompartment($index)
    {
        unset($this->compartment[$index]);
    }

    /**
     * Gets as compartment
     *
     * A compartment in this car.
     *
     * @return \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * A compartment in this car.
     *
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[] $compartment
     * @return self
     */
    public function setCompartment(array $compartment = null)
    {
        $this->compartment = $compartment;
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

