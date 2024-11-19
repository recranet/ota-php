<?php

namespace Recranet\OTA\VehicleAvailRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{
    /**
     * A preference for one specific piece of equipment
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     */
    private $specialEquipPref = [
        
    ];

    /**
     * Adds as specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @return self
     * @param \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
     */
    public function addToSpecialEquipPref(\Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref)
    {
        $this->specialEquipPref[] = $specialEquipPref;
        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * A preference for one specific piece of equipment
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
     * A preference for one specific piece of equipment
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
     * A preference for one specific piece of equipment
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * A preference for one specific piece of equipment
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;
        return $this;
    }
}

