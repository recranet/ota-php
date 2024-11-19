<?php

namespace Recranet\OTA\VehicleSegmentCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{
    /**
     * One specific fee associated with the vehicle reservation.
     *
     * @var \Recranet\OTA\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * One specific fee associated with the vehicle reservation.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargePurposeType $fee
     */
    public function addToFee(\Recranet\OTA\VehicleChargePurposeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
     *
     * @return \Recranet\OTA\VehicleChargePurposeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * One specific fee associated with the vehicle reservation.
     *
     * @param \Recranet\OTA\VehicleChargePurposeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }
}

