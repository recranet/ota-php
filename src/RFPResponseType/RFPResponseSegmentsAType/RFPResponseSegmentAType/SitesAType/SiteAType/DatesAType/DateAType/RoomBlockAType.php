<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType;

/**
 * Class representing RoomBlockAType
 */
class RoomBlockAType
{
    /**
     * A collection of multiple StayDates.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[] $stayDates
     */
    private $stayDates = null;

    /**
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @var \Recranet\OTA\FeeType[] $fees
     */
    private $fees = null;

    /**
     * An open field to comment on the room block.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = [
        
    ];

    /**
     * Adds as stayDate
     *
     * A collection of multiple StayDates.
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate
     */
    public function addToStayDates(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType $stayDate)
    {
        $this->stayDates[] = $stayDate;
        return $this;
    }

    /**
     * isset stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDates($index)
    {
        return isset($this->stayDates[$index]);
    }

    /**
     * unset stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDates($index)
    {
        unset($this->stayDates[$index]);
    }

    /**
     * Gets as stayDates
     *
     * A collection of multiple StayDates.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[]
     */
    public function getStayDates()
    {
        return $this->stayDates;
    }

    /**
     * Sets a new stayDates
     *
     * A collection of multiple StayDates.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType[] $stayDates
     * @return self
     */
    public function setStayDates(array $stayDates = null)
    {
        $this->stayDates = $stayDates;
        return $this;
    }

    /**
     * Adds as fee
     *
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @return self
     * @param \Recranet\OTA\FeeType $fee
     */
    public function addToFees(\Recranet\OTA\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @return \Recranet\OTA\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * These fees apply to the dates or date range specified in the Date element. This provides the ability to apply fees to all room types being returned.
     *
     * @param \Recranet\OTA\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on the room block.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comments
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comments)
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * isset comments
     *
     * An open field to comment on the room block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * An open field to comment on the room block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the room block.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the room block.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

