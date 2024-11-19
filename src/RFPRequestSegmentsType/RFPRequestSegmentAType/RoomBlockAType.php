<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing RoomBlockAType
 */
class RoomBlockAType
{
    /**
     * Total number of room nights needed for the entire event.
     *
     * @var int $totalRoomNightQuantity
     */
    private $totalRoomNightQuantity = null;

    /**
     * Total number of rooms needed on the peak night. APEX add. Sandy to look for potential reuse.
     *
     * @var int $peakRoomNightQuantity
     */
    private $peakRoomNightQuantity = null;

    /**
     * If true, used to indicate a rebate, assessment or commision exists. If false, rebates, assessments or commissions do not exist for this RFP.
     *
     * @var bool $concessionsIndicator
     */
    private $concessionsIndicator = null;

    /**
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\BudgetedRoomRateAType[] $budgetedRoomRate
     */
    private $budgetedRoomRate = [
        
    ];

    /**
     * Contains information regarding the reservation method.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\ReservationMethodAType[] $reservationMethod
     */
    private $reservationMethod = [
        
    ];

    /**
     * A collection of multiple StayDays.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType $stayDays
     */
    private $stayDays = null;

    /**
     * An open field to comment on the room block.
     *
     * @var \Recranet\OTA\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Gets as totalRoomNightQuantity
     *
     * Total number of room nights needed for the entire event.
     *
     * @return int
     */
    public function getTotalRoomNightQuantity()
    {
        return $this->totalRoomNightQuantity;
    }

    /**
     * Sets a new totalRoomNightQuantity
     *
     * Total number of room nights needed for the entire event.
     *
     * @param int $totalRoomNightQuantity
     * @return self
     */
    public function setTotalRoomNightQuantity($totalRoomNightQuantity)
    {
        $this->totalRoomNightQuantity = $totalRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night. APEX add. Sandy to look for potential reuse.
     *
     * @return int
     */
    public function getPeakRoomNightQuantity()
    {
        return $this->peakRoomNightQuantity;
    }

    /**
     * Sets a new peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night. APEX add. Sandy to look for potential reuse.
     *
     * @param int $peakRoomNightQuantity
     * @return self
     */
    public function setPeakRoomNightQuantity($peakRoomNightQuantity)
    {
        $this->peakRoomNightQuantity = $peakRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as concessionsIndicator
     *
     * If true, used to indicate a rebate, assessment or commision exists. If false, rebates, assessments or commissions do not exist for this RFP.
     *
     * @return bool
     */
    public function getConcessionsIndicator()
    {
        return $this->concessionsIndicator;
    }

    /**
     * Sets a new concessionsIndicator
     *
     * If true, used to indicate a rebate, assessment or commision exists. If false, rebates, assessments or commissions do not exist for this RFP.
     *
     * @param bool $concessionsIndicator
     * @return self
     */
    public function setConcessionsIndicator($concessionsIndicator)
    {
        $this->concessionsIndicator = $concessionsIndicator;
        return $this;
    }

    /**
     * Adds as budgetedRoomRate
     *
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\BudgetedRoomRateAType $budgetedRoomRate
     */
    public function addToBudgetedRoomRate(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\BudgetedRoomRateAType $budgetedRoomRate)
    {
        $this->budgetedRoomRate[] = $budgetedRoomRate;
        return $this;
    }

    /**
     * isset budgetedRoomRate
     *
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetedRoomRate($index)
    {
        return isset($this->budgetedRoomRate[$index]);
    }

    /**
     * unset budgetedRoomRate
     *
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetedRoomRate($index)
    {
        unset($this->budgetedRoomRate[$index]);
    }

    /**
     * Gets as budgetedRoomRate
     *
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\BudgetedRoomRateAType[]
     */
    public function getBudgetedRoomRate()
    {
        return $this->budgetedRoomRate;
    }

    /**
     * Sets a new budgetedRoomRate
     *
     * A general indication of the planner's budget for individual room nights and/or delegate rates.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\BudgetedRoomRateAType[] $budgetedRoomRate
     * @return self
     */
    public function setBudgetedRoomRate(array $budgetedRoomRate = null)
    {
        $this->budgetedRoomRate = $budgetedRoomRate;
        return $this;
    }

    /**
     * Adds as reservationMethod
     *
     * Contains information regarding the reservation method.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\ReservationMethodAType $reservationMethod
     */
    public function addToReservationMethod(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\ReservationMethodAType $reservationMethod)
    {
        $this->reservationMethod[] = $reservationMethod;
        return $this;
    }

    /**
     * isset reservationMethod
     *
     * Contains information regarding the reservation method.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReservationMethod($index)
    {
        return isset($this->reservationMethod[$index]);
    }

    /**
     * unset reservationMethod
     *
     * Contains information regarding the reservation method.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReservationMethod($index)
    {
        unset($this->reservationMethod[$index]);
    }

    /**
     * Gets as reservationMethod
     *
     * Contains information regarding the reservation method.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\ReservationMethodAType[]
     */
    public function getReservationMethod()
    {
        return $this->reservationMethod;
    }

    /**
     * Sets a new reservationMethod
     *
     * Contains information regarding the reservation method.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\ReservationMethodAType[] $reservationMethod
     * @return self
     */
    public function setReservationMethod(array $reservationMethod = null)
    {
        $this->reservationMethod = $reservationMethod;
        return $this;
    }

    /**
     * Gets as stayDays
     *
     * A collection of multiple StayDays.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType
     */
    public function getStayDays()
    {
        return $this->stayDays;
    }

    /**
     * Sets a new stayDays
     *
     * A collection of multiple StayDays.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType $stayDays
     * @return self
     */
    public function setStayDays(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType $stayDays = null)
    {
        $this->stayDays = $stayDays;
        return $this;
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the room block.
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
     * An open field to comment on the room block.
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

