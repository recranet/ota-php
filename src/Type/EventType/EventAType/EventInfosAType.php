<?php

namespace Recranet\OTA\Type\EventType\EventAType;

/**
 * Class representing EventInfosAType
 */
class EventInfosAType
{
    /**
     * Details regarding a particular occurence of an event.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[] $eventInfo
     */
    private $eventInfo = [
        
    ];

    /**
     * Adds as eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType $eventInfo
     */
    public function addToEventInfo(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType $eventInfo)
    {
        $this->eventInfo[] = $eventInfo;
        return $this;
    }

    /**
     * isset eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventInfo($index)
    {
        return isset($this->eventInfo[$index]);
    }

    /**
     * unset eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventInfo($index)
    {
        unset($this->eventInfo[$index]);
    }

    /**
     * Gets as eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[]
     */
    public function getEventInfo()
    {
        return $this->eventInfo;
    }

    /**
     * Sets a new eventInfo
     *
     * Details regarding a particular occurence of an event.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[] $eventInfo
     * @return self
     */
    public function setEventInfo(array $eventInfo)
    {
        $this->eventInfo = $eventInfo;
        return $this;
    }
}

