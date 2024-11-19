<?php

namespace Recranet\OTA;

/**
 * Class representing AirPurchasedOfferType
 *
 * Contains an array of ancillary items being or previously purchased for this trip. Internal airline and ATPCO encoding for airline delivered ancillary items and third party trip insurance are supported.
 * XSD Type: AirPurchasedOfferType
 */
class AirPurchasedOfferType
{
    /**
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @var \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[] $purchasedItem
     */
    private $purchasedItem = [
        
    ];

    /**
     * Adds as purchasedItem
     *
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @return self
     * @param \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType $purchasedItem
     */
    public function addToPurchasedItem(\Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType $purchasedItem)
    {
        $this->purchasedItem[] = $purchasedItem;
        return $this;
    }

    /**
     * isset purchasedItem
     *
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurchasedItem($index)
    {
        return isset($this->purchasedItem[$index]);
    }

    /**
     * unset purchasedItem
     *
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurchasedItem($index)
    {
        unset($this->purchasedItem[$index]);
    }

    /**
     * Gets as purchasedItem
     *
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @return \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[]
     */
    public function getPurchasedItem()
    {
        return $this->purchasedItem;
    }

    /**
     * Sets a new purchasedItem
     *
     * An item previously purchased for this trip using airline or ATPCO encoding. This list is used to filter redundant offers.
     *
     * @param \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[] $purchasedItem
     * @return self
     */
    public function setPurchasedItem(array $purchasedItem)
    {
        $this->purchasedItem = $purchasedItem;
        return $this;
    }
}

