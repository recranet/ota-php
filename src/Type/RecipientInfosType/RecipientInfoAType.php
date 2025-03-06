<?php

namespace Recranet\OTA\Type\RecipientInfosType;

use Recranet\OTA\Type\ContactPersonType;

/**
 * Class representing RecipientInfoAType
 */
class RecipientInfoAType extends ContactPersonType
{
    /**
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $reservationID
     */
    private $reservationID = [
        
    ];

    /**
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @var \Recranet\OTA\Type\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * A collection of comments.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Adds as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $reservationID
     */
    public function addToReservationID(\Recranet\OTA\Type\UniqueIDType $reservationID)
    {
        $this->reservationID[] = $reservationID;
        return $this;
    }

    /**
     * isset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReservationID($index)
    {
        return isset($this->reservationID[$index]);
    }

    /**
     * unset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReservationID($index)
    {
        unset($this->reservationID[$index]);
    }

    /**
     * Gets as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return \Recranet\OTA\Type\UniqueIDType[]
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param \Recranet\OTA\Type\UniqueIDType[] $reservationID
     * @return self
     */
    public function setReservationID(array $reservationID = null)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @return \Recranet\OTA\Type\RecipientInfosType\RecipientInfoAType\ShippingInfoAType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @param \Recranet\OTA\Type\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo
     * @return self
     */
    public function setShippingInfo(?\Recranet\OTA\Type\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo = null)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
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

