<?php

namespace Recranet\OTA\Type\RailReservationType;

/**
 * Class representing ItineraryAType
 */
class ItineraryAType
{
    /**
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @var \Recranet\OTA\Type\RailReservationType\ItineraryAType\OriginAndDestinationAType[] $originAndDestination
     */
    private $originAndDestination = [
        
    ];

    /**
     * Information on the individual charges that incurred are a result of this specific itinerary.
     *
     * @var \Recranet\OTA\Type\RailChargesType $railCharges
     */
    private $railCharges = null;

    /**
     * A collection of special comments associated with the itinerary.
     *
     * @var \Recranet\OTA\Type\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Adds as originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @return self
     * @param \Recranet\OTA\Type\RailReservationType\ItineraryAType\OriginAndDestinationAType $originAndDestination
     */
    public function addToOriginAndDestination(\Recranet\OTA\Type\RailReservationType\ItineraryAType\OriginAndDestinationAType $originAndDestination)
    {
        $this->originAndDestination[] = $originAndDestination;
        return $this;
    }

    /**
     * isset originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginAndDestination($index)
    {
        return isset($this->originAndDestination[$index]);
    }

    /**
     * unset originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginAndDestination($index)
    {
        unset($this->originAndDestination[$index]);
    }

    /**
     * Gets as originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @return \Recranet\OTA\Type\RailReservationType\ItineraryAType\OriginAndDestinationAType[]
     */
    public function getOriginAndDestination()
    {
        return $this->originAndDestination;
    }

    /**
     * Sets a new originAndDestination
     *
     * Information on one specific journey from one specific origin to one specific destination.
     *
     * @param \Recranet\OTA\Type\RailReservationType\ItineraryAType\OriginAndDestinationAType[] $originAndDestination
     * @return self
     */
    public function setOriginAndDestination(array $originAndDestination)
    {
        $this->originAndDestination = $originAndDestination;
        return $this;
    }

    /**
     * Gets as railCharges
     *
     * Information on the individual charges that incurred are a result of this specific itinerary.
     *
     * @return \Recranet\OTA\Type\RailChargesType
     */
    public function getRailCharges()
    {
        return $this->railCharges;
    }

    /**
     * Sets a new railCharges
     *
     * Information on the individual charges that incurred are a result of this specific itinerary.
     *
     * @param \Recranet\OTA\Type\RailChargesType $railCharges
     * @return self
     */
    public function setRailCharges(?\Recranet\OTA\Type\RailChargesType $railCharges = null)
    {
        $this->railCharges = $railCharges;
        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of special comments associated with the itinerary.
     *
     * @return self
     * @param \Recranet\OTA\Type\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Recranet\OTA\Type\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @return \Recranet\OTA\Type\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of special comments associated with the itinerary.
     *
     * @param \Recranet\OTA\Type\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages = null)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }
}

