<?php

namespace Recranet\OTA\Type\VehicleAvailCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{
    /**
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleChargePurposeType $fee
     */
    public function addToFee(\Recranet\OTA\Type\VehicleChargePurposeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * @return \Recranet\OTA\Type\VehicleChargePurposeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * @param \Recranet\OTA\Type\VehicleChargePurposeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }
}

