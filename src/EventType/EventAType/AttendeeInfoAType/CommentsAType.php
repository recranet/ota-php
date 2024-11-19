<?php

namespace Recranet\OTA\EventType\EventAType\AttendeeInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
     *
     * @var \Recranet\OTA\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * Comments about the attendees as a group (e.g., accessibility or special needs or demographic profile comments).
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

