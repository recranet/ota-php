<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * A comment pertaining to the stay.
     *
     * @var \Recranet\OTA\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * A comment pertaining to the stay.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A comment pertaining to the stay.
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
     * A comment pertaining to the stay.
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
     * A comment pertaining to the stay.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment pertaining to the stay.
     *
     * @param \Recranet\OTA\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

