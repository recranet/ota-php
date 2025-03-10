<?php

namespace Recranet\OTA\Type\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing SegmentOverrideAType
 */
class SegmentOverrideAType
{
    /**
     * Used to specify a segment that should be overridden.
     *
     * @var int $segmentNumber
     */
    private $segmentNumber = null;

    /**
     * Used to specify what should be overridden.
     *
     * @var string $segmentType
     */
    private $segmentType = null;

    /**
     * Gets as segmentNumber
     *
     * Used to specify a segment that should be overridden.
     *
     * @return int
     */
    public function getSegmentNumber()
    {
        return $this->segmentNumber;
    }

    /**
     * Sets a new segmentNumber
     *
     * Used to specify a segment that should be overridden.
     *
     * @param int $segmentNumber
     * @return self
     */
    public function setSegmentNumber($segmentNumber)
    {
        $this->segmentNumber = $segmentNumber;
        return $this;
    }

    /**
     * Gets as segmentType
     *
     * Used to specify what should be overridden.
     *
     * @return string
     */
    public function getSegmentType()
    {
        return $this->segmentType;
    }

    /**
     * Sets a new segmentType
     *
     * Used to specify what should be overridden.
     *
     * @param string $segmentType
     * @return self
     */
    public function setSegmentType($segmentType)
    {
        $this->segmentType = $segmentType;
        return $this;
    }
}

