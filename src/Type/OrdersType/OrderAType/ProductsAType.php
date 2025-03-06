<?php

namespace Recranet\OTA\Type\OrdersType\OrderAType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{
    /**
     * The details associated to a specific product.
     *
     * @var \Recranet\OTA\Type\OrdersType\OrderAType\ProductsAType\ProductAType[] $product
     */
    private $product = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as product
     *
     * The details associated to a specific product.
     *
     * @return self
     * @param \Recranet\OTA\Type\OrdersType\OrderAType\ProductsAType\ProductAType $product
     */
    public function addToProduct(\Recranet\OTA\Type\OrdersType\OrderAType\ProductsAType\ProductAType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * The details associated to a specific product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * The details associated to a specific product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * The details associated to a specific product.
     *
     * @return \Recranet\OTA\Type\OrdersType\OrderAType\ProductsAType\ProductAType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * The details associated to a specific product.
     *
     * @param \Recranet\OTA\Type\OrdersType\OrderAType\ProductsAType\ProductAType[] $product
     * @return self
     */
    public function setProduct(array $product = null)
    {
        $this->product = $product;
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

