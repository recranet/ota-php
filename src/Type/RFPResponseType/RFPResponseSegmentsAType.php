<?php

namespace Recranet\OTA\Type\RFPResponseType;

/**
 * Class representing RFPResponseSegmentsAType
 */
class RFPResponseSegmentsAType
{
    /**
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[] $rFPResponseSegment
     */
    private $rFPResponseSegment = [
        
    ];

    /**
     * Adds as rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType $rFPResponseSegment
     */
    public function addToRFPResponseSegment(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType $rFPResponseSegment)
    {
        $this->rFPResponseSegment[] = $rFPResponseSegment;
        return $this;
    }

    /**
     * isset rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPResponseSegment($index)
    {
        return isset($this->rFPResponseSegment[$index]);
    }

    /**
     * unset rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPResponseSegment($index)
    {
        unset($this->rFPResponseSegment[$index]);
    }

    /**
     * Gets as rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[]
     */
    public function getRFPResponseSegment()
    {
        return $this->rFPResponseSegment;
    }

    /**
     * Sets a new rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[] $rFPResponseSegment
     * @return self
     */
    public function setRFPResponseSegment(array $rFPResponseSegment)
    {
        $this->rFPResponseSegment = $rFPResponseSegment;
        return $this;
    }
}

