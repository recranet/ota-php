<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{
    /**
     * When true, send additional guest amount information. When false, do not send additional guest amount information.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send additional guest amount information. When false, do not send additional guest amount information.
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
     * When true, send additional guest amount information. When false, do not send additional guest amount information.
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

