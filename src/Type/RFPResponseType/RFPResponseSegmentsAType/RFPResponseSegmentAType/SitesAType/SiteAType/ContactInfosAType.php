<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{
    /**
     * A contact for this site for this specific RFP.
     *
     * @var \Recranet\OTA\Type\ContactPersonType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as contactInfo
     *
     * A contact for this site for this specific RFP.
     *
     * @return \Recranet\OTA\Type\ContactPersonType
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
     * @param \Recranet\OTA\Type\ContactPersonType $contactInfo
     * @return self
     */
    public function setContactInfo(\Recranet\OTA\Type\ContactPersonType $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

