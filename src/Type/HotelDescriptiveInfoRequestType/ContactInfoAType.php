<?php

namespace Recranet\OTA\Type\HotelDescriptiveInfoRequestType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendData
     */
    private $sendData = null;

    /**
     * Gets as sendData
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendData()
    {
        return $this->sendData;
    }

    /**
     * Sets a new sendData
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendData
     * @return self
     */
    public function setSendData($sendData)
    {
        $this->sendData = $sendData;
        return $this;
    }
}

