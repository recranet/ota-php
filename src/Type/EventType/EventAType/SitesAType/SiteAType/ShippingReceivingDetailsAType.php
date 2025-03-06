<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType;

/**
 * Class representing ShippingReceivingDetailsAType
 */
class ShippingReceivingDetailsAType
{
    /**
     * The number of privately owned vehicle (POV) deliveries.
     *
     * @var int $privateVehicleDeliveryQuantity
     */
    private $privateVehicleDeliveryQuantity = null;

    /**
     * The shipping and receiving details for a specific shipment.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType\ShippingReceivingDetailAType[] $shippingReceivingDetail
     */
    private $shippingReceivingDetail = [
        
    ];

    /**
     * A collection of comments pertaining to a shipment.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as privateVehicleDeliveryQuantity
     *
     * The number of privately owned vehicle (POV) deliveries.
     *
     * @return int
     */
    public function getPrivateVehicleDeliveryQuantity()
    {
        return $this->privateVehicleDeliveryQuantity;
    }

    /**
     * Sets a new privateVehicleDeliveryQuantity
     *
     * The number of privately owned vehicle (POV) deliveries.
     *
     * @param int $privateVehicleDeliveryQuantity
     * @return self
     */
    public function setPrivateVehicleDeliveryQuantity($privateVehicleDeliveryQuantity)
    {
        $this->privateVehicleDeliveryQuantity = $privateVehicleDeliveryQuantity;
        return $this;
    }

    /**
     * Adds as shippingReceivingDetail
     *
     * The shipping and receiving details for a specific shipment.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType\ShippingReceivingDetailAType $shippingReceivingDetail
     */
    public function addToShippingReceivingDetail(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType\ShippingReceivingDetailAType $shippingReceivingDetail)
    {
        $this->shippingReceivingDetail[] = $shippingReceivingDetail;
        return $this;
    }

    /**
     * isset shippingReceivingDetail
     *
     * The shipping and receiving details for a specific shipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingReceivingDetail($index)
    {
        return isset($this->shippingReceivingDetail[$index]);
    }

    /**
     * unset shippingReceivingDetail
     *
     * The shipping and receiving details for a specific shipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingReceivingDetail($index)
    {
        unset($this->shippingReceivingDetail[$index]);
    }

    /**
     * Gets as shippingReceivingDetail
     *
     * The shipping and receiving details for a specific shipment.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType\ShippingReceivingDetailAType[]
     */
    public function getShippingReceivingDetail()
    {
        return $this->shippingReceivingDetail;
    }

    /**
     * Sets a new shippingReceivingDetail
     *
     * The shipping and receiving details for a specific shipment.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType\ShippingReceivingDetailAType[] $shippingReceivingDetail
     * @return self
     */
    public function setShippingReceivingDetail(array $shippingReceivingDetail)
    {
        $this->shippingReceivingDetail = $shippingReceivingDetail;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to a shipment.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to a shipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to a shipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to a shipment.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to a shipment.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

