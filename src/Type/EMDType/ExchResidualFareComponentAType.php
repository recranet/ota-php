<?php

namespace Recranet\OTA\Type\EMDType;

use Recranet\OTA\Type\FareComponentType;

/**
 * Class representing ExchResidualFareComponentAType
 */
class ExchResidualFareComponentAType extends FareComponentType
{
    /**
     * The tax, fee, or charge amount information.
     *
     * @var \Recranet\OTA\Type\AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * The total residual value, including applicable tax, fees and charges.
     *
     * @var \Recranet\OTA\Type\EMDType\ExchResidualFareComponentAType\TotalAmountAType $totalAmount
     */
    private $totalAmount = null;

    /**
     * Adds as tax
     *
     * The tax, fee, or charge amount information.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirTaxType $tax
     */
    public function addToTaxes(\Recranet\OTA\Type\AirTaxType $tax)
    {
        $this->taxes[] = $tax;
        return $this;
    }

    /**
     * isset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @return \Recranet\OTA\Type\AirTaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param \Recranet\OTA\Type\AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @return \Recranet\OTA\Type\EMDType\ExchResidualFareComponentAType\TotalAmountAType
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @param \Recranet\OTA\Type\EMDType\ExchResidualFareComponentAType\TotalAmountAType $totalAmount
     * @return self
     */
    public function setTotalAmount(?\Recranet\OTA\Type\EMDType\ExchResidualFareComponentAType\TotalAmountAType $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}

