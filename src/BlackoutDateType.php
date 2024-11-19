<?php

namespace Recranet\OTA;

/**
 * Class representing BlackoutDateType
 *
 * Provides blackout date information.
 * XSD Type: BlackoutDateType
 */
class BlackoutDateType
{
    /**
     * Indicates black-out dates for the travel product/service.
     *
     * @var \Recranet\OTA\DateTimeSpanType[] $blackoutDate
     */
    private $blackoutDate = [
        
    ];

    /**
     * Adds as blackoutDate
     *
     * Indicates black-out dates for the travel product/service.
     *
     * @return self
     * @param \Recranet\OTA\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDate(\Recranet\OTA\DateTimeSpanType $blackoutDate)
    {
        $this->blackoutDate[] = $blackoutDate;
        return $this;
    }

    /**
     * isset blackoutDate
     *
     * Indicates black-out dates for the travel product/service.
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
     * Indicates black-out dates for the travel product/service.
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
     * Indicates black-out dates for the travel product/service.
     *
     * @return \Recranet\OTA\DateTimeSpanType[]
     */
    public function getBlackoutDate()
    {
        return $this->blackoutDate;
    }

    /**
     * Sets a new blackoutDate
     *
     * Indicates black-out dates for the travel product/service.
     *
     * @param \Recranet\OTA\DateTimeSpanType[] $blackoutDate
     * @return self
     */
    public function setBlackoutDate(array $blackoutDate)
    {
        $this->blackoutDate = $blackoutDate;
        return $this;
    }
}

