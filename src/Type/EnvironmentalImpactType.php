<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EnvironmentalImpactType
 *
 * Property environmental impact and green program and initiative information.
 * XSD Type: EnvironmentalImpactType
 */
class EnvironmentalImpactType
{
    /**
     * Carbon foot print information.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\CarbonFootprintAType $carbonFootprint
     */
    private $carbonFootprint = null;

    /**
     * Water usage information.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\WaterAType $water
     */
    private $water = null;

    /**
     * Property energy and power usage information.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\EnergyAType $energy
     */
    private $energy = null;

    /**
     * Recycling information.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType $recycling
     */
    private $recycling = null;

    /**
     * Other environmental program information.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\GeneralAType $general
     */
    private $general = null;

    /**
     * Gets as carbonFootprint
     *
     * Carbon foot print information.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\CarbonFootprintAType
     */
    public function getCarbonFootprint()
    {
        return $this->carbonFootprint;
    }

    /**
     * Sets a new carbonFootprint
     *
     * Carbon foot print information.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\CarbonFootprintAType $carbonFootprint
     * @return self
     */
    public function setCarbonFootprint(?\Recranet\OTA\Type\EnvironmentalImpactType\CarbonFootprintAType $carbonFootprint = null)
    {
        $this->carbonFootprint = $carbonFootprint;
        return $this;
    }

    /**
     * Gets as water
     *
     * Water usage information.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\WaterAType
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Sets a new water
     *
     * Water usage information.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\WaterAType $water
     * @return self
     */
    public function setWater(?\Recranet\OTA\Type\EnvironmentalImpactType\WaterAType $water = null)
    {
        $this->water = $water;
        return $this;
    }

    /**
     * Gets as energy
     *
     * Property energy and power usage information.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\EnergyAType
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Sets a new energy
     *
     * Property energy and power usage information.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\EnergyAType $energy
     * @return self
     */
    public function setEnergy(?\Recranet\OTA\Type\EnvironmentalImpactType\EnergyAType $energy = null)
    {
        $this->energy = $energy;
        return $this;
    }

    /**
     * Gets as recycling
     *
     * Recycling information.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType
     */
    public function getRecycling()
    {
        return $this->recycling;
    }

    /**
     * Sets a new recycling
     *
     * Recycling information.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType $recycling
     * @return self
     */
    public function setRecycling(?\Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType $recycling = null)
    {
        $this->recycling = $recycling;
        return $this;
    }

    /**
     * Gets as general
     *
     * Other environmental program information.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\GeneralAType
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Sets a new general
     *
     * Other environmental program information.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\GeneralAType $general
     * @return self
     */
    public function setGeneral(?\Recranet\OTA\Type\EnvironmentalImpactType\GeneralAType $general = null)
    {
        $this->general = $general;
        return $this;
    }
}

