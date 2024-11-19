<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType\HousingInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Comments regarding the general hotel usage.
     *
     * @var \Recranet\OTA\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comments regarding the general hotel usage.
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
     * Comments regarding the general hotel usage.
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
     * Comments regarding the general hotel usage.
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
     * Comments regarding the general hotel usage.
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
     * Comments regarding the general hotel usage.
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

