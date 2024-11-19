<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{
    /**
     * The dates correspond to the appropriate primary or secondary dates identified in the request.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType $date
     */
    private $date = null;

    /**
     * Gets as date
     *
     * The dates correspond to the appropriate primary or secondary dates identified in the request.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The dates correspond to the appropriate primary or secondary dates identified in the request.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType $date
     * @return self
     */
    public function setDate(?\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

