<?php

namespace Recranet\OTA\Type\VehicleReservationRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{
    /**
     * @var \Recranet\OTA\Type\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     */
    private $specialEquipPref = [
        
    ];

    /**
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
     *
     * @var \Recranet\OTA\Type\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as specialEquipPref
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
     */
    public function addToSpecialEquipPref(\Recranet\OTA\Type\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref)
    {
        $this->specialEquipPref[] = $specialEquipPref;
        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialEquipPref($index)
    {
        return isset($this->specialEquipPref[$index]);
    }

    /**
     * unset specialEquipPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialEquipPref($index)
    {
        unset($this->specialEquipPref[$index]);
    }

    /**
     * Gets as specialEquipPref
     *
     * @return \Recranet\OTA\Type\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * @param \Recranet\OTA\Type\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;
        return $this;
    }

    /**
     * Gets as charge
     *
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
     *
     * @return \Recranet\OTA\Type\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
     *
     * @param \Recranet\OTA\Type\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(?\Recranet\OTA\Type\VehicleChargeType $charge = null)
    {
        $this->charge = $charge;
        return $this;
    }
}

