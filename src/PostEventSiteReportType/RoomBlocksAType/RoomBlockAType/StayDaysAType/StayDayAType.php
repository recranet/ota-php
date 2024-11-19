<?php

namespace Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType;

/**
 * Class representing StayDayAType
 */
class StayDayAType
{
    /**
     * The number which indicates the day of the stay (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
     *
     * @var int $dayNumber
     */
    private $dayNumber = null;

    /**
     * Indicates the day is a pre-event day, a post event day or a published event day.
     *
     * @var string $dayType
     */
    private $dayType = null;

    /**
     * Total number of guests for this day.
     *
     * @var int $guestQuantity
     */
    private $guestQuantity = null;

    /**
     * Total number of rooms needed for this day.
     *
     * @var int $totalNumberOfUnits
     */
    private $totalNumberOfUnits = null;

    /**
     * A hotel code that indicates the type of room.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * Provides the name for the room type or the room type code.
     *
     * @var string $roomTypeName
     */
    private $roomTypeName = null;

    /**
     * A general room type classification for types of rooms sold (e.g., single, concierge, suite) rather than a hotel specific room type code.
     *
     * @var string $roomType
     */
    private $roomType = null;

    /**
     * The total number of contracted rooms.
     *
     * @var int $contractedRoomBlock
     */
    private $contractedRoomBlock = null;

    /**
     * The final number of rooms blocked for this event. This may be revised from the original contracted number of rooms.
     *
     * @var int $finalRoomBlock
     */
    private $finalRoomBlock = null;

    /**
     * Collection of rates for a particular room type.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * Individual room pick-up by day or by day and room type.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RoomPickUpAType[] $roomPickUp
     */
    private $roomPickUp = [
        
    ];

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the stay (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
     *
     * @return int
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the stay (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
     *
     * @param int $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;
        return $this;
    }

    /**
     * Gets as dayType
     *
     * Indicates the day is a pre-event day, a post event day or a published event day.
     *
     * @return string
     */
    public function getDayType()
    {
        return $this->dayType;
    }

    /**
     * Sets a new dayType
     *
     * Indicates the day is a pre-event day, a post event day or a published event day.
     *
     * @param string $dayType
     * @return self
     */
    public function setDayType($dayType)
    {
        $this->dayType = $dayType;
        return $this;
    }

    /**
     * Gets as guestQuantity
     *
     * Total number of guests for this day.
     *
     * @return int
     */
    public function getGuestQuantity()
    {
        return $this->guestQuantity;
    }

    /**
     * Sets a new guestQuantity
     *
     * Total number of guests for this day.
     *
     * @param int $guestQuantity
     * @return self
     */
    public function setGuestQuantity($guestQuantity)
    {
        $this->guestQuantity = $guestQuantity;
        return $this;
    }

    /**
     * Gets as totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @return int
     */
    public function getTotalNumberOfUnits()
    {
        return $this->totalNumberOfUnits;
    }

    /**
     * Sets a new totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @param int $totalNumberOfUnits
     * @return self
     */
    public function setTotalNumberOfUnits($totalNumberOfUnits)
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * A hotel code that indicates the type of room.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * A hotel code that indicates the type of room.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as roomTypeName
     *
     * Provides the name for the room type or the room type code.
     *
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->roomTypeName;
    }

    /**
     * Sets a new roomTypeName
     *
     * Provides the name for the room type or the room type code.
     *
     * @param string $roomTypeName
     * @return self
     */
    public function setRoomTypeName($roomTypeName)
    {
        $this->roomTypeName = $roomTypeName;
        return $this;
    }

    /**
     * Gets as roomType
     *
     * A general room type classification for types of rooms sold (e.g., single, concierge, suite) rather than a hotel specific room type code.
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * A general room type classification for types of rooms sold (e.g., single, concierge, suite) rather than a hotel specific room type code.
     *
     * @param string $roomType
     * @return self
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }

    /**
     * Gets as contractedRoomBlock
     *
     * The total number of contracted rooms.
     *
     * @return int
     */
    public function getContractedRoomBlock()
    {
        return $this->contractedRoomBlock;
    }

    /**
     * Sets a new contractedRoomBlock
     *
     * The total number of contracted rooms.
     *
     * @param int $contractedRoomBlock
     * @return self
     */
    public function setContractedRoomBlock($contractedRoomBlock)
    {
        $this->contractedRoomBlock = $contractedRoomBlock;
        return $this;
    }

    /**
     * Gets as finalRoomBlock
     *
     * The final number of rooms blocked for this event. This may be revised from the original contracted number of rooms.
     *
     * @return int
     */
    public function getFinalRoomBlock()
    {
        return $this->finalRoomBlock;
    }

    /**
     * Sets a new finalRoomBlock
     *
     * The final number of rooms blocked for this event. This may be revised from the original contracted number of rooms.
     *
     * @param int $finalRoomBlock
     * @return self
     */
    public function setFinalRoomBlock($finalRoomBlock)
    {
        $this->finalRoomBlock = $finalRoomBlock;
        return $this;
    }

    /**
     * Adds as rate
     *
     * Collection of rates for a particular room type.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType $rate
     */
    public function addToRates(\Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType $rate)
    {
        $this->rates[] = $rate;
        return $this;
    }

    /**
     * isset rates
     *
     * Collection of rates for a particular room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * Collection of rates for a particular room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * Collection of rates for a particular room type.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * Collection of rates for a particular room type.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates = null)
    {
        $this->rates = $rates;
        return $this;
    }

    /**
     * Adds as roomPickUp
     *
     * Individual room pick-up by day or by day and room type.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RoomPickUpAType $roomPickUp
     */
    public function addToRoomPickUp(\Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RoomPickUpAType $roomPickUp)
    {
        $this->roomPickUp[] = $roomPickUp;
        return $this;
    }

    /**
     * isset roomPickUp
     *
     * Individual room pick-up by day or by day and room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomPickUp($index)
    {
        return isset($this->roomPickUp[$index]);
    }

    /**
     * unset roomPickUp
     *
     * Individual room pick-up by day or by day and room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomPickUp($index)
    {
        unset($this->roomPickUp[$index]);
    }

    /**
     * Gets as roomPickUp
     *
     * Individual room pick-up by day or by day and room type.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RoomPickUpAType[]
     */
    public function getRoomPickUp()
    {
        return $this->roomPickUp;
    }

    /**
     * Sets a new roomPickUp
     *
     * Individual room pick-up by day or by day and room type.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RoomPickUpAType[] $roomPickUp
     * @return self
     */
    public function setRoomPickUp(array $roomPickUp = null)
    {
        $this->roomPickUp = $roomPickUp;
        return $this;
    }
}

