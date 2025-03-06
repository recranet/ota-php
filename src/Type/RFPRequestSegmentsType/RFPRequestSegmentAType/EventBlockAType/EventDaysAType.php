<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType;

/**
 * Class representing EventDaysAType
 */
class EventDaysAType
{
    /**
     * This is used to identify the first day of the event block.
     *
     * @var string $firstEventDayOfWeek
     */
    private $firstEventDayOfWeek = null;

    /**
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[] $eventDay
     */
    private $eventDay = [
        
    ];

    /**
     * Gets as firstEventDayOfWeek
     *
     * This is used to identify the first day of the event block.
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
     * This is used to identify the first day of the event block.
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
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType $eventDay
     */
    public function addToEventDay(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType $eventDay)
    {
        $this->eventDay[] = $eventDay;
        return $this;
    }

    /**
     * isset eventDay
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
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[]
     */
    public function getEventDay()
    {
        return $this->eventDay;
    }

    /**
     * Sets a new eventDay
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType[] $eventDay
     * @return self
     */
    public function setEventDay(array $eventDay)
    {
        $this->eventDay = $eventDay;
        return $this;
    }
}

