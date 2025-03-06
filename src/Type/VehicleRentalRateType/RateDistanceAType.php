<?php

namespace Recranet\OTA\Type\VehicleRentalRateType;

/**
 * Class representing RateDistanceAType
 */
class RateDistanceAType
{
    /**
     * When true there is no mileage/kilometer restriction.
     *
     * @var bool $unlimited
     */
    private $unlimited = null;

    /**
     * Provides the number of miles/kilometers included, typically used when Unlimited is false.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Provides the units in which distance is measured, when applied to the rental of a vehicle (i.e., miles or kilometers).
     *
     * @var string $distUnitName
     */
    private $distUnitName = null;

    /**
     * Provides the period of time associated with the quantity and distance unit name (e.g. day).
     *
     * @var string $vehiclePeriodUnitName
     */
    private $vehiclePeriodUnitName = null;

    /**
     * Gets as unlimited
     *
     * When true there is no mileage/kilometer restriction.
     *
     * @return bool
     */
    public function getUnlimited()
    {
        return $this->unlimited;
    }

    /**
     * Sets a new unlimited
     *
     * When true there is no mileage/kilometer restriction.
     *
     * @param bool $unlimited
     * @return self
     */
    public function setUnlimited($unlimited)
    {
        $this->unlimited = $unlimited;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Provides the number of miles/kilometers included, typically used when Unlimited is false.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Provides the number of miles/kilometers included, typically used when Unlimited is false.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as distUnitName
     *
     * Provides the units in which distance is measured, when applied to the rental of a vehicle (i.e., miles or kilometers).
     *
     * @return string
     */
    public function getDistUnitName()
    {
        return $this->distUnitName;
    }

    /**
     * Sets a new distUnitName
     *
     * Provides the units in which distance is measured, when applied to the rental of a vehicle (i.e., miles or kilometers).
     *
     * @param string $distUnitName
     * @return self
     */
    public function setDistUnitName($distUnitName)
    {
        $this->distUnitName = $distUnitName;
        return $this;
    }

    /**
     * Gets as vehiclePeriodUnitName
     *
     * Provides the period of time associated with the quantity and distance unit name (e.g. day).
     *
     * @return string
     */
    public function getVehiclePeriodUnitName()
    {
        return $this->vehiclePeriodUnitName;
    }

    /**
     * Sets a new vehiclePeriodUnitName
     *
     * Provides the period of time associated with the quantity and distance unit name (e.g. day).
     *
     * @param string $vehiclePeriodUnitName
     * @return self
     */
    public function setVehiclePeriodUnitName($vehiclePeriodUnitName)
    {
        $this->vehiclePeriodUnitName = $vehiclePeriodUnitName;
        return $this;
    }
}

