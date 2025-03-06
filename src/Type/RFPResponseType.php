<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RFPResponseType
 *
 * Provides detailed RFP information.
 * XSD Type: RFP_ResponseType
 */
class RFPResponseType
{
    /**
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[] $rFPResponseSegments
     */
    private $rFPResponseSegments = null;

    /**
     * This is a UniqueID that is associated with the messages that may include more than one RFP. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @var \Recranet\OTA\Type\RFPResponseType\MessageIDAType $messageID
     */
    private $messageID = null;

    /**
     * Adds as rFPResponseSegment
     *
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType $rFPResponseSegment
     */
    public function addToRFPResponseSegments(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType $rFPResponseSegment)
    {
        $this->rFPResponseSegments[] = $rFPResponseSegment;
        return $this;
    }

    /**
     * isset rFPResponseSegments
     *
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPResponseSegments($index)
    {
        return isset($this->rFPResponseSegments[$index]);
    }

    /**
     * unset rFPResponseSegments
     *
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPResponseSegments($index)
    {
        unset($this->rFPResponseSegments[$index]);
    }

    /**
     * Gets as rFPResponseSegments
     *
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[]
     */
    public function getRFPResponseSegments()
    {
        return $this->rFPResponseSegments;
    }

    /**
     * Sets a new rFPResponseSegments
     *
     * A collection of ResponseSegments that allows multiple responses for different blocks of rooms and/or meeting space to be sent in one message.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[] $rFPResponseSegments
     * @return self
     */
    public function setRFPResponseSegments(array $rFPResponseSegments)
    {
        $this->rFPResponseSegments = $rFPResponseSegments;
        return $this;
    }

    /**
     * Gets as messageID
     *
     * This is a UniqueID that is associated with the messages that may include more than one RFP. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @return \Recranet\OTA\Type\RFPResponseType\MessageIDAType
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * This is a UniqueID that is associated with the messages that may include more than one RFP. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @param \Recranet\OTA\Type\RFPResponseType\MessageIDAType $messageID
     * @return self
     */
    public function setMessageID(?\Recranet\OTA\Type\RFPResponseType\MessageIDAType $messageID = null)
    {
        $this->messageID = $messageID;
        return $this;
    }
}

