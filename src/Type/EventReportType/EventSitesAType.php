<?php

namespace Recranet\OTA\Type\EventReportType;

/**
 * Class representing EventSitesAType
 */
class EventSitesAType
{
    /**
     * A site utilized by the event.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType[] $eventSite
     */
    private $eventSite = [
        
    ];

    /**
     * Adds as eventSite
     *
     * A site utilized by the event.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType $eventSite
     */
    public function addToEventSite(\Recranet\OTA\Type\PostEventSiteReportType $eventSite)
    {
        $this->eventSite[] = $eventSite;
        return $this;
    }

    /**
     * isset eventSite
     *
     * A site utilized by the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventSite($index)
    {
        return isset($this->eventSite[$index]);
    }

    /**
     * unset eventSite
     *
     * A site utilized by the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventSite($index)
    {
        unset($this->eventSite[$index]);
    }

    /**
     * Gets as eventSite
     *
     * A site utilized by the event.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType[]
     */
    public function getEventSite()
    {
        return $this->eventSite;
    }

    /**
     * Sets a new eventSite
     *
     * A site utilized by the event.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType[] $eventSite
     * @return self
     */
    public function setEventSite(array $eventSite)
    {
        $this->eventSite = $eventSite;
        return $this;
    }
}

