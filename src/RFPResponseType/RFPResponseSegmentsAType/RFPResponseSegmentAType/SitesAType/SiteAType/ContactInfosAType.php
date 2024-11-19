<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{
    /**
     * A contact for this site for this specific RFP.
     *
     * @var \Recranet\OTA\ContactPersonType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as contactInfo
     *
     * A contact for this site for this specific RFP.
     *
     * @return \Recranet\OTA\ContactPersonType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * A contact for this site for this specific RFP.
     *
     * @param \Recranet\OTA\ContactPersonType $contactInfo
     * @return self
     */
    public function setContactInfo(\Recranet\OTA\ContactPersonType $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

