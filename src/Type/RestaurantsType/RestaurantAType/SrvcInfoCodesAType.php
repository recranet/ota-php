<?php

namespace Recranet\OTA\Type\RestaurantsType\RestaurantAType;

/**
 * Class representing SrvcInfoCodesAType
 */
class SrvcInfoCodesAType
{
    /**
     * This identifies the type of service.
     *
     * @var \Recranet\OTA\Type\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCode
     */
    private $srvcInfoCode = [
        
    ];

    /**
     * Adds as srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @return self
     * @param \Recranet\OTA\Type\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
     */
    public function addToSrvcInfoCode(\Recranet\OTA\Type\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode)
    {
        $this->srvcInfoCode[] = $srvcInfoCode;
        return $this;
    }

    /**
     * isset srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSrvcInfoCode($index)
    {
        return isset($this->srvcInfoCode[$index]);
    }

    /**
     * unset srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSrvcInfoCode($index)
    {
        unset($this->srvcInfoCode[$index]);
    }

    /**
     * Gets as srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @return \Recranet\OTA\Type\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCode()
    {
        return $this->srvcInfoCode;
    }

    /**
     * Sets a new srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param \Recranet\OTA\Type\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCode
     * @return self
     */
    public function setSrvcInfoCode(array $srvcInfoCode)
    {
        $this->srvcInfoCode = $srvcInfoCode;
        return $this;
    }
}

