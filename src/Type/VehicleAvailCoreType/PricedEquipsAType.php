<?php

namespace Recranet\OTA\Type\VehicleAvailCoreType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{
    /**
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @var \Recranet\OTA\Type\VehicleEquipmentPricedType[] $pricedEquip
     */
    private $pricedEquip = [
        
    ];

    /**
     * Adds as pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquip(\Recranet\OTA\Type\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedEquip($index)
    {
        return isset($this->pricedEquip[$index]);
    }

    /**
     * unset pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedEquip($index)
    {
        unset($this->pricedEquip[$index]);
    }

    /**
     * Gets as pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @return \Recranet\OTA\Type\VehicleEquipmentPricedType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @param \Recranet\OTA\Type\VehicleEquipmentPricedType[] $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;
        return $this;
    }
}

