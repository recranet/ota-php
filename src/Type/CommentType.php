<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CommentType
 *
 * A collection of comments.
 * XSD Type: CommentType
 */
class CommentType
{
    /**
     * Comment details.
     *
     * @var \Recranet\OTA\Type\CommentType\CommentAType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comment details.
     *
     * @return self
     * @param \Recranet\OTA\Type\CommentType\CommentAType $comment
     */
    public function addToComment(\Recranet\OTA\Type\CommentType\CommentAType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * Comment details.
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
     * Comment details.
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
     * Comment details.
     *
     * @return \Recranet\OTA\Type\CommentType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comment details.
     *
     * @param \Recranet\OTA\Type\CommentType\CommentAType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

