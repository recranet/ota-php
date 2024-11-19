<?php

namespace Recranet\OTA\EMDType\CarrierFeeInfoAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @var \Recranet\OTA\AirTaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Adds as tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @return self
     * @param \Recranet\OTA\AirTaxType $tax
     */
    public function addToTax(\Recranet\OTA\AirTaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @return \Recranet\OTA\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @param \Recranet\OTA\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }
}

