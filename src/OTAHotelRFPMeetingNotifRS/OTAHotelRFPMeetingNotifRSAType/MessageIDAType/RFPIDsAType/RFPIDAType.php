<?php

namespace Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType;

use Recranet\OTA\UniqueIDType;

/**
 * Class representing RFPIDAType
 */
class RFPIDAType extends UniqueIDType
{
    /**
     * A collection of SiteID.
     *
     * @var \Recranet\OTA\UniqueIDType[] $siteIDs
     */
    private $siteIDs = null;

    /**
     * Adds as siteID
     *
     * A collection of SiteID.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $siteID
     */
    public function addToSiteIDs(\Recranet\OTA\UniqueIDType $siteID)
    {
        $this->siteIDs[] = $siteID;
        return $this;
    }

    /**
     * isset siteIDs
     *
     * A collection of SiteID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSiteIDs($index)
    {
        return isset($this->siteIDs[$index]);
    }

    /**
     * unset siteIDs
     *
     * A collection of SiteID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSiteIDs($index)
    {
        unset($this->siteIDs[$index]);
    }

    /**
     * Gets as siteIDs
     *
     * A collection of SiteID.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getSiteIDs()
    {
        return $this->siteIDs;
    }

    /**
     * Sets a new siteIDs
     *
     * A collection of SiteID.
     *
     * @param \Recranet\OTA\UniqueIDType[] $siteIDs
     * @return self
     */
    public function setSiteIDs(array $siteIDs = null)
    {
        $this->siteIDs = $siteIDs;
        return $this;
    }
}

