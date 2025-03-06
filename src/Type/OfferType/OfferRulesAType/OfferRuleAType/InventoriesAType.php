<?php

namespace Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType;

/**
 * Class representing InventoriesAType
 */
class InventoriesAType
{
    /**
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
     *
     * @var \Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[] $inventory
     */
    private $inventory = [
        
    ];

    /**
     * Adds as inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
     *
     * @return self
     * @param \Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory
     */
    public function addToInventory(\Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory)
    {
        $this->inventory[] = $inventory;
        return $this;
    }

    /**
     * isset inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
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
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
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
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
     *
     * @return \Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Sets a new inventory
     *
     * Defines the inventory (e.g., Room type or Board) which is required in order for the offer to apply.
     *
     * @param \Recranet\OTA\Type\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[] $inventory
     * @return self
     */
    public function setInventory(array $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }
}

