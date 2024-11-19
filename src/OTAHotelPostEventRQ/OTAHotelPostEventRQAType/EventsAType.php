<?php

namespace Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType;

/**
 * Class representing EventsAType
 */
class EventsAType
{
    /**
     * The event for which the post event report is being requested.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[] $event
     */
    private $event = [
        
    ];

    /**
     * Adds as event
     *
     * The event for which the post event report is being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType $event
     */
    public function addToEvent(\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * The event for which the post event report is being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * The event for which the post event report is being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * The event for which the post event report is being requested.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event for which the post event report is being requested.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }
}

