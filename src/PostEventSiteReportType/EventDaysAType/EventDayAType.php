<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType;

/**
 * Class representing EventDayAType
 */
class EventDayAType
{
    /**
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
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
     * A collection of multiple EventDayFunctions.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunctions
     */
    private $eventDayFunctions = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
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
     * The number which indicates the day of the event (e.g. 1, 2, 3). This is relative to the Start attribute in the Date element.
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
     * Adds as eventDayFunction
     *
     * A collection of multiple EventDayFunctions.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
     */
    public function addToEventDayFunctions(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction)
    {
        $this->eventDayFunctions[] = $eventDayFunction;
        return $this;
    }

    /**
     * isset eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDayFunctions($index)
    {
        return isset($this->eventDayFunctions[$index]);
    }

    /**
     * unset eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDayFunctions($index)
    {
        unset($this->eventDayFunctions[$index]);
    }

    /**
     * Gets as eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     */
    public function getEventDayFunctions()
    {
        return $this->eventDayFunctions;
    }

    /**
     * Sets a new eventDayFunctions
     *
     * A collection of multiple EventDayFunctions.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunctions
     * @return self
     */
    public function setEventDayFunctions(array $eventDayFunctions = null)
    {
        $this->eventDayFunctions = $eventDayFunctions;
        return $this;
    }
}

