<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing HotelInfoCodesAType
 */
class HotelInfoCodesAType
{
    /**
     * Contains code information about the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[] $hotelInfoCode
     */
    private $hotelInfoCode = [
        
    ];

    /**
     * Adds as hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode
     */
    public function addToHotelInfoCode(\Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode)
    {
        $this->hotelInfoCode[] = $hotelInfoCode;
        return $this;
    }

    /**
     * isset hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelInfoCode($index)
    {
        return isset($this->hotelInfoCode[$index]);
    }

    /**
     * unset hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelInfoCode($index)
    {
        unset($this->hotelInfoCode[$index]);
    }

    /**
     * Gets as hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     */
    public function getHotelInfoCode()
    {
        return $this->hotelInfoCode;
    }

    /**
     * Sets a new hotelInfoCode
     *
     * Contains code information about the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[] $hotelInfoCode
     * @return self
     */
    public function setHotelInfoCode(array $hotelInfoCode)
    {
        $this->hotelInfoCode = $hotelInfoCode;
        return $this;
    }
}

