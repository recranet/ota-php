<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
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
     * A comment that pertains to the overall event (e.g., event overview, event objectives).
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

