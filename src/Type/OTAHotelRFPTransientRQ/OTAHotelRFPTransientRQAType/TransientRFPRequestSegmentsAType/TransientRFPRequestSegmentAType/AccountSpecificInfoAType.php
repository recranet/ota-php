<?php

namespace Recranet\OTA\Type\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType;

/**
 * Class representing AccountSpecificInfoAType
 */
class AccountSpecificInfoAType
{
    /**
     * This is the potential number of room nights that the requestor believes they will produce for the single specified hotel.
     *
     * @var int $hotelPotentialRoomQuantity
     */
    private $hotelPotentialRoomQuantity = null;

    /**
     * This is the potential number of room nights that the requestor believes they will produce for the specified city.
     *
     * @var int $cityPotentialRoomQuantity
     */
    private $cityPotentialRoomQuantity = null;

    /**
     * When true, this means hotels that weren't in the original request can offer their own negotiated rate for this specific account.
     *
     * @var bool $additionalHotelIndicator
     */
    private $additionalHotelIndicator = null;

    /**
     * Gets as hotelPotentialRoomQuantity
     *
     * This is the potential number of room nights that the requestor believes they will produce for the single specified hotel.
     *
     * @return int
     */
    public function getHotelPotentialRoomQuantity()
    {
        return $this->hotelPotentialRoomQuantity;
    }

    /**
     * Sets a new hotelPotentialRoomQuantity
     *
     * This is the potential number of room nights that the requestor believes they will produce for the single specified hotel.
     *
     * @param int $hotelPotentialRoomQuantity
     * @return self
     */
    public function setHotelPotentialRoomQuantity($hotelPotentialRoomQuantity)
    {
        $this->hotelPotentialRoomQuantity = $hotelPotentialRoomQuantity;
        return $this;
    }

    /**
     * Gets as cityPotentialRoomQuantity
     *
     * This is the potential number of room nights that the requestor believes they will produce for the specified city.
     *
     * @return int
     */
    public function getCityPotentialRoomQuantity()
    {
        return $this->cityPotentialRoomQuantity;
    }

    /**
     * Sets a new cityPotentialRoomQuantity
     *
     * This is the potential number of room nights that the requestor believes they will produce for the specified city.
     *
     * @param int $cityPotentialRoomQuantity
     * @return self
     */
    public function setCityPotentialRoomQuantity($cityPotentialRoomQuantity)
    {
        $this->cityPotentialRoomQuantity = $cityPotentialRoomQuantity;
        return $this;
    }

    /**
     * Gets as additionalHotelIndicator
     *
     * When true, this means hotels that weren't in the original request can offer their own negotiated rate for this specific account.
     *
     * @return bool
     */
    public function getAdditionalHotelIndicator()
    {
        return $this->additionalHotelIndicator;
    }

    /**
     * Sets a new additionalHotelIndicator
     *
     * When true, this means hotels that weren't in the original request can offer their own negotiated rate for this specific account.
     *
     * @param bool $additionalHotelIndicator
     * @return self
     */
    public function setAdditionalHotelIndicator($additionalHotelIndicator)
    {
        $this->additionalHotelIndicator = $additionalHotelIndicator;
        return $this;
    }
}

