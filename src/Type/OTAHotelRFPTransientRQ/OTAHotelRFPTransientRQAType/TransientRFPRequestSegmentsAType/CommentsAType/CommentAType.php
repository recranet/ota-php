<?php

namespace Recranet\OTA\Type\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\CommentsAType;

use Recranet\OTA\Type\ParagraphType;

/**
 * Class representing CommentAType
 */
class CommentAType extends ParagraphType
{
    /**
     * This is used to identify the format in which the response should return the specific requested data.
     *
     * @var string $formatType
     */
    private $formatType = null;

    /**
     * Gets as formatType
     *
     * This is used to identify the format in which the response should return the specific requested data.
     *
     * @return string
     */
    public function getFormatType()
    {
        return $this->formatType;
    }

    /**
     * Sets a new formatType
     *
     * This is used to identify the format in which the response should return the specific requested data.
     *
     * @param string $formatType
     * @return self
     */
    public function setFormatType($formatType)
    {
        $this->formatType = $formatType;
        return $this;
    }
}

