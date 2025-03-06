<?php

namespace Recranet\OTA\Type\VehicleSegmentAdditionalInfoType;

/**
 * Class representing VendorMessagesAType
 */
class VendorMessagesAType
{
    /**
     * A specific vendor message associated with this reservation.
     *
     * @var \Recranet\OTA\Type\FormattedTextType[] $vendorMessage
     */
    private $vendorMessage = [
        
    ];

    /**
     * Adds as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\FormattedTextType $vendorMessage
     */
    public function addToVendorMessage(\Recranet\OTA\Type\FormattedTextType $vendorMessage)
    {
        $this->vendorMessage[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessage($index)
    {
        return isset($this->vendorMessage[$index]);
    }

    /**
     * unset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessage($index)
    {
        unset($this->vendorMessage[$index]);
    }

    /**
     * Gets as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return \Recranet\OTA\Type\FormattedTextType[]
     */
    public function getVendorMessage()
    {
        return $this->vendorMessage;
    }

    /**
     * Sets a new vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param \Recranet\OTA\Type\FormattedTextType[] $vendorMessage
     * @return self
     */
    public function setVendorMessage(array $vendorMessage)
    {
        $this->vendorMessage = $vendorMessage;
        return $this;
    }
}

