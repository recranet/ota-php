<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType;

use Recranet\OTA\VehicleChargeType;

/**
 * Class representing MiscellaneousChargeAType
 */
class MiscellaneousChargeAType extends VehicleChargeType
{
    /**
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @return \Recranet\OTA\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @param \Recranet\OTA\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

