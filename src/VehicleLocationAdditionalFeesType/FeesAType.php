<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType;

/**
 * Class representing FeesAType
 */
class FeesAType
{
    /**
     * This element is used to describe one specific fee that may apply.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * General information about the additional fees that may apply.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\FeesAType\FeeAType $fee
     */
    public function addToFee(\Recranet\OTA\VehicleLocationAdditionalFeesType\FeesAType\FeeAType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[] $fee
     * @return self
     */
    public function setFee(array $fee = null)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional fees that may apply.
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
     * General information about the additional fees that may apply.
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

