<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing SitesAType
 */
class SitesAType
{
    /**
     * Specifies an individual destination of the request.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[] $site
     */
    private $site = [
        
    ];

    /**
     * Adds as site
     *
     * Specifies an individual destination of the request.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site
     */
    public function addToSite(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * Specifies an individual destination of the request.
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
     * Specifies an individual destination of the request.
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
     * Specifies an individual destination of the request.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Specifies an individual destination of the request.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[] $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }
}

