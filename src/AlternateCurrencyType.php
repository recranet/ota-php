<?php

namespace Recranet\OTA;

/**
 * Class representing AlternateCurrencyType
 *
 * Alternate currency information for loyalty program currencies definition.
 * XSD Type: AlternateCurrencyType
 */
class AlternateCurrencyType
{
    /**
     * Award code.
     * Example: GUESTRWD12
     * Note: This is an award code associated with the redemption amount.
     *
     * @var string $awardCode
     */
    private $awardCode = null;

    /**
     * Discount percentage.
     * Example: 6
     * Note: This is a percentage used for discount calculations.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Redemption quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency required or used to redeem this award.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Unit of loyalty program currency.
     * Example: Miles
     *
     * @var \Recranet\OTA\ListLoyaltyPrgCurrencyType $currencyType
     */
    private $currencyType = null;

    /**
     * Conversion ratio information.
     *
     * @var \Recranet\OTA\AlternateCurrencyType\ConversionAType $conversion
     */
    private $conversion = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as awardCode
     *
     * Award code.
     * Example: GUESTRWD12
     * Note: This is an award code associated with the redemption amount.
     *
     * @return string
     */
    public function getAwardCode()
    {
        return $this->awardCode;
    }

    /**
     * Sets a new awardCode
     *
     * Award code.
     * Example: GUESTRWD12
     * Note: This is an award code associated with the redemption amount.
     *
     * @param string $awardCode
     * @return self
     */
    public function setAwardCode($awardCode)
    {
        $this->awardCode = $awardCode;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Discount percentage.
     * Example: 6
     * Note: This is a percentage used for discount calculations.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * Discount percentage.
     * Example: 6
     * Note: This is a percentage used for discount calculations.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Redemption quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency required or used to redeem this award.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Redemption quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency required or used to redeem this award.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as currencyType
     *
     * Unit of loyalty program currency.
     * Example: Miles
     *
     * @return \Recranet\OTA\ListLoyaltyPrgCurrencyType
     */
    public function getCurrencyType()
    {
        return $this->currencyType;
    }

    /**
     * Sets a new currencyType
     *
     * Unit of loyalty program currency.
     * Example: Miles
     *
     * @param \Recranet\OTA\ListLoyaltyPrgCurrencyType $currencyType
     * @return self
     */
    public function setCurrencyType(?\Recranet\OTA\ListLoyaltyPrgCurrencyType $currencyType = null)
    {
        $this->currencyType = $currencyType;
        return $this;
    }

    /**
     * Gets as conversion
     *
     * Conversion ratio information.
     *
     * @return \Recranet\OTA\AlternateCurrencyType\ConversionAType
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * Sets a new conversion
     *
     * Conversion ratio information.
     *
     * @param \Recranet\OTA\AlternateCurrencyType\ConversionAType $conversion
     * @return self
     */
    public function setConversion(?\Recranet\OTA\AlternateCurrencyType\ConversionAType $conversion = null)
    {
        $this->conversion = $conversion;
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

