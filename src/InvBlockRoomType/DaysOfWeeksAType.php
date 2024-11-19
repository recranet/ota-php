<?php

namespace Recranet\OTA\InvBlockRoomType;

/**
 * Class representing DaysOfWeeksAType
 */
class DaysOfWeeksAType
{
    /**
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @var \Recranet\OTA\DOWRulesType[] $daysOfWeek
     */
    private $daysOfWeek = [
        
    ];

    /**
     * Adds as daysOfWeek
     *
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @return self
     * @param \Recranet\OTA\DOWRulesType $daysOfWeek
     */
    public function addToDaysOfWeek(\Recranet\OTA\DOWRulesType $daysOfWeek)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * isset daysOfWeek
     *
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaysOfWeek($index)
    {
        return isset($this->daysOfWeek[$index]);
    }

    /**
     * unset daysOfWeek
     *
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaysOfWeek($index)
    {
        unset($this->daysOfWeek[$index]);
    }

    /**
     * Gets as daysOfWeek
     *
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @return \Recranet\OTA\DOWRulesType[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * Sets a new daysOfWeek
     *
     * Used to define room type by day of week rules for availability, required arrival, or required stay.
     *
     * @param \Recranet\OTA\DOWRulesType[] $daysOfWeek
     * @return self
     */
    public function setDaysOfWeek(array $daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }
}

