<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType;

/**
 * Class representing EventDayFunctionsAType
 */
class EventDayFunctionsAType
{
    /**
     * A container for the events requirements data.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunction
     */
    private $eventDayFunction = [
        
    ];

    /**
     * Adds as eventDayFunction
     *
     * A container for the events requirements data.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction
     */
    public function addToEventDayFunction(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType $eventDayFunction)
    {
        $this->eventDayFunction[] = $eventDayFunction;
        return $this;
    }

    /**
     * isset eventDayFunction
     *
     * A container for the events requirements data.
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
     * A container for the events requirements data.
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
     * A container for the events requirements data.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[]
     */
    public function getEventDayFunction()
    {
        return $this->eventDayFunction;
    }

    /**
     * Sets a new eventDayFunction
     *
     * A container for the events requirements data.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType[] $eventDayFunction
     * @return self
     */
    public function setEventDayFunction(array $eventDayFunction)
    {
        $this->eventDayFunction = $eventDayFunction;
        return $this;
    }
}

