<?php

namespace Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType;

/**
 * Class representing HotelStaysAType
 */
class HotelStaysAType
{
    /**
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @var \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[] $hotelStay
     */
    private $hotelStay = [
        
    ];

    /**
     * Adds as hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType $hotelStay
     */
    public function addToHotelStay(\Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType $hotelStay)
    {
        $this->hotelStay[] = $hotelStay;
        return $this;
    }

    /**
     * isset hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelStay($index)
    {
        return isset($this->hotelStay[$index]);
    }

    /**
     * unset hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelStay($index)
    {
        unset($this->hotelStay[$index]);
    }

    /**
     * Gets as hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @return \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[]
     */
    public function getHotelStay()
    {
        return $this->hotelStay;
    }

    /**
     * Sets a new hotelStay
     *
     * A quick view of the requested hotels' general availability for each day in the requested range.
     *
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[] $hotelStay
     * @return self
     */
    public function setHotelStay(array $hotelStay = null)
    {
        $this->hotelStay = $hotelStay;
        return $this;
    }
}

