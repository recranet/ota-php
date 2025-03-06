<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType;

/**
 * Class representing StayDatesAType
 */
class StayDatesAType
{
    /**
     * Contains the date or date span for the room type availability.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[] $stayDate
     */
    private $stayDate = [
        
    ];

    /**
     * Adds as stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate
     */
    public function addToStayDate(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate)
    {
        $this->stayDate[] = $stayDate;
        return $this;
    }

    /**
     * isset stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDate($index)
    {
        return isset($this->stayDate[$index]);
    }

    /**
     * unset stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDate($index)
    {
        unset($this->stayDate[$index]);
    }

    /**
     * Gets as stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     */
    public function getStayDate()
    {
        return $this->stayDate;
    }

    /**
     * Sets a new stayDate
     *
     * Contains the date or date span for the room type availability.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[] $stayDate
     * @return self
     */
    public function setStayDate(array $stayDate)
    {
        $this->stayDate = $stayDate;
        return $this;
    }
}

