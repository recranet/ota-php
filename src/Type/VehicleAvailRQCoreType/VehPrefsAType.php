<?php

namespace Recranet\OTA\Type\VehicleAvailRQCoreType;

/**
 * Class representing VehPrefsAType
 */
class VehPrefsAType
{
    /**
     * A preference for one specific vehicle type.
     *
     * @var \Recranet\OTA\Type\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPref
     */
    private $vehPref = [
        
    ];

    /**
     * Adds as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
     */
    public function addToVehPref(\Recranet\OTA\Type\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref)
    {
        $this->vehPref[] = $vehPref;
        return $this;
    }

    /**
     * isset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehPref($index)
    {
        return isset($this->vehPref[$index]);
    }

    /**
     * unset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehPref($index)
    {
        unset($this->vehPref[$index]);
    }

    /**
     * Gets as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return \Recranet\OTA\Type\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param \Recranet\OTA\Type\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPref
     * @return self
     */
    public function setVehPref(array $vehPref)
    {
        $this->vehPref = $vehPref;
        return $this;
    }
}

