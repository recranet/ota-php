<?php

namespace Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType;

/**
 * Class representing InventoryCrossRefsAType
 */
class InventoryCrossRefsAType
{
    /**
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType\InventoryCrossRefsAType\InventoryCrossRefAType[] $inventoryCrossRef
     */
    private $inventoryCrossRef = [
        
    ];

    /**
     * Adds as inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType\InventoryCrossRefsAType\InventoryCrossRefAType $inventoryCrossRef
     */
    public function addToInventoryCrossRef(\Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType\InventoryCrossRefsAType\InventoryCrossRefAType $inventoryCrossRef)
    {
        $this->inventoryCrossRef[] = $inventoryCrossRef;
        return $this;
    }

    /**
     * isset inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryCrossRef($index)
    {
        return isset($this->inventoryCrossRef[$index]);
    }

    /**
     * unset inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryCrossRef($index)
    {
        unset($this->inventoryCrossRef[$index]);
    }

    /**
     * Gets as inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType\InventoryCrossRefsAType\InventoryCrossRefAType[]
     */
    public function getInventoryCrossRef()
    {
        return $this->inventoryCrossRef;
    }

    /**
     * Sets a new inventoryCrossRef
     *
     * Cross Reference between sending system and responding system Inventory Codes.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvNotifRS\OTAHotelInvNotifRSAType\InventoryCrossRefsAType\InventoryCrossRefAType[] $inventoryCrossRef
     * @return self
     */
    public function setInventoryCrossRef(array $inventoryCrossRef = null)
    {
        $this->inventoryCrossRef = $inventoryCrossRef;
        return $this;
    }
}

