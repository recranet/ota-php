<?php

namespace Recranet\OTA\Type\RailChargesType;

/**
 * Class representing ChargesAType
 */
class ChargesAType
{
    /**
     * Detailed information on one specific charge.
     *
     * @var \Recranet\OTA\Type\FeeType[] $charge
     */
    private $charge = [
        
    ];

    /**
     * Adds as charge
     *
     * Detailed information on one specific charge.
     *
     * @return self
     * @param \Recranet\OTA\Type\FeeType $charge
     */
    public function addToCharge(\Recranet\OTA\Type\FeeType $charge)
    {
        $this->charge[] = $charge;
        return $this;
    }

    /**
     * isset charge
     *
     * Detailed information on one specific charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Detailed information on one specific charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Detailed information on one specific charge.
     *
     * @return \Recranet\OTA\Type\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Detailed information on one specific charge.
     *
     * @param \Recranet\OTA\Type\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;
        return $this;
    }
}

