<?php

namespace Recranet\OTA\OTAHotelProductNotifRQ\OTAHotelProductNotifRQAType\HotelProductsAType;

use Recranet\OTA\HotelProductType;

/**
 * Class representing HotelProductAType
 */
class HotelProductAType extends HotelProductType
{
    /**
     * An enumerated type that indicates whether this is a new product or an update of an existing product.
     *
     * @var string $productNotifType
     */
    private $productNotifType = null;

    /**
     * Gets as productNotifType
     *
     * An enumerated type that indicates whether this is a new product or an update of an existing product.
     *
     * @return string
     */
    public function getProductNotifType()
    {
        return $this->productNotifType;
    }

    /**
     * Sets a new productNotifType
     *
     * An enumerated type that indicates whether this is a new product or an update of an existing product.
     *
     * @param string $productNotifType
     * @return self
     */
    public function setProductNotifType($productNotifType)
    {
        $this->productNotifType = $productNotifType;
        return $this;
    }
}

