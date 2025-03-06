<?php

namespace Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{
    /**
     * The room rate to which the booking rule applies.
     *
     * @var \Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[] $roomRate
     */
    private $roomRate = [
        
    ];

    /**
     * Adds as roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType $roomRate
     */
    public function addToRoomRate(\Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType $roomRate)
    {
        $this->roomRate[] = $roomRate;
        return $this;
    }

    /**
     * isset roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @return \Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param \Recranet\OTA\Type\OTAHotelBookingRuleRS\OTAHotelBookingRuleRSAType\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[] $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate = null)
    {
        $this->roomRate = $roomRate;
        return $this;
    }
}

