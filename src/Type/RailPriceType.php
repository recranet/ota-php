<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\RailPriceType\PriceAType $price
     */
    private $price = null;

    /**
     * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
     *
     * @var \Recranet\OTA\Type\RailPriceBreakdownType $priceBreakdown
     */
    private $priceBreakdown = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as price
     *
     * The rail price including basic fare, discounts, service charges, fare adjustments, fees and taxes.
     *
     * @return \Recranet\OTA\Type\RailPriceType\PriceAType
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
     * @param \Recranet\OTA\Type\RailPriceType\PriceAType $price
     * @return self
     */
    public function setPrice(?\Recranet\OTA\Type\RailPriceType\PriceAType $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as priceBreakdown
     *
     * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
     *
     * @return \Recranet\OTA\Type\RailPriceBreakdownType
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
     * @param \Recranet\OTA\Type\RailPriceBreakdownType $priceBreakdown
     * @return self
     */
    public function setPriceBreakdown(\Recranet\OTA\Type\RailPriceBreakdownType $priceBreakdown)
    {
        $this->priceBreakdown = $priceBreakdown;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

