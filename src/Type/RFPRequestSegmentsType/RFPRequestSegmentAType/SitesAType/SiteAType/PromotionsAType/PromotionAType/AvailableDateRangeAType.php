<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType;

use Recranet\OTA\Type\DateTimeSpanType;

/**
 * Class representing AvailableDateRangeAType
 */
class AvailableDateRangeAType extends DateTimeSpanType
{
    /**
     * This reference place holder refers back to the applicable date range. This is used to link a particular promotion to a particular date range.
     *
     * @var string $dateRPH
     */
    private $dateRPH = null;

    /**
     * Gets as dateRPH
     *
     * This reference place holder refers back to the applicable date range. This is used to link a particular promotion to a particular date range.
     *
     * @return string
     */
    public function getDateRPH()
    {
        return $this->dateRPH;
    }

    /**
     * Sets a new dateRPH
     *
     * This reference place holder refers back to the applicable date range. This is used to link a particular promotion to a particular date range.
     *
     * @param string $dateRPH
     * @return self
     */
    public function setDateRPH($dateRPH)
    {
        $this->dateRPH = $dateRPH;
        return $this;
    }
}

