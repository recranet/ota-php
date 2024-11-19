<?php

namespace Recranet\OTA;

/**
 * Class representing RailPriceType
 *
 * Information about rail pricing, including price details and price breakdown.
 * XSD Type: RailPriceType
 */
class RailPriceType
{
    /**
     * The rail price including basic fare, discounts, service charges, fare adjustments, fees and taxes.
     *
     * @var \Recranet\OTA\RailPriceType\PriceAType $price
     */
    private $price = null;

    /**
     * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
     *
     * @var \Recranet\OTA\RailPriceBreakdownType $priceBreakdown
     */
    private $priceBreakdown = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as price
     *
     * The rail price including basic fare, discounts, service charges, fare adjustments, fees and taxes.
     *
     * @return \Recranet\OTA\RailPriceType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The rail price including basic fare, discounts, service charges, fare adjustments, fees and taxes.
     *
     * @param \Recranet\OTA\RailPriceType\PriceAType $price
     * @return self
     */
    public function setPrice(?\Recranet\OTA\RailPriceType\PriceAType $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as priceBreakdown
     *
     * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
     *
     * @return \Recranet\OTA\RailPriceBreakdownType
     */
    public function getPriceBreakdown()
    {
        return $this->priceBreakdown;
    }

    /**
     * Sets a new priceBreakdown
     *
     * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
     *
     * @param \Recranet\OTA\RailPriceBreakdownType $priceBreakdown
     * @return self
     */
    public function setPriceBreakdown(\Recranet\OTA\RailPriceBreakdownType $priceBreakdown)
    {
        $this->priceBreakdown = $priceBreakdown;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

