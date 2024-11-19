<?php

namespace Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{
    /**
     * A text field used to indicate that there are additional rates that cannot fit in the availability response. The text returned should be meaningful in identifying where to begin the next block of data and sent in the availability request.
     *
     * @var string $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * The specified sort order for the room stay results. Use is defined by trading partners.
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @var \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType[] $roomStay
     */
    private $roomStay = [
        
    ];

    /**
     * Gets as moreIndicator
     *
     * A text field used to indicate that there are additional rates that cannot fit in the availability response. The text returned should be meaningful in identifying where to begin the next block of data and sent in the availability request.
     *
     * @return string
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * A text field used to indicate that there are additional rates that cannot fit in the availability response. The text returned should be meaningful in identifying where to begin the next block of data and sent in the availability request.
     *
     * @param string $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * The specified sort order for the room stay results. Use is defined by trading partners.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * The specified sort order for the room stay results. Use is defined by trading partners.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Adds as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType $roomStay
     */
    public function addToRoomStay(\Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType $roomStay)
    {
        $this->roomStay[] = $roomStay;
        return $this;
    }

    /**
     * isset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @return \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType[] $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay = null)
    {
        $this->roomStay = $roomStay;
        return $this;
    }
}

