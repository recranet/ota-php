<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType;

/**
 * Class representing EventDatesAType
 */
class EventDatesAType
{
    /**
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[] $eventDate
     */
    private $eventDate = [
        
    ];

    /**
     * Adds as eventDate
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate
     */
    public function addToEventDate(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate)
    {
        $this->eventDate[] = $eventDate;
        return $this;
    }

    /**
     * isset eventDate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDate($index)
    {
        return isset($this->eventDate[$index]);
    }

    /**
     * unset eventDate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDate($index)
    {
        unset($this->eventDate[$index]);
    }

    /**
     * Gets as eventDate
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets a new eventDate
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[] $eventDate
     * @return self
     */
    public function setEventDate(array $eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }
}

