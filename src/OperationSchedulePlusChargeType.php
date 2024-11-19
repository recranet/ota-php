<?php

namespace Recranet\OTA;

/**
 * Class representing OperationSchedulePlusChargeType
 *
 * This allows a charge to be associated with operating times (e.g. a golf tee time may be more expensive during peak hours v. off peak hours).
 * XSD Type: OperationSchedulePlusChargeType
 */
class OperationSchedulePlusChargeType extends OperationScheduleType
{
    /**
     * Cost associated with an amenity.
     *
     * @var \Recranet\OTA\FeeType[] $charge
     */
    private $charge = [
        
    ];

    /**
     * Adds as charge
     *
     * Cost associated with an amenity.
     *
     * @return self
     * @param \Recranet\OTA\FeeType $charge
     */
    public function addToCharge(\Recranet\OTA\FeeType $charge)
    {
        $this->charge[] = $charge;
        return $this;
    }

    /**
     * isset charge
     *
     * Cost associated with an amenity.
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
     * Cost associated with an amenity.
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
     * Cost associated with an amenity.
     *
     * @return \Recranet\OTA\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Cost associated with an amenity.
     *
     * @param \Recranet\OTA\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge = null)
    {
        $this->charge = $charge;
        return $this;
    }
}

