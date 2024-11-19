<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{
    /**
     * Specifies a
     * specific date or date range.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[] $date
     */
    private $date = [
        
    ];

    /**
     * Comments regarding the set of date ranges as a whole.
     *
     * @var \Recranet\OTA\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Adds as date
     *
     * Specifies a
     * specific date or date range.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType $date
     */
    public function addToDate(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Specifies a
     * specific date or date range.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as comments
     *
     * Comments regarding the set of date ranges as a whole.
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments regarding the set of date ranges as a whole.
     *
     * @param \Recranet\OTA\ParagraphType $comments
     * @return self
     */
    public function setComments(?\Recranet\OTA\ParagraphType $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

