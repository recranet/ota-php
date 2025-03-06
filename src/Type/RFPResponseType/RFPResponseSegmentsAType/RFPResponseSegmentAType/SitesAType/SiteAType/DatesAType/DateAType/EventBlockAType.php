<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType;

/**
 * Class representing EventBlockAType
 */
class EventBlockAType
{
    /**
     * Used to identify the event.
     *
     * @var string $eventName
     */
    private $eventName = null;

    /**
     * A collection of multiple EventDates.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[] $eventDates
     */
    private $eventDates = null;

    /**
     * An open field to comment on the event block.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Gets as eventName
     *
     * Used to identify the event.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets a new eventName
     *
     * Used to identify the event.
     *
     * @param string $eventName
     * @return self
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Adds as eventDate
     *
     * A collection of multiple EventDates.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate
     */
    public function addToEventDates(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType $eventDate)
    {
        $this->eventDates[] = $eventDate;
        return $this;
    }

    /**
     * isset eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDates($index)
    {
        return isset($this->eventDates[$index]);
    }

    /**
     * unset eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDates($index)
    {
        unset($this->eventDates[$index]);
    }

    /**
     * Gets as eventDates
     *
     * A collection of multiple EventDates.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[]
     */
    public function getEventDates()
    {
        return $this->eventDates;
    }

    /**
     * Sets a new eventDates
     *
     * A collection of multiple EventDates.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType[] $eventDates
     * @return self
     */
    public function setEventDates(array $eventDates = null)
    {
        $this->eventDates = $eventDates;
        return $this;
    }

    /**
     * Adds as comment
     *
     * An open field to comment on the event block.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * An open field to comment on the event block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * An open field to comment on the event block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * An open field to comment on the event block.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * An open field to comment on the event block.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

