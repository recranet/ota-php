<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{
    /**
     * Specifies event date and associated location information.
     *
     * @var \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[] $date
     */
    private $date = [
        
    ];

    /**
     * Adds as date
     *
     * Specifies event date and associated location information.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType $date
     */
    public function addToDate(\Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * Specifies event date and associated location information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Specifies event date and associated location information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Specifies event date and associated location information.
     *
     * @return \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies event date and associated location information.
     *
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;
        return $this;
    }
}

