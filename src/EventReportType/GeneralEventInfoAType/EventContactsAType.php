<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType;

/**
 * Class representing EventContactsAType
 */
class EventContactsAType
{
    /**
     * A contact that pertains to this event.
     *
     * @var \Recranet\OTA\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[] $eventContact
     */
    private $eventContact = [
        
    ];

    /**
     * Adds as eventContact
     *
     * A contact that pertains to this event.
     *
     * @return self
     * @param \Recranet\OTA\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType $eventContact
     */
    public function addToEventContact(\Recranet\OTA\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType $eventContact)
    {
        $this->eventContact[] = $eventContact;
        return $this;
    }

    /**
     * isset eventContact
     *
     * A contact that pertains to this event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventContact($index)
    {
        return isset($this->eventContact[$index]);
    }

    /**
     * unset eventContact
     *
     * A contact that pertains to this event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventContact($index)
    {
        unset($this->eventContact[$index]);
    }

    /**
     * Gets as eventContact
     *
     * A contact that pertains to this event.
     *
     * @return \Recranet\OTA\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     */
    public function getEventContact()
    {
        return $this->eventContact;
    }

    /**
     * Sets a new eventContact
     *
     * A contact that pertains to this event.
     *
     * @param \Recranet\OTA\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[] $eventContact
     * @return self
     */
    public function setEventContact(array $eventContact)
    {
        $this->eventContact = $eventContact;
        return $this;
    }
}

