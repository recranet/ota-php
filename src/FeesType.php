<?php

namespace Recranet\OTA;

/**
 * Class representing FeesType
 *
 * A collection of fees.
 * XSD Type: FeesType
 */
class FeesType
{
    /**
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @var \Recranet\OTA\FeeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @return self
     * @param \Recranet\OTA\FeeType $fee
     */
    public function addToFee(\Recranet\OTA\FeeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
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
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
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
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @return \Recranet\OTA\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @param \Recranet\OTA\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }
}

