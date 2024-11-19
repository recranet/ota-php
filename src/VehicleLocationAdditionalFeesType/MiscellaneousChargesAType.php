<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType;

/**
 * Class representing MiscellaneousChargesAType
 */
class MiscellaneousChargesAType
{
    /**
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[] $miscellaneousCharge
     */
    private $miscellaneousCharge = [
        
    ];

    /**
     * General information about the additional miscellaneous charges that may apply.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType $miscellaneousCharge
     */
    public function addToMiscellaneousCharge(\Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType $miscellaneousCharge)
    {
        $this->miscellaneousCharge[] = $miscellaneousCharge;
        return $this;
    }

    /**
     * isset miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMiscellaneousCharge($index)
    {
        return isset($this->miscellaneousCharge[$index]);
    }

    /**
     * unset miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMiscellaneousCharge($index)
    {
        unset($this->miscellaneousCharge[$index]);
    }

    /**
     * Gets as miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[]
     */
    public function getMiscellaneousCharge()
    {
        return $this->miscellaneousCharge;
    }

    /**
     * Sets a new miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may apply.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[] $miscellaneousCharge
     * @return self
     */
    public function setMiscellaneousCharge(array $miscellaneousCharge = null)
    {
        $this->miscellaneousCharge = $miscellaneousCharge;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional miscellaneous charges that may apply.
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
     * General information about the additional miscellaneous charges that may apply.
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

