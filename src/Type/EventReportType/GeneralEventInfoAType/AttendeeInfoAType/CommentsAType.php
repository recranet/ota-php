<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\AttendeeInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Comments about the attendees as a group.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comments about the attendees as a group.
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
     * Comments about the attendees as a group.
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
     * Comments about the attendees as a group.
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
     * Comments about the attendees as a group.
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
     * Comments about the attendees as a group.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

