<?php

namespace Recranet\OTA\Type\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType;

use Recranet\OTA\Type\VehicleChargeType;

/**
 * Class representing MiscellaneousChargeAType
 */
class MiscellaneousChargeAType extends VehicleChargeType
{
    /**
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @var \Recranet\OTA\Type\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @return \Recranet\OTA\Type\FormattedTextType
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
     * @param \Recranet\OTA\Type\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\Type\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

