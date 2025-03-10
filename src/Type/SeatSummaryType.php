<?php

namespace Recranet\OTA\Type;

/**
 * Class representing SeatSummaryType
 *
 * Describes summary seat information, including number and characteristics.
 * XSD Type: SeatSummaryType
 */
class SeatSummaryType
{
    /**
     * A unique ID for this seat that may be used elsewhere in the message.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @var string $seatSection
     */
    private $seatSection = null;

    /**
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @var string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Specifies the actual (physical) row number in the seat map.
     *
     * @var int $rowNumber
     */
    private $rowNumber = null;

    /**
     * Allows that a seat may be assigned a class code.
     *
     * @var string $airBookDesigCode
     */
    private $airBookDesigCode = null;

    /**
     * The absolute sequence of seat within a row that describes seats and locations outside the physical sequence, e.g. aisles, galleys or jumpseats.
     *
     * @var int $seatSequenceNumber
     */
    private $seatSequenceNumber = null;

    /**
     * If true, advanced purchase is required for this seat.
     *
     * @var bool $advancePurchaseInd
     */
    private $advancePurchaseInd = null;

    /**
     * If true, this seat is available.
     *
     * @var bool $availableInd
     */
    private $availableInd = null;

    /**
     * If true, this seat is not operational.
     *
     * @var bool $inoperativeInd
     */
    private $inoperativeInd = null;

    /**
     * If true, this seat is occupied and/or already reserved.
     *
     * @var bool $occupiedInd
     */
    private $occupiedInd = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as rPH
     *
     * A unique ID for this seat that may be used elsewhere in the message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this seat that may be used elsewhere in the message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as seatSection
     *
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @return string
     */
    public function getSeatSection()
    {
        return $this->seatSection;
    }

    /**
     * Sets a new seatSection
     *
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @param string $seatSection
     * @return self
     */
    public function setSeatSection($seatSection)
    {
        $this->seatSection = $seatSection;
        return $this;
    }

    /**
     * Gets as seatNumber
     *
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * The seat number that includes row number and seat section, e.g. "2C".
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Specifies the actual (physical) row number in the seat map.
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Specifies the actual (physical) row number in the seat map.
     *
     * @param int $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;
        return $this;
    }

    /**
     * Gets as airBookDesigCode
     *
     * Allows that a seat may be assigned a class code.
     *
     * @return string
     */
    public function getAirBookDesigCode()
    {
        return $this->airBookDesigCode;
    }

    /**
     * Sets a new airBookDesigCode
     *
     * Allows that a seat may be assigned a class code.
     *
     * @param string $airBookDesigCode
     * @return self
     */
    public function setAirBookDesigCode($airBookDesigCode)
    {
        $this->airBookDesigCode = $airBookDesigCode;
        return $this;
    }

    /**
     * Gets as seatSequenceNumber
     *
     * The absolute sequence of seat within a row that describes seats and locations outside the physical sequence, e.g. aisles, galleys or jumpseats.
     *
     * @return int
     */
    public function getSeatSequenceNumber()
    {
        return $this->seatSequenceNumber;
    }

    /**
     * Sets a new seatSequenceNumber
     *
     * The absolute sequence of seat within a row that describes seats and locations outside the physical sequence, e.g. aisles, galleys or jumpseats.
     *
     * @param int $seatSequenceNumber
     * @return self
     */
    public function setSeatSequenceNumber($seatSequenceNumber)
    {
        $this->seatSequenceNumber = $seatSequenceNumber;
        return $this;
    }

    /**
     * Gets as advancePurchaseInd
     *
     * If true, advanced purchase is required for this seat.
     *
     * @return bool
     */
    public function getAdvancePurchaseInd()
    {
        return $this->advancePurchaseInd;
    }

    /**
     * Sets a new advancePurchaseInd
     *
     * If true, advanced purchase is required for this seat.
     *
     * @param bool $advancePurchaseInd
     * @return self
     */
    public function setAdvancePurchaseInd($advancePurchaseInd)
    {
        $this->advancePurchaseInd = $advancePurchaseInd;
        return $this;
    }

    /**
     * Gets as availableInd
     *
     * If true, this seat is available.
     *
     * @return bool
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * If true, this seat is available.
     *
     * @param bool $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;
        return $this;
    }

    /**
     * Gets as inoperativeInd
     *
     * If true, this seat is not operational.
     *
     * @return bool
     */
    public function getInoperativeInd()
    {
        return $this->inoperativeInd;
    }

    /**
     * Sets a new inoperativeInd
     *
     * If true, this seat is not operational.
     *
     * @param bool $inoperativeInd
     * @return self
     */
    public function setInoperativeInd($inoperativeInd)
    {
        $this->inoperativeInd = $inoperativeInd;
        return $this;
    }

    /**
     * Gets as occupiedInd
     *
     * If true, this seat is occupied and/or already reserved.
     *
     * @return bool
     */
    public function getOccupiedInd()
    {
        return $this->occupiedInd;
    }

    /**
     * Sets a new occupiedInd
     *
     * If true, this seat is occupied and/or already reserved.
     *
     * @param bool $occupiedInd
     * @return self
     */
    public function setOccupiedInd($occupiedInd)
    {
        $this->occupiedInd = $occupiedInd;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

