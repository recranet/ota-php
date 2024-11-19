<?php

namespace Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType;

/**
 * Class representing HotelStayAType
 */
class HotelStayAType
{
    /**
     * References one or more room stays associated with this hotel stay.
     *
     * @var string[] $roomStayRPH
     */
    private $roomStayRPH = null;

    /**
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @var \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType[] $availability
     */
    private $availability = [
        
    ];

    /**
     * Property Information for the Hotel Stay.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @var \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\PriceAType[] $price
     */
    private $price = [
        
    ];

    /**
     * Adds as roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @return self
     * @param string $roomStayRPH
     */
    public function addToRoomStayRPH($roomStayRPH)
    {
        $this->roomStayRPH[] = $roomStayRPH;
        return $this;
    }

    /**
     * isset roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStayRPH($index)
    {
        return isset($this->roomStayRPH[$index]);
    }

    /**
     * unset roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStayRPH($index)
    {
        unset($this->roomStayRPH[$index]);
    }

    /**
     * Gets as roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @return string[]
     */
    public function getRoomStayRPH()
    {
        return $this->roomStayRPH;
    }

    /**
     * Sets a new roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param string $roomStayRPH
     * @return self
     */
    public function setRoomStayRPH(array $roomStayRPH)
    {
        $this->roomStayRPH = $roomStayRPH;
        return $this;
    }

    /**
     * Adds as availability
     *
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType $availability
     */
    public function addToAvailability(\Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType $availability)
    {
        $this->availability[] = $availability;
        return $this;
    }

    /**
     * isset availability
     *
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @return \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * Details on the hotel stay including the type of availabilty and the date range for which it applies.
     *
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType[] $availability
     * @return self
     */
    public function setAvailability(array $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Property Information for the Hotel Stay.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Property Information for the Hotel Stay.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(?\Recranet\OTA\BasicPropertyInfoType $basicPropertyInfo = null)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }

    /**
     * Adds as price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\PriceAType $price
     */
    public function addToPrice(\Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\PriceAType $price)
    {
        $this->price[] = $price;
        return $this;
    }

    /**
     * isset price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @return \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\PriceAType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\PriceAType[] $price
     * @return self
     */
    public function setPrice(array $price = null)
    {
        $this->price = $price;
        return $this;
    }
}

