<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType;

use Recranet\OTA\DateTimeSpanType;

/**
 * Class representing DateAType
 */
class DateAType extends DateTimeSpanType
{
    /**
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @var bool $contractedIndicator
     */
    private $contractedIndicator = null;

    /**
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @var string $eventDateType
     */
    private $eventDateType = null;

    /**
     * Used to define requirements or preferences in location for the event.
     *
     * @var \Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[] $locationCategories
     */
    private $locationCategories = [
        
    ];

    /**
     * Collection of comments.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as contractedIndicator
     *
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @return bool
     */
    public function getContractedIndicator()
    {
        return $this->contractedIndicator;
    }

    /**
     * Sets a new contractedIndicator
     *
     * When true, indicates that the event has already been contracted for these dates.
     *
     * @param bool $contractedIndicator
     * @return self
     */
    public function setContractedIndicator($contractedIndicator)
    {
        $this->contractedIndicator = $contractedIndicator;
        return $this;
    }

    /**
     * Gets as eventDateType
     *
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @return string
     */
    public function getEventDateType()
    {
        return $this->eventDateType;
    }

    /**
     * Sets a new eventDateType
     *
     * Used in conjunction with Start and End to identify the type of date.
     *
     * @param string $eventDateType
     * @return self
     */
    public function setEventDateType($eventDateType)
    {
        $this->eventDateType = $eventDateType;
        return $this;
    }

    /**
     * Adds as locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @return self
     * @param \Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType $locationCategories
     */
    public function addToLocationCategories(\Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType $locationCategories)
    {
        $this->locationCategories[] = $locationCategories;
        return $this;
    }

    /**
     * isset locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCategories($index)
    {
        return isset($this->locationCategories[$index]);
    }

    /**
     * unset locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCategories($index)
    {
        unset($this->locationCategories[$index]);
    }

    /**
     * Gets as locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @return \Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[]
     */
    public function getLocationCategories()
    {
        return $this->locationCategories;
    }

    /**
     * Sets a new locationCategories
     *
     * Used to define requirements or preferences in location for the event.
     *
     * @param \Recranet\OTA\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType[] $locationCategories
     * @return self
     */
    public function setLocationCategories(array $locationCategories = null)
    {
        $this->locationCategories = $locationCategories;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Collection of comments.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * Collection of comments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Collection of comments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Collection of comments.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Collection of comments.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

