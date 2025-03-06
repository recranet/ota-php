<?php

namespace Recranet\OTA\Type\RFPResponseDetailType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Open comments to send additional data about the response.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Open comments to send additional data about the response.
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
     * Open comments to send additional data about the response.
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
     * Open comments to send additional data about the response.
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
     * Open comments to send additional data about the response.
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
     * Open comments to send additional data about the response.
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

