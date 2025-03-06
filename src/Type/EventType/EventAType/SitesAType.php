<?php

namespace Recranet\OTA\Type\EventType\EventAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{
    /**
     * Identifies the site where functions for the event will be held.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[] $site
     */
    private $site = [
        
    ];

    /**
     * Adds as site
     *
     * Identifies the site where functions for the event will be held.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType $site
     */
    public function addToSite(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * Identifies the site where functions for the event will be held.
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
     * Identifies the site where functions for the event will be held.
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
     * Identifies the site where functions for the event will be held.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Identifies the site where functions for the event will be held.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[] $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }
}

