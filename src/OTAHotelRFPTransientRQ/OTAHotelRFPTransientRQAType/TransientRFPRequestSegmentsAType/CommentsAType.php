<?php

namespace Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
     *
     * @var \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType $comment
     */
    public function addToComment(\Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
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
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
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
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
     *
     * @return \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * May be used to send textual information regarding the request such as questions, legal text, special requests, etc.
     *
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

