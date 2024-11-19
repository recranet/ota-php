<?php

namespace Recranet\OTA\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing ValueAddInclusionsAType
 */
class ValueAddInclusionsAType
{
    /**
     * When true, send value add inclusions. When false, do not send value add inclusions.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send value add inclusions. When false, do not send value add inclusions.
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
     * When true, send value add inclusions. When false, do not send value add inclusions.
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

