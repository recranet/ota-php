<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleResRSCoreType
 *
 * Identifies the core, or common, information that is associated with the reservation of a vehicle.
 * XSD Type: VehicleResRSCoreType
 */
class VehicleResRSCoreType
{
    /**
     * @var \Recranet\OTA\Type\VehicleReservationType $vehReservation
     */
    private $vehReservation = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as vehReservation
     *
     * @return \Recranet\OTA\Type\VehicleReservationType
     */
    public function getVehReservation()
    {
        return $this->vehReservation;
    }

    /**
     * Sets a new vehReservation
     *
     * @param \Recranet\OTA\Type\VehicleReservationType $vehReservation
     * @return self
     */
    public function setVehReservation(\Recranet\OTA\Type\VehicleReservationType $vehReservation)
    {
        $this->vehReservation = $vehReservation;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

