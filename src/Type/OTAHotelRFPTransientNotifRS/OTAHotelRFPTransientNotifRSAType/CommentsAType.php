<?php

namespace Recranet\OTA\Type\OTAHotelRFPTransientNotifRS\OTAHotelRFPTransientNotifRSAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{
    /**
     * This is an open text field available to an organization to allow them to return a response indicating additional information is needed from the hotelier (e.g. not all requested information was supplied by the responding hotel and in order for the organization to review the proposal all information must be sent, please resend the information with all appropriate information).
     *
     * @var \Recranet\OTA\Type\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as comment
     *
     * This is an open text field available to an organization to allow them to return a response indicating additional information is needed from the hotelier (e.g. not all requested information was supplied by the responding hotel and in order for the organization to review the proposal all information must be sent, please resend the information with all appropriate information).
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This is an open text field available to an organization to allow them to return a response indicating additional information is needed from the hotelier (e.g. not all requested information was supplied by the responding hotel and in order for the organization to review the proposal all information must be sent, please resend the information with all appropriate information).
     *
     * @param \Recranet\OTA\Type\ParagraphType $comment
     * @return self
     */
    public function setComment(?\Recranet\OTA\Type\ParagraphType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

