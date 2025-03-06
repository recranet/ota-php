<?php

namespace Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing AdditionalDatesAType
 */
class AdditionalDatesAType
{
    /**
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDate
     */
    private $additionalDate = [
        
    ];

    /**
     * Adds as additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
     */
    public function addToAdditionalDate(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate)
    {
        $this->additionalDate[] = $additionalDate;
        return $this;
    }

    /**
     * isset additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDate($index)
    {
        return isset($this->additionalDate[$index]);
    }

    /**
     * unset additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDate($index)
    {
        unset($this->additionalDate[$index]);
    }

    /**
     * Gets as additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDate()
    {
        return $this->additionalDate;
    }

    /**
     * Sets a new additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and post-convention meetings, major arrival and departure dates for event attendees, group arrivals and departure dates).
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDate
     * @return self
     */
    public function setAdditionalDate(array $additionalDate)
    {
        $this->additionalDate = $additionalDate;
        return $this;
    }
}

