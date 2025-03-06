<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType;

/**
 * Class representing ShippingReceivingDetailAType
 */
class ShippingReceivingDetailAType
{
    /**
     * The tracking number for the shipment.
     *
     * @var string $trackingNumber
     */
    private $trackingNumber = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * The date the shipment is expected to be delivered.
     *
     * @var \DateTime $expectedDeliveryDate
     */
    private $expectedDeliveryDate = null;

    /**
     * Contact information for the sender, receiver and shipping company.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Gets as trackingNumber
     *
     * The tracking number for the shipment.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Sets a new trackingNumber
     *
     * The tracking number for the shipment.
     *
     * @param string $trackingNumber
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as expectedDeliveryDate
     *
     * The date the shipment is expected to be delivered.
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * Sets a new expectedDeliveryDate
     *
     * The date the shipment is expected to be delivered.
     *
     * @param \DateTime $expectedDeliveryDate
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContact(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information for the sender, receiver and shipping company.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}

