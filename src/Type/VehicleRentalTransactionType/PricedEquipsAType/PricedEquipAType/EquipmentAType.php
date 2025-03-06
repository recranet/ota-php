<?php

namespace Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType;

use Recranet\OTA\Type\VehicleEquipmentType;

/**
 * Class representing EquipmentAType
 */
class EquipmentAType extends VehicleEquipmentType
{
    /**
     * Used to identify the context of the element and whether the content applies to data at the time of CheckOut or CheckIn.
     *
     * @var string $checkOutCheckInCode
     */
    private $checkOutCheckInCode = null;

    /**
     * Gets as checkOutCheckInCode
     *
     * Used to identify the context of the element and whether the content applies to data at the time of CheckOut or CheckIn.
     *
     * @return string
     */
    public function getCheckOutCheckInCode()
    {
        return $this->checkOutCheckInCode;
    }

    /**
     * Sets a new checkOutCheckInCode
     *
     * Used to identify the context of the element and whether the content applies to data at the time of CheckOut or CheckIn.
     *
     * @param string $checkOutCheckInCode
     * @return self
     */
    public function setCheckOutCheckInCode($checkOutCheckInCode)
    {
        $this->checkOutCheckInCode = $checkOutCheckInCode;
        return $this;
    }
}

