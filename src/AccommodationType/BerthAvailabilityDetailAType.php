<?php

namespace Recranet\OTA\AccommodationType;

/**
 * Class representing BerthAvailabilityDetailAType
 */
class BerthAvailabilityDetailAType
{
    /**
     * A berth on this train.
     *
     * @var \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType[] $car
     */
    private $car = [
        
    ];

    /**
     * Adds as car
     *
     * A berth on this train.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType $car
     */
    public function addToCar(\Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType $car)
    {
        $this->car[] = $car;
        return $this;
    }

    /**
     * isset car
     *
     * A berth on this train.
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
     * A berth on this train.
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
     * A berth on this train.
     *
     * @return \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * A berth on this train.
     *
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType[] $car
     * @return self
     */
    public function setCar(array $car = null)
    {
        $this->car = $car;
        return $this;
    }
}

