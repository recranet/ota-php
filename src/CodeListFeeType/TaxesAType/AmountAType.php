<?php

namespace Recranet\OTA\CodeListFeeType\TaxesAType;

/**
 * Class representing AmountAType
 */
class AmountAType
{
    /**
     * Money amount and currency encoding information.
     *
     * @var \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\CurrencyAType $currency
     */
    private $currency = null;

    /**
     * Alternate currency information.
     *
     * @var \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\AlternateCurrencyAType $alternateCurrency
     */
    private $alternateCurrency = null;

    /**
     * Fee percentage.
     * Example: 6.25
     * Note: This is a percentage of another amount that this fee or tax is based on.
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * Gets as currency
     *
     * Money amount and currency encoding information.
     *
     * @return \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\CurrencyAType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Money amount and currency encoding information.
     *
     * @param \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\CurrencyAType $currency
     * @return self
     */
    public function setCurrency(?\Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\CurrencyAType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as alternateCurrency
     *
     * Alternate currency information.
     *
     * @return \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\AlternateCurrencyAType
     */
    public function getAlternateCurrency()
    {
        return $this->alternateCurrency;
    }

    /**
     * Sets a new alternateCurrency
     *
     * Alternate currency information.
     *
     * @param \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\AlternateCurrencyAType $alternateCurrency
     * @return self
     */
    public function setAlternateCurrency(?\Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType\AlternateCurrencyAType $alternateCurrency = null)
    {
        $this->alternateCurrency = $alternateCurrency;
        return $this;
    }

    /**
     * Gets as percent
     *
     * Fee percentage.
     * Example: 6.25
     * Note: This is a percentage of another amount that this fee or tax is based on.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * Fee percentage.
     * Example: 6.25
     * Note: This is a percentage of another amount that this fee or tax is based on.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }
}

