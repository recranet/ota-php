<?php

namespace Recranet\OTA;

/**
 * Class representing VendorMessagesType
 *
 * Collection of vendor messages.
 * XSD Type: VendorMessagesType
 */
class VendorMessagesType
{
    /**
     * A specific message associated with this vendor.
     *
     * @var \Recranet\OTA\VendorMessageType[] $vendorMessage
     */
    private $vendorMessage = [
        
    ];

    /**
     * Adds as vendorMessage
     *
     * A specific message associated with this vendor.
     *
     * @return self
     * @param \Recranet\OTA\VendorMessageType $vendorMessage
     */
    public function addToVendorMessage(\Recranet\OTA\VendorMessageType $vendorMessage)
    {
        $this->vendorMessage[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessage
     *
     * A specific message associated with this vendor.
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
     * A specific message associated with this vendor.
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
     * A specific message associated with this vendor.
     *
     * @return \Recranet\OTA\VendorMessageType[]
     */
    public function getVendorMessage()
    {
        return $this->vendorMessage;
    }

    /**
     * Sets a new vendorMessage
     *
     * A specific message associated with this vendor.
     *
     * @param \Recranet\OTA\VendorMessageType[] $vendorMessage
     * @return self
     */
    public function setVendorMessage(array $vendorMessage)
    {
        $this->vendorMessage = $vendorMessage;
        return $this;
    }
}

