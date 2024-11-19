<?php

namespace Recranet\OTA\EMDLiteType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * The tax applicable to the ticket/document.
     *
     * @var \Recranet\OTA\EMDLiteType\TaxesAType\TaxAType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Adds as tax
     *
     * The tax applicable to the ticket/document.
     *
     * @return self
     * @param \Recranet\OTA\EMDLiteType\TaxesAType\TaxAType $tax
     */
    public function addToTax(\Recranet\OTA\EMDLiteType\TaxesAType\TaxAType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * The tax applicable to the ticket/document.
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
     * The tax applicable to the ticket/document.
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
     * The tax applicable to the ticket/document.
     *
     * @return \Recranet\OTA\EMDLiteType\TaxesAType\TaxAType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * The tax applicable to the ticket/document.
     *
     * @param \Recranet\OTA\EMDLiteType\TaxesAType\TaxAType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }
}

