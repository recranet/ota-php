<?php

namespace Recranet\OTA\Type\RecipientInfosType\RecipientInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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

