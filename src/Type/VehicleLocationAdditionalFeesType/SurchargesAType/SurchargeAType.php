<?php

namespace Recranet\OTA\Type\VehicleLocationAdditionalFeesType\SurchargesAType;

use Recranet\OTA\Type\VehicleChargeType;

/**
 * Class representing SurchargeAType
 */
class SurchargeAType extends VehicleChargeType
{
    /**
     * Information on this one specific surcharge, including a description, etc.
     *
     * @var \Recranet\OTA\Type\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific surcharge, including a description, etc.
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
     * Information on this one specific surcharge, including a description, etc.
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

