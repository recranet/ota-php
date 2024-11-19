<?php

namespace Recranet\OTA\CommentType;

use Recranet\OTA\ParagraphType;

/**
 * Class representing CommentAType
 */
class CommentAType extends ParagraphType
{
    /**
     * Unique identifier for the system which created the comment.
     *
     * @var string $commentOriginatorCode
     */
    private $commentOriginatorCode = null;

    /**
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @var bool $guestViewable
     */
    private $guestViewable = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @return string
     */
    public function getCommentOriginatorCode()
    {
        return $this->commentOriginatorCode;
    }

    /**
     * Sets a new commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @param string $commentOriginatorCode
     * @return self
     */
    public function setCommentOriginatorCode($commentOriginatorCode)
    {
        $this->commentOriginatorCode = $commentOriginatorCode;
        return $this;
    }

    /**
     * Gets as guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @return bool
     */
    public function getGuestViewable()
    {
        return $this->guestViewable;
    }

    /**
     * Sets a new guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @param bool $guestViewable
     * @return self
     */
    public function setGuestViewable($guestViewable)
    {
        $this->guestViewable = $guestViewable;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

