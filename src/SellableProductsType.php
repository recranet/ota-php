<?php

namespace Recranet\OTA;

/**
 * Class representing SellableProductsType
 *
 * The SellableProduct class defines the inventoried item for this rate plan.
 * XSD Type: SellableProductsType
 */
class SellableProductsType
{
    /**
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @var \Recranet\OTA\SellableProductsType\SellableProductAType[] $sellableProduct
     */
    private $sellableProduct = [
        
    ];

    /**
     * Adds as sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @return self
     * @param \Recranet\OTA\SellableProductsType\SellableProductAType $sellableProduct
     */
    public function addToSellableProduct(\Recranet\OTA\SellableProductsType\SellableProductAType $sellableProduct)
    {
        $this->sellableProduct[] = $sellableProduct;
        return $this;
    }

    /**
     * isset sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellableProduct($index)
    {
        return isset($this->sellableProduct[$index]);
    }

    /**
     * unset sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellableProduct($index)
    {
        unset($this->sellableProduct[$index]);
    }

    /**
     * Gets as sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @return \Recranet\OTA\SellableProductsType\SellableProductAType[]
     */
    public function getSellableProduct()
    {
        return $this->sellableProduct;
    }

    /**
     * Sets a new sellableProduct
     *
     * The individual sellable product. A sellable product may be a guest room, a meeting room or an inventory block. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory information.
     *
     * @param \Recranet\OTA\SellableProductsType\SellableProductAType[] $sellableProduct
     * @return self
     */
    public function setSellableProduct(array $sellableProduct)
    {
        $this->sellableProduct = $sellableProduct;
        return $this;
    }
}

