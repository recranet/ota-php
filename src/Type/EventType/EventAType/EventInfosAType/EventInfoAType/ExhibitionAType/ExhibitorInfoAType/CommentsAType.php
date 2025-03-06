<?php

namespace Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitorInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
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
     * A comment about the exhibitors as a group (e.g., accessibility or special needs or demographic profile comments).
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

