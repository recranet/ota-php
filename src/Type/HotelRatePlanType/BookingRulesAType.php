<?php

namespace Recranet\OTA\Type\HotelRatePlanType;

use Recranet\OTA\Type\BookingRulesType;

/**
 * Class representing BookingRulesAType
 */
class BookingRulesAType extends BookingRulesType
{
    /**
     * Optional element to indicate Inventory information, when nessary to qualify the booking rule.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType\InventoryInfoAType $inventoryInfo
     */
    private $inventoryInfo = null;

    /**
     * Gets as inventoryInfo
     *
     * Optional element to indicate Inventory information, when nessary to qualify the booking rule.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType\InventoryInfoAType
     */
    public function getInventoryInfo()
    {
        return $this->inventoryInfo;
    }

    /**
     * Sets a new inventoryInfo
     *
     * Optional element to indicate Inventory information, when nessary to qualify the booking rule.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType\InventoryInfoAType $inventoryInfo
     * @return self
     */
    public function setInventoryInfo(?\Recranet\OTA\Type\HotelRatePlanType\BookingRulesAType\InventoryInfoAType $inventoryInfo = null)
    {
        $this->inventoryInfo = $inventoryInfo;
        return $this;
    }
}

