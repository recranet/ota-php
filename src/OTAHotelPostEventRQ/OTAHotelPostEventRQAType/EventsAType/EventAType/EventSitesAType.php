<?php

namespace Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType;

/**
 * Class representing EventSitesAType
 */
class EventSitesAType
{
    /**
     * Site or group of sites for which a post event report is being requested.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType\EventSitesAType\EventSiteAType[] $eventSite
     */
    private $eventSite = [
        
    ];

    /**
     * Adds as eventSite
     *
     * Site or group of sites for which a post event report is being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType\EventSitesAType\EventSiteAType $eventSite
     */
    public function addToEventSite(\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType\EventSitesAType\EventSiteAType $eventSite)
    {
        $this->eventSite[] = $eventSite;
        return $this;
    }

    /**
     * isset eventSite
     *
     * Site or group of sites for which a post event report is being requested.
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
     * Site or group of sites for which a post event report is being requested.
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
     * Site or group of sites for which a post event report is being requested.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType\EventSitesAType\EventSiteAType[]
     */
    public function getEventSite()
    {
        return $this->eventSite;
    }

    /**
     * Sets a new eventSite
     *
     * Site or group of sites for which a post event report is being requested.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType\EventSitesAType\EventSiteAType[] $eventSite
     * @return self
     */
    public function setEventSite(array $eventSite = null)
    {
        $this->eventSite = $eventSite;
        return $this;
    }
}

