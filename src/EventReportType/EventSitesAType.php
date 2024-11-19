<?php

namespace Recranet\OTA\EventReportType;

/**
 * Class representing EventSitesAType
 */
class EventSitesAType
{
    /**
     * A site utilized by the event.
     *
     * @var \Recranet\OTA\PostEventSiteReportType[] $eventSite
     */
    private $eventSite = [
        
    ];

    /**
     * Adds as eventSite
     *
     * A site utilized by the event.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType $eventSite
     */
    public function addToEventSite(\Recranet\OTA\PostEventSiteReportType $eventSite)
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
     * @return \Recranet\OTA\PostEventSiteReportType[]
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
     * @param \Recranet\OTA\PostEventSiteReportType[] $eventSite
     * @return self
     */
    public function setEventSite(array $eventSite)
    {
        $this->eventSite = $eventSite;
        return $this;
    }
}

