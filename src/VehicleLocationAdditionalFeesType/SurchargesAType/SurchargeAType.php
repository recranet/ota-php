<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType;

use Recranet\OTA\VehicleChargeType;

/**
 * Class representing SurchargeAType
 */
class SurchargeAType extends VehicleChargeType
{
    /**
     * Information on this one specific surcharge, including a description, etc.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific surcharge, including a description, etc.
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
     * Information on this one specific surcharge, including a description, etc.
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

