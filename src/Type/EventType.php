<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EventType
 *
 * Information details for an event.
 * XSD Type: EventType
 */
class EventType
{
    /**
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
     *
     * @var \Recranet\OTA\Type\EventType\EventAType[] $event
     */
    private $event = [
        
    ];

    /**
     * Adds as event
     *
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType $event
     */
    public function addToEvent(\Recranet\OTA\Type\EventType\EventAType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
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
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
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
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
     *
     * @return \Recranet\OTA\Type\EventType\EventAType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * Information for an event. Typically, this would be used to send information regarding related events (e.g., the same training class being taken by different organizations).
     *
     * @param \Recranet\OTA\Type\EventType\EventAType[] $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
        return $this;
    }
}

