<?php

namespace Recranet\OTA\Type\VehicleRentalTransactionType;

/**
 * Class representing FeesAType
 */
class FeesAType
{
    /**
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
     *
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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

