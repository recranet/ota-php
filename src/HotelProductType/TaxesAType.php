<?php

namespace Recranet\OTA\HotelProductType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * @var \Recranet\OTA\TaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Adds as tax
     *
     * @return self
     * @param \Recranet\OTA\TaxType $tax
     */
    public function addToTax(\Recranet\OTA\TaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
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
     * @return \Recranet\OTA\TaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \Recranet\OTA\TaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }
}

