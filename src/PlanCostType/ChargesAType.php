<?php

namespace Recranet\OTA\PlanCostType;

/**
 * Class representing ChargesAType
 */
class ChargesAType
{
    /**
     * Contains a description and value of a single additional charge to the cost of the plan.
     *
     * @var \Recranet\OTA\FeeType[] $charge
     */
    private $charge = [
        
    ];

    /**
     * Adds as charge
     *
     * Contains a description and value of a single additional charge to the cost of the plan.
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
     * Contains a description and value of a single additional charge to the cost of the plan.
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
     * Contains a description and value of a single additional charge to the cost of the plan.
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
     * Contains a description and value of a single additional charge to the cost of the plan.
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
     * Contains a description and value of a single additional charge to the cost of the plan.
     *
     * @param \Recranet\OTA\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;
        return $this;
    }
}

