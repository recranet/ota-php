<?php

namespace Recranet\OTA\AccountSpecificInformationType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
     *
     * @var \Recranet\OTA\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
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
     * Provides additional account specific information (e.g. notes about all rates or questions specific to this account).
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

