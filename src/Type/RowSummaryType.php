<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RowSummaryType
 *
 * Describes summary row information, including number and characteristics.
 * XSD Type: RowSummaryType
 */
class RowSummaryType
{
    /**
     * Maximum number of seats per row.
     *
     * @var int $maxNumberOfSeats
     */
    private $maxNumberOfSeats = null;

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
     * The absolute sequence number of real or virtual rows on a plane for describing non-existing intermediate rows, e.g. aisles, galleys or jumpseats.
     *
     * @var int $rowSequenceNumber
     */
    private $rowSequenceNumber = null;

    /**
     * The quantity of coulmns associated with the row.
     *
     * @var int $columnQty
     */
    private $columnQty = null;

    /**
     * Gets as maxNumberOfSeats
     *
     * Maximum number of seats per row.
     *
     * @return int
     */
    public function getMaxNumberOfSeats()
    {
        return $this->maxNumberOfSeats;
    }

    /**
     * Sets a new maxNumberOfSeats
     *
     * Maximum number of seats per row.
     *
     * @param int $maxNumberOfSeats
     * @return self
     */
    public function setMaxNumberOfSeats($maxNumberOfSeats)
    {
        $this->maxNumberOfSeats = $maxNumberOfSeats;
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
     * Gets as rowSequenceNumber
     *
     * The absolute sequence number of real or virtual rows on a plane for describing non-existing intermediate rows, e.g. aisles, galleys or jumpseats.
     *
     * @return int
     */
    public function getRowSequenceNumber()
    {
        return $this->rowSequenceNumber;
    }

    /**
     * Sets a new rowSequenceNumber
     *
     * The absolute sequence number of real or virtual rows on a plane for describing non-existing intermediate rows, e.g. aisles, galleys or jumpseats.
     *
     * @param int $rowSequenceNumber
     * @return self
     */
    public function setRowSequenceNumber($rowSequenceNumber)
    {
        $this->rowSequenceNumber = $rowSequenceNumber;
        return $this;
    }

    /**
     * Gets as columnQty
     *
     * The quantity of coulmns associated with the row.
     *
     * @return int
     */
    public function getColumnQty()
    {
        return $this->columnQty;
    }

    /**
     * Sets a new columnQty
     *
     * The quantity of coulmns associated with the row.
     *
     * @param int $columnQty
     * @return self
     */
    public function setColumnQty($columnQty)
    {
        $this->columnQty = $columnQty;
        return $this;
    }
}

