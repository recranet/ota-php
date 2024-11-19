<?php

namespace Recranet\OTA\OfferType;

/**
 * Class representing InventoriesAType
 */
class InventoriesAType
{
    /**
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @var \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[] $inventory
     */
    private $inventory = [
        
    ];

    /**
     * Adds as inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\InventoriesAType\InventoryAType $inventory
     */
    public function addToInventory(\Recranet\OTA\OfferType\InventoriesAType\InventoryAType $inventory)
    {
        $this->inventory[] = $inventory;
        return $this;
    }

    /**
     * isset inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventory($index)
    {
        return isset($this->inventory[$index]);
    }

    /**
     * unset inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventory($index)
    {
        unset($this->inventory[$index]);
    }

    /**
     * Gets as inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @return \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[]
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Sets a new inventory
     *
     * Defines the inventory (e.g., Room type or Board) to which the offer may or may not apply.
     *
     * @param \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[] $inventory
     * @return self
     */
    public function setInventory(array $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }
}

