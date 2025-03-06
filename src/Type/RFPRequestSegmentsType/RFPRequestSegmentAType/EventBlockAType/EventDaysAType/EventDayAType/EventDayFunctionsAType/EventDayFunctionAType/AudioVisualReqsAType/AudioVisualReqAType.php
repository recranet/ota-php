<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType;

/**
 * Class representing AudioVisualReqAType
 */
class AudioVisualReqAType
{
    /**
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Describes whether the audio visual request is preferred or required.
     *
     * @var string $audioVisualPref
     */
    private $audioVisualPref = null;

    /**
     * Describes the number of audio visual units as described by the code.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * @var \Recranet\OTA\Type\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as audioVisualPref
     *
     * Describes whether the audio visual request is preferred or required.
     *
     * @return string
     */
    public function getAudioVisualPref()
    {
        return $this->audioVisualPref;
    }

    /**
     * Sets a new audioVisualPref
     *
     * Describes whether the audio visual request is preferred or required.
     *
     * @param string $audioVisualPref
     * @return self
     */
    public function setAudioVisualPref($audioVisualPref)
    {
        $this->audioVisualPref = $audioVisualPref;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Describes the number of audio visual units as described by the code.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Describes the number of audio visual units as described by the code.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \Recranet\OTA\Type\ParagraphType $comments
     * @return self
     */
    public function setComments(\Recranet\OTA\Type\ParagraphType $comments)
    {
        $this->comments = $comments;
        return $this;
    }
}

