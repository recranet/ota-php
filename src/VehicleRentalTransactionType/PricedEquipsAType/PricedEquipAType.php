<?php

namespace Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType;

/**
 * Class representing PricedEquipAType
 */
class PricedEquipAType
{
    /**
     * @var \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[] $equipment
     */
    private $equipment = [
        
    ];

    /**
     * @var \Recranet\OTA\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as equipment
     *
     * @return self
     * @param \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment
     */
    public function addToEquipment(\Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment)
    {
        $this->equipment[] = $equipment;
        return $this;
    }

    /**
     * isset equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * @return \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * @param \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as charge
     *
     * @return \Recranet\OTA\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * @param \Recranet\OTA\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(?\Recranet\OTA\VehicleChargeType $charge = null)
    {
        $this->charge = $charge;
        return $this;
    }
}

