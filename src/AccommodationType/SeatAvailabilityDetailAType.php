<?php

namespace Recranet\OTA\AccommodationType;

/**
 * Class representing SeatAvailabilityDetailAType
 */
class SeatAvailabilityDetailAType
{
    /**
     * A car on this train.
     *
     * @var \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType[] $car
     */
    private $car = [
        
    ];

    /**
     * Adds as car
     *
     * A car on this train.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType $car
     */
    public function addToCar(\Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType $car)
    {
        $this->car[] = $car;
        return $this;
    }

    /**
     * isset car
     *
     * A car on this train.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCar($index)
    {
        return isset($this->car[$index]);
    }

    /**
     * unset car
     *
     * A car on this train.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCar($index)
    {
        unset($this->car[$index]);
    }

    /**
     * Gets as car
     *
     * A car on this train.
     *
     * @return \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * A car on this train.
     *
     * @param \Recranet\OTA\AccommodationType\SeatAvailabilityDetailAType\CarAType[] $car
     * @return self
     */
    public function setCar(array $car = null)
    {
        $this->car = $car;
        return $this;
    }
}

