<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType;

/**
 * Class representing EventDayFunctionsAType
 */
class EventDayFunctionsAType
{
    /**
     * The requirements for the function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunction
     */
    private $eventDayFunction = [
        
    ];

    /**
     * Adds as eventDayFunction
     *
     * The requirements for the function.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
     */
    public function addToEventDayFunction(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction)
    {
        $this->eventDayFunction[] = $eventDayFunction;
        return $this;
    }

    /**
     * isset eventDayFunction
     *
     * The requirements for the function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDayFunction($index)
    {
        return isset($this->eventDayFunction[$index]);
    }

    /**
     * unset eventDayFunction
     *
     * The requirements for the function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDayFunction($index)
    {
        unset($this->eventDayFunction[$index]);
    }

    /**
     * Gets as eventDayFunction
     *
     * The requirements for the function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     */
    public function getEventDayFunction()
    {
        return $this->eventDayFunction;
    }

    /**
     * Sets a new eventDayFunction
     *
     * The requirements for the function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunction
     * @return self
     */
    public function setEventDayFunction(array $eventDayFunction)
    {
        $this->eventDayFunction = $eventDayFunction;
        return $this;
    }
}

