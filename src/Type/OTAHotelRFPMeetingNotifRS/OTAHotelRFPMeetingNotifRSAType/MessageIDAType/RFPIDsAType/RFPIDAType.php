<?php

namespace Recranet\OTA\Type\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType;

use Recranet\OTA\Type\UniqueIDType;

/**
 * Class representing RFPIDAType
 */
class RFPIDAType extends UniqueIDType
{
    /**
     * A collection of SiteID.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $siteIDs
     */
    private $siteIDs = null;

    /**
     * Adds as siteID
     *
     * A collection of SiteID.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $siteID
     */
    public function addToSiteIDs(\Recranet\OTA\Type\UniqueIDType $siteID)
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
     * @return \Recranet\OTA\Type\UniqueIDType[]
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
     * @param \Recranet\OTA\Type\UniqueIDType[] $siteIDs
     * @return self
     */
    public function setSiteIDs(array $siteIDs = null)
    {
        $this->siteIDs = $siteIDs;
        return $this;
    }
}

