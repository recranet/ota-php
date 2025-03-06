<?php

namespace Recranet\OTA\Type\OTAHotelInvCountNotifRS;

use Recranet\OTA\Type\MessageAcknowledgementType;

/**
 * Class representing OTAHotelInvCountNotifRSAType
 */
class OTAHotelInvCountNotifRSAType extends MessageAcknowledgementType
{
    /**
     * @var \Recranet\OTA\Type\InvCountType $inventories
     */
    private $inventories = null;

    /**
     * Gets as inventories
     *
     * @return \Recranet\OTA\Type\InvCountType
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * @param \Recranet\OTA\Type\InvCountType $inventories
     * @return self
     */
    public function setInventories(?\Recranet\OTA\Type\InvCountType $inventories = null)
    {
        $this->inventories = $inventories;
        return $this;
    }
}

