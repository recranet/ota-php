<?php

namespace Recranet\OTA\Type\HotelRatePlanType\RatePlanShouldersAType;

/**
 * Class representing RatePlanShoulderAType
 */
class RatePlanShoulderAType
{
    /**
     * This is a reference placeholder, used as an index for this object.
     *
     * @var string $shoulderRPH
     */
    private $shoulderRPH = null;

    /**
     * Limit of inventory that can be sold before the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @var int $preShoulderSellLimit
     */
    private $preShoulderSellLimit = null;

    /**
     * Limit of inventory that can be sold after the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @var int $postShoulderSellLimit
     */
    private $postShoulderSellLimit = null;

    /**
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @var \DateTime $preShoulderStartDate
     */
    private $preShoulderStartDate = null;

    /**
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @var \DateTime $postShoulderEndDate
     */
    private $postShoulderEndDate = null;

    /**
     * @var \Recranet\OTA\Type\SellableProductsType\SellableProductAType[] $sellableProducts
     */
    private $sellableProducts = null;

    /**
     * Gets as shoulderRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @return string
     */
    public function getShoulderRPH()
    {
        return $this->shoulderRPH;
    }

    /**
     * Sets a new shoulderRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @param string $shoulderRPH
     * @return self
     */
    public function setShoulderRPH($shoulderRPH)
    {
        $this->shoulderRPH = $shoulderRPH;
        return $this;
    }

    /**
     * Gets as preShoulderSellLimit
     *
     * Limit of inventory that can be sold before the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @return int
     */
    public function getPreShoulderSellLimit()
    {
        return $this->preShoulderSellLimit;
    }

    /**
     * Sets a new preShoulderSellLimit
     *
     * Limit of inventory that can be sold before the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @param int $preShoulderSellLimit
     * @return self
     */
    public function setPreShoulderSellLimit($preShoulderSellLimit)
    {
        $this->preShoulderSellLimit = $preShoulderSellLimit;
        return $this;
    }

    /**
     * Gets as postShoulderSellLimit
     *
     * Limit of inventory that can be sold after the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @return int
     */
    public function getPostShoulderSellLimit()
    {
        return $this->postShoulderSellLimit;
    }

    /**
     * Sets a new postShoulderSellLimit
     *
     * Limit of inventory that can be sold after the StayDateRange. It should be understood that any stay must book at least one date in the StayDateRange.
     *
     * @param int $postShoulderSellLimit
     * @return self
     */
    public function setPostShoulderSellLimit($postShoulderSellLimit)
    {
        $this->postShoulderSellLimit = $postShoulderSellLimit;
        return $this;
    }

    /**
     * Gets as preShoulderStartDate
     *
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @return \DateTime
     */
    public function getPreShoulderStartDate()
    {
        return $this->preShoulderStartDate;
    }

    /**
     * Sets a new preShoulderStartDate
     *
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @param \DateTime $preShoulderStartDate
     * @return self
     */
    public function setPreShoulderStartDate(\DateTime $preShoulderStartDate)
    {
        $this->preShoulderStartDate = $preShoulderStartDate;
        return $this;
    }

    /**
     * Gets as postShoulderEndDate
     *
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @return \DateTime
     */
    public function getPostShoulderEndDate()
    {
        return $this->postShoulderEndDate;
    }

    /**
     * Sets a new postShoulderEndDate
     *
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @param \DateTime $postShoulderEndDate
     * @return self
     */
    public function setPostShoulderEndDate(\DateTime $postShoulderEndDate)
    {
        $this->postShoulderEndDate = $postShoulderEndDate;
        return $this;
    }

    /**
     * Adds as sellableProduct
     *
     * @return self
     * @param \Recranet\OTA\Type\SellableProductsType\SellableProductAType $sellableProduct
     */
    public function addToSellableProducts(\Recranet\OTA\Type\SellableProductsType\SellableProductAType $sellableProduct)
    {
        $this->sellableProducts[] = $sellableProduct;
        return $this;
    }

    /**
     * isset sellableProducts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellableProducts($index)
    {
        return isset($this->sellableProducts[$index]);
    }

    /**
     * unset sellableProducts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellableProducts($index)
    {
        unset($this->sellableProducts[$index]);
    }

    /**
     * Gets as sellableProducts
     *
     * @return \Recranet\OTA\Type\SellableProductsType\SellableProductAType[]
     */
    public function getSellableProducts()
    {
        return $this->sellableProducts;
    }

    /**
     * Sets a new sellableProducts
     *
     * @param \Recranet\OTA\Type\SellableProductsType\SellableProductAType[] $sellableProducts
     * @return self
     */
    public function setSellableProducts(array $sellableProducts = null)
    {
        $this->sellableProducts = $sellableProducts;
        return $this;
    }
}

