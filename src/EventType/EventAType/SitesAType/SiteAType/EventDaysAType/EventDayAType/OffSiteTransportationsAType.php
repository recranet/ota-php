<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType;

/**
 * Class representing OffSiteTransportationsAType
 */
class OffSiteTransportationsAType
{
    /**
     * Transportation information for an off-site function.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[] $offSiteTransportation
     */
    private $offSiteTransportation = [
        
    ];

    /**
     * Adds as offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType $offSiteTransportation
     */
    public function addToOffSiteTransportation(\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType $offSiteTransportation)
    {
        $this->offSiteTransportation[] = $offSiteTransportation;
        return $this;
    }

    /**
     * isset offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffSiteTransportation($index)
    {
        return isset($this->offSiteTransportation[$index]);
    }

    /**
     * unset offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffSiteTransportation($index)
    {
        unset($this->offSiteTransportation[$index]);
    }

    /**
     * Gets as offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[]
     */
    public function getOffSiteTransportation()
    {
        return $this->offSiteTransportation;
    }

    /**
     * Sets a new offSiteTransportation
     *
     * Transportation information for an off-site function.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType[] $offSiteTransportation
     * @return self
     */
    public function setOffSiteTransportation(array $offSiteTransportation)
    {
        $this->offSiteTransportation = $offSiteTransportation;
        return $this;
    }
}

