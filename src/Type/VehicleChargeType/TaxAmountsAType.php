<?php

namespace Recranet\OTA\Type\VehicleChargeType;

/**
 * Class representing TaxAmountsAType
 */
class TaxAmountsAType
{
    /**
     * Detailed information on one specific tax associated with a specific charge
     *
     * @var \Recranet\OTA\Type\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmount
     */
    private $taxAmount = [
        
    ];

    /**
     * Adds as taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
     */
    public function addToTaxAmount(\Recranet\OTA\Type\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount)
    {
        $this->taxAmount[] = $taxAmount;
        return $this;
    }

    /**
     * isset taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxAmount($index)
    {
        return isset($this->taxAmount[$index]);
    }

    /**
     * unset taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxAmount($index)
    {
        unset($this->taxAmount[$index]);
    }

    /**
     * Gets as taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return \Recranet\OTA\Type\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param \Recranet\OTA\Type\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmount
     * @return self
     */
    public function setTaxAmount(array $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
}

