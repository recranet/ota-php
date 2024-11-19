<?php

namespace Recranet\OTA;

/**
 * Class representing RFPTransientDetailsType
 *
 * This is used by OTA_HotelRFP_TransientNotifRQ schema. This accommodates detailed transient RFP information.
 * XSD Type: RFP_TransientDetailsType
 */
class RFPTransientDetailsType
{
    /**
     * A collection of RFP Transient Responses
     *
     * @var \Recranet\OTA\RFPTransientResponseType[] $rFPTransientResponses
     */
    private $rFPTransientResponses = null;

    /**
     * The ID is used to identify the original request. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @var \Recranet\OTA\RFPTransientDetailsType\MessageIDAType $messageID
     */
    private $messageID = null;

    /**
     * Adds as rFPTransientResponse
     *
     * A collection of RFP Transient Responses
     *
     * @return self
     * @param \Recranet\OTA\RFPTransientResponseType $rFPTransientResponse
     */
    public function addToRFPTransientResponses(\Recranet\OTA\RFPTransientResponseType $rFPTransientResponse)
    {
        $this->rFPTransientResponses[] = $rFPTransientResponse;
        return $this;
    }

    /**
     * isset rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPTransientResponses($index)
    {
        return isset($this->rFPTransientResponses[$index]);
    }

    /**
     * unset rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPTransientResponses($index)
    {
        unset($this->rFPTransientResponses[$index]);
    }

    /**
     * Gets as rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @return \Recranet\OTA\RFPTransientResponseType[]
     */
    public function getRFPTransientResponses()
    {
        return $this->rFPTransientResponses;
    }

    /**
     * Sets a new rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param \Recranet\OTA\RFPTransientResponseType[] $rFPTransientResponses
     * @return self
     */
    public function setRFPTransientResponses(array $rFPTransientResponses = null)
    {
        $this->rFPTransientResponses = $rFPTransientResponses;
        return $this;
    }

    /**
     * Gets as messageID
     *
     * The ID is used to identify the original request. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @return \Recranet\OTA\RFPTransientDetailsType\MessageIDAType
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * The ID is used to identify the original request. The instance attribute is used to indicate subsequent transmissions of new or updated information (e.g. an initial message will be instance 1 and an update to this message will be reflected with instance 2).
     *
     * @param \Recranet\OTA\RFPTransientDetailsType\MessageIDAType $messageID
     * @return self
     */
    public function setMessageID(?\Recranet\OTA\RFPTransientDetailsType\MessageIDAType $messageID = null)
    {
        $this->messageID = $messageID;
        return $this;
    }
}

