<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * When true, send tax information. When false, do not send tax information.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send tax information. When false, do not send tax information.
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
     * When true, send tax information. When false, do not send tax information.
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

