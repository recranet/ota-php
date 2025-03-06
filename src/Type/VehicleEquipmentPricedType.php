<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleEquipmentPricedType
 *
 * The VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge.
 * XSD Type: VehicleEquipmentPricedType
 */
class VehicleEquipmentPricedType
{
    /**
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @var bool $required
     */
    private $required = null;

    /**
     * Details about a equipment, such as text or description.
     *
     * @var \Recranet\OTA\Type\VehicleEquipmentType $equipment
     */
    private $equipment = null;

    /**
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @var \Recranet\OTA\Type\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as required
     *
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @return \Recranet\OTA\Type\VehicleEquipmentType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @param \Recranet\OTA\Type\VehicleEquipmentType $equipment
     * @return self
     */
    public function setEquipment(\Recranet\OTA\Type\VehicleEquipmentType $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as charge
     *
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @return \Recranet\OTA\Type\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @param \Recranet\OTA\Type\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Recranet\OTA\Type\VehicleChargeType $charge)
    {
        $this->charge = $charge;
        return $this;
    }
}

