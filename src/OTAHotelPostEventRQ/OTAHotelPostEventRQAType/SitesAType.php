<?php

namespace Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{
    /**
     * A location for which a post event report is being requested.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType\SiteAType[] $site
     */
    private $site = [
        
    ];

    /**
     * Date or date range for this site or sites.
     *
     * @var \Recranet\OTA\DateTimeSpanType[] $date
     */
    private $date = [
        
    ];

    /**
     * Adds as site
     *
     * A location for which a post event report is being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType\SiteAType $site
     */
    public function addToSite(\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType\SiteAType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * A location for which a post event report is being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * A location for which a post event report is being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * A location for which a post event report is being requested.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * A location for which a post event report is being requested.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType\SiteAType[] $site
     * @return self
     */
    public function setSite(array $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Adds as date
     *
     * Date or date range for this site or sites.
     *
     * @return self
     * @param \Recranet\OTA\DateTimeSpanType $date
     */
    public function addToDate(\Recranet\OTA\DateTimeSpanType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * Date or date range for this site or sites.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date or date range for this site or sites.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date or date range for this site or sites.
     *
     * @return \Recranet\OTA\DateTimeSpanType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date or date range for this site or sites.
     *
     * @param \Recranet\OTA\DateTimeSpanType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

