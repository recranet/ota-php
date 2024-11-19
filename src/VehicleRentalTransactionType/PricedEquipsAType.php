<?php

namespace Recranet\OTA\VehicleRentalTransactionType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{
    /**
     * Used to indicate special equipment is returned.
     *
     * @var \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquip
     */
    private $pricedEquip = [
        
    ];

    /**
     * Adds as pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @return self
     * @param \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
     */
    public function addToPricedEquip(\Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquip
     *
     * Used to indicate special equipment is returned.
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
     * Used to indicate special equipment is returned.
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
     * Used to indicate special equipment is returned.
     *
     * @return \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @param \Recranet\OTA\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;
        return $this;
    }
}

