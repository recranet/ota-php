<?php

namespace Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType;

/**
 * Class representing CompartmentAType
 */
class CompartmentAType
{
    /**
     * The compartment number.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * The compartment position, such as close to restaurant car.
     *
     * @var string $position
     */
    private $position = null;

    /**
     * A seat in this compartment.
     *
     * @var \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[] $seat
     */
    private $seat = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The compartment number.
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
     * The compartment number.
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
     * Gets as position
     *
     * The compartment position, such as close to restaurant car.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The compartment position, such as close to restaurant car.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Adds as seat
     *
     * A seat in this compartment.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType $seat
     */
    public function addToSeat(\Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType $seat)
    {
        $this->seat[] = $seat;
        return $this;
    }

    /**
     * isset seat
     *
     * A seat in this compartment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeat($index)
    {
        return isset($this->seat[$index]);
    }

    /**
     * unset seat
     *
     * A seat in this compartment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeat($index)
    {
        unset($this->seat[$index]);
    }

    /**
     * Gets as seat
     *
     * A seat in this compartment.
     *
     * @return \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[]
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * A seat in this compartment.
     *
     * @param \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[] $seat
     * @return self
     */
    public function setSeat(array $seat = null)
    {
        $this->seat = $seat;
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

