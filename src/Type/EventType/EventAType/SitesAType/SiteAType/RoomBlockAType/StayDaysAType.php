<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType;

/**
 * Class representing StayDaysAType
 */
class StayDaysAType
{
    /**
     * Identifies the first day of the week of the room block.
     *
     * @var string $firstStayDayOfWeek
     */
    private $firstStayDayOfWeek = null;

    /**
     * A particular stay day.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType\StayDayAType[] $stayDay
     */
    private $stayDay = [
        
    ];

    /**
     * A collection of comments pertaining to the stay.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as firstStayDayOfWeek
     *
     * Identifies the first day of the week of the room block.
     *
     * @return string
     */
    public function getFirstStayDayOfWeek()
    {
        return $this->firstStayDayOfWeek;
    }

    /**
     * Sets a new firstStayDayOfWeek
     *
     * Identifies the first day of the week of the room block.
     *
     * @param string $firstStayDayOfWeek
     * @return self
     */
    public function setFirstStayDayOfWeek($firstStayDayOfWeek)
    {
        $this->firstStayDayOfWeek = $firstStayDayOfWeek;
        return $this;
    }

    /**
     * Adds as stayDay
     *
     * A particular stay day.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType\StayDayAType $stayDay
     */
    public function addToStayDay(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType\StayDayAType $stayDay)
    {
        $this->stayDay[] = $stayDay;
        return $this;
    }

    /**
     * isset stayDay
     *
     * A particular stay day.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDay($index)
    {
        return isset($this->stayDay[$index]);
    }

    /**
     * unset stayDay
     *
     * A particular stay day.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDay($index)
    {
        unset($this->stayDay[$index]);
    }

    /**
     * Gets as stayDay
     *
     * A particular stay day.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType\StayDayAType[]
     */
    public function getStayDay()
    {
        return $this->stayDay;
    }

    /**
     * Sets a new stayDay
     *
     * A particular stay day.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType\StayDayAType[] $stayDay
     * @return self
     */
    public function setStayDay(array $stayDay)
    {
        $this->stayDay = $stayDay;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to the stay.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

