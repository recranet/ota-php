<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleResRSCoreType
 *
 * Identifies the core, or common, information that is associated with the reservation of a vehicle.
 * XSD Type: VehicleResRSCoreType
 */
class VehicleResRSCoreType
{
    /**
     * @var \Recranet\OTA\VehicleReservationType $vehReservation
     */
    private $vehReservation = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as vehReservation
     *
     * @return \Recranet\OTA\VehicleReservationType
     */
    public function getVehReservation()
    {
        return $this->vehReservation;
    }

    /**
     * Sets a new vehReservation
     *
     * @param \Recranet\OTA\VehicleReservationType $vehReservation
     * @return self
     */
    public function setVehReservation(\Recranet\OTA\VehicleReservationType $vehReservation)
    {
        $this->vehReservation = $vehReservation;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

