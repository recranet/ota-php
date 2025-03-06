<?php

namespace Recranet\OTA\Type\EnvironmentalImpactType\EnergyAType;

/**
 * Class representing UsageAType
 */
class UsageAType
{
    /**
     * Power amount.
     * Example: 677
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Power type.
     * Example: Electric
     *
     * @var \Recranet\OTA\Type\ListPowerType $powerType
     */
    private $powerType = null;

    /**
     * Power quantity unit of measure.
     * Example: Killowatt(s)
     *
     * @var \Recranet\OTA\Type\ListUnitOfMeasureType $powerTypeUOM
     */
    private $powerTypeUOM = null;

    /**
     * Gets as quantity
     *
     * Power amount.
     * Example: 677
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Power amount.
     * Example: 677
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as powerType
     *
     * Power type.
     * Example: Electric
     *
     * @return \Recranet\OTA\Type\ListPowerType
     */
    public function getPowerType()
    {
        return $this->powerType;
    }

    /**
     * Sets a new powerType
     *
     * Power type.
     * Example: Electric
     *
     * @param \Recranet\OTA\Type\ListPowerType $powerType
     * @return self
     */
    public function setPowerType(?\Recranet\OTA\Type\ListPowerType $powerType = null)
    {
        $this->powerType = $powerType;
        return $this;
    }

    /**
     * Gets as powerTypeUOM
     *
     * Power quantity unit of measure.
     * Example: Killowatt(s)
     *
     * @return \Recranet\OTA\Type\ListUnitOfMeasureType
     */
    public function getPowerTypeUOM()
    {
        return $this->powerTypeUOM;
    }

    /**
     * Sets a new powerTypeUOM
     *
     * Power quantity unit of measure.
     * Example: Killowatt(s)
     *
     * @param \Recranet\OTA\Type\ListUnitOfMeasureType $powerTypeUOM
     * @return self
     */
    public function setPowerTypeUOM(?\Recranet\OTA\Type\ListUnitOfMeasureType $powerTypeUOM = null)
    {
        $this->powerTypeUOM = $powerTypeUOM;
        return $this;
    }
}

