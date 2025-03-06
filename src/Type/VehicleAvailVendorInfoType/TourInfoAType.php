<?php

namespace Recranet\OTA\Type\VehicleAvailVendorInfoType;

use Recranet\OTA\Type\VehicleTourInfoType;

/**
 * Class representing TourInfoAType
 */
class TourInfoAType extends VehicleTourInfoType
{
    /**
     * A reference placeholder for this tour info.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A reference placeholder for this tour info.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference placeholder for this tour info.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }
}

