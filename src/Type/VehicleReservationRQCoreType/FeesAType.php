<?php

namespace Recranet\OTA\Type\VehicleReservationRQCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{
    /**
     * One specific fee associated with this vehicle reservation.
     *
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
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

