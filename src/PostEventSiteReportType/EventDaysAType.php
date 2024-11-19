<?php

namespace Recranet\OTA\PostEventSiteReportType;

/**
 * Class representing EventDaysAType
 */
class EventDaysAType
{
    /**
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @var string $firstEventDayOfWeek
     */
    private $firstEventDayOfWeek = null;

    /**
     * Defines the functions for a specific day of the event.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType[] $eventDay
     */
    private $eventDay = [
        
    ];

    /**
     * Gets as firstEventDayOfWeek
     *
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @return string
     */
    public function getFirstEventDayOfWeek()
    {
        return $this->firstEventDayOfWeek;
    }

    /**
     * Sets a new firstEventDayOfWeek
     *
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @param string $firstEventDayOfWeek
     * @return self
     */
    public function setFirstEventDayOfWeek($firstEventDayOfWeek)
    {
        $this->firstEventDayOfWeek = $firstEventDayOfWeek;
        return $this;
    }

    /**
     * Adds as eventDay
     *
     * Defines the functions for a specific day of the event.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType $eventDay
     */
    public function addToEventDay(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType $eventDay)
    {
        $this->eventDay[] = $eventDay;
        return $this;
    }

    /**
     * isset eventDay
     *
     * Defines the functions for a specific day of the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDay($index)
    {
        return isset($this->eventDay[$index]);
    }

    /**
     * unset eventDay
     *
     * Defines the functions for a specific day of the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDay($index)
    {
        unset($this->eventDay[$index]);
    }

    /**
     * Gets as eventDay
     *
     * Defines the functions for a specific day of the event.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType[]
     */
    public function getEventDay()
    {
        return $this->eventDay;
    }

    /**
     * Sets a new eventDay
     *
     * Defines the functions for a specific day of the event.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType[] $eventDay
     * @return self
     */
    public function setEventDay(array $eventDay)
    {
        $this->eventDay = $eventDay;
        return $this;
    }
}

