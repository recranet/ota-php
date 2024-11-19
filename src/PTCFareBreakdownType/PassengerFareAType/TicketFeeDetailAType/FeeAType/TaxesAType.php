<?php

namespace Recranet\OTA\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * The total amount for all ticket fee taxes.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * The tax for the ticket fee.
     *
     * @var \Recranet\OTA\AirTaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Gets as amount
     *
     * The total amount for all ticket fee taxes.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The total amount for all ticket fee taxes.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as tax
     *
     * The tax for the ticket fee.
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
     * The tax for the ticket fee.
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
     * The tax for the ticket fee.
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
     * The tax for the ticket fee.
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
     * The tax for the ticket fee.
     *
     * @param \Recranet\OTA\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }
}

