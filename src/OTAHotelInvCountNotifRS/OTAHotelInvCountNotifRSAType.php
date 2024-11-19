<?php

namespace Recranet\OTA\OTAHotelInvCountNotifRS;

use Recranet\OTA\MessageAcknowledgementType;

/**
 * Class representing OTAHotelInvCountNotifRSAType
 */
class OTAHotelInvCountNotifRSAType extends MessageAcknowledgementType
{
    /**
     * @var \Recranet\OTA\InvCountType $inventories
     */
    private $inventories = null;

    /**
     * Gets as inventories
     *
     * @return \Recranet\OTA\InvCountType
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * @param \Recranet\OTA\InvCountType $inventories
     * @return self
     */
    public function setInventories(?\Recranet\OTA\InvCountType $inventories = null)
    {
        $this->inventories = $inventories;
        return $this;
    }
}

