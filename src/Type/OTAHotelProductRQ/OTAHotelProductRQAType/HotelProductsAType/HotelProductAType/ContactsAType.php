<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{
    /**
     * When true, send contact information. When false, do not send contact information.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send contact information. When false, do not send contact information.
     *
     * @return bool
     */
    public function getSendAllInd()
    {
        return $this->sendAllInd;
    }

    /**
     * Sets a new sendAllInd
     *
     * When true, send contact information. When false, do not send contact information.
     *
     * @param bool $sendAllInd
     * @return self
     */
    public function setSendAllInd($sendAllInd)
    {
        $this->sendAllInd = $sendAllInd;
        return $this;
    }
}

