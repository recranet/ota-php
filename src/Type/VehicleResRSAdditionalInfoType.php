<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleResRSAdditionalInfoType
 *
 * The VehicleResRSAdditionalInfoType complex type identifies the supplemental information that is associated with the reservation of a vehicle.
 * XSD Type: VehicleResRSAdditionalInfoType
 */
class VehicleResRSAdditionalInfoType
{
    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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

