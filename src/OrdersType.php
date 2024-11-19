<?php

namespace Recranet\OTA;

/**
 * Class representing OrdersType
 *
 * Provides the details of one or more orders.
 * XSD Type: OrdersType
 */
class OrdersType
{
    /**
     * Identifies the type of orders.
     *
     * @var string $orderType
     */
    private $orderType = null;

    /**
     * A discount code that applies to the orders.
     *
     * @var string $discountCode
     */
    private $discountCode = null;

    /**
     * The purchase order number of a sales intermediary.
     *
     * @var string $vendorPurchaseOrderID
     */
    private $vendorPurchaseOrderID = null;

    /**
     * The identification number associated to the orders.
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * Information pertaining to a specific order.
     *
     * @var \Recranet\OTA\OrdersType\OrderAType[] $order
     */
    private $order = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as orderType
     *
     * Identifies the type of orders.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets a new orderType
     *
     * Identifies the type of orders.
     *
     * @param string $orderType
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * Gets as discountCode
     *
     * A discount code that applies to the orders.
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * A discount code that applies to the orders.
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    /**
     * Gets as vendorPurchaseOrderID
     *
     * The purchase order number of a sales intermediary.
     *
     * @return string
     */
    public function getVendorPurchaseOrderID()
    {
        return $this->vendorPurchaseOrderID;
    }

    /**
     * Sets a new vendorPurchaseOrderID
     *
     * The purchase order number of a sales intermediary.
     *
     * @param string $vendorPurchaseOrderID
     * @return self
     */
    public function setVendorPurchaseOrderID($vendorPurchaseOrderID)
    {
        $this->vendorPurchaseOrderID = $vendorPurchaseOrderID;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * The identification number associated to the orders.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * The identification number associated to the orders.
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Adds as order
     *
     * Information pertaining to a specific order.
     *
     * @return self
     * @param \Recranet\OTA\OrdersType\OrderAType $order
     */
    public function addToOrder(\Recranet\OTA\OrdersType\OrderAType $order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * isset order
     *
     * Information pertaining to a specific order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order
     *
     * Information pertaining to a specific order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrder($index)
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order
     *
     * Information pertaining to a specific order.
     *
     * @return \Recranet\OTA\OrdersType\OrderAType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Information pertaining to a specific order.
     *
     * @param \Recranet\OTA\OrdersType\OrderAType[] $order
     * @return self
     */
    public function setOrder(array $order = null)
    {
        $this->order = $order;
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

