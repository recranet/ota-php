<?php

namespace Recranet\OTA\Type\HotelProductType;

/**
 * Class representing HotelRefsAType
 */
class HotelRefsAType
{
    /**
     * Identifies hotel information for an alternate system.
     *
     * @var \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[] $hotelRef
     */
    private $hotelRef = [
        
    ];

    /**
     * Adds as hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef
     */
    public function addToHotelRef(\Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef)
    {
        $this->hotelRef[] = $hotelRef;
        return $this;
    }

    /**
     * isset hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @return \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[] $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }
}

