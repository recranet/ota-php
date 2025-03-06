<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{
    /**
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Adds as service
     *
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType $service
     */
    public function addToService(\Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }
}

