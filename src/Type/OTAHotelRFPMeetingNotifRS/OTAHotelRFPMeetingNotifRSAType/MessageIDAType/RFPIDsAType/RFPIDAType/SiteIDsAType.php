<?php

namespace Recranet\OTA\Type\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType;

/**
 * Class representing SiteIDsAType
 */
class SiteIDsAType
{
    /**
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $siteID
     */
    private $siteID = [
        
    ];

    /**
     * Adds as siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $siteID
     */
    public function addToSiteID(\Recranet\OTA\Type\UniqueIDType $siteID)
    {
        $this->siteID[] = $siteID;
        return $this;
    }

    /**
     * isset siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSiteID($index)
    {
        return isset($this->siteID[$index]);
    }

    /**
     * unset siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSiteID($index)
    {
        unset($this->siteID[$index]);
    }

    /**
     * Gets as siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @return \Recranet\OTA\Type\UniqueIDType[]
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * Corresponds to the SiteID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is used to identify a particular Site in the RFP.
     *
     * @param \Recranet\OTA\Type\UniqueIDType[] $siteID
     * @return self
     */
    public function setSiteID(array $siteID)
    {
        $this->siteID = $siteID;
        return $this;
    }
}

