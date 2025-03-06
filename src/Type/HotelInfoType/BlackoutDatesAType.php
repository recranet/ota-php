<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing BlackoutDatesAType
 */
class BlackoutDatesAType
{
    /**
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[] $blackoutDate
     */
    private $blackoutDate = [
        
    ];

    /**
     * Adds as blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate
     */
    public function addToBlackoutDate(\Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate)
    {
        $this->blackoutDate[] = $blackoutDate;
        return $this;
    }

    /**
     * isset blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlackoutDate($index)
    {
        return isset($this->blackoutDate[$index]);
    }

    /**
     * unset blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlackoutDate($index)
    {
        unset($this->blackoutDate[$index]);
    }

    /**
     * Gets as blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     */
    public function getBlackoutDate()
    {
        return $this->blackoutDate;
    }

    /**
     * Sets a new blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[] $blackoutDate
     * @return self
     */
    public function setBlackoutDate(array $blackoutDate)
    {
        $this->blackoutDate = $blackoutDate;
        return $this;
    }
}

