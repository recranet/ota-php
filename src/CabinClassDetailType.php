<?php

namespace Recranet\OTA;

/**
 * Class representing CabinClassDetailType
 *
 * Detail information about a cabin class, including row characteristics, zone and seat details.
 * XSD Type: CabinClassDetailType
 */
class CabinClassDetailType
{
    /**
     * The cabin layout.
     *
     * @var string $layout
     */
    private $layout = null;

    /**
     * If true, this cabin is located on an upper deck.
     *
     * @var bool $upperDeckInd
     */
    private $upperDeckInd = null;

    /**
     * The column number associated with the row.
     *
     * @var int $columnNumber
     */
    private $columnNumber = null;

    /**
     * The number of columns the row spans.
     *
     * @var int $columnSpan
     */
    private $columnSpan = null;

    /**
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @var \Recranet\OTA\CabinClassAvailabilityType[] $availabilityList
     */
    private $availabilityList = [
        
    ];

    /**
     * Cabin row information.
     *
     * @var \Recranet\OTA\RowDetailType[] $rowInfo
     */
    private $rowInfo = [
        
    ];

    /**
     * Summary and detailed seat information.
     *
     * @var \Recranet\OTA\SeatDetailsType $seatInfo
     */
    private $seatInfo = null;

    /**
     * Zones associated with the cabin class.
     *
     * @var \Recranet\OTA\SeatZoneSummaryType[] $zone
     */
    private $zone = [
        
    ];

    /**
     * Gets as layout
     *
     * The cabin layout.
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Sets a new layout
     *
     * The cabin layout.
     *
     * @param string $layout
     * @return self
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * Gets as upperDeckInd
     *
     * If true, this cabin is located on an upper deck.
     *
     * @return bool
     */
    public function getUpperDeckInd()
    {
        return $this->upperDeckInd;
    }

    /**
     * Sets a new upperDeckInd
     *
     * If true, this cabin is located on an upper deck.
     *
     * @param bool $upperDeckInd
     * @return self
     */
    public function setUpperDeckInd($upperDeckInd)
    {
        $this->upperDeckInd = $upperDeckInd;
        return $this;
    }

    /**
     * Gets as columnNumber
     *
     * The column number associated with the row.
     *
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->columnNumber;
    }

    /**
     * Sets a new columnNumber
     *
     * The column number associated with the row.
     *
     * @param int $columnNumber
     * @return self
     */
    public function setColumnNumber($columnNumber)
    {
        $this->columnNumber = $columnNumber;
        return $this;
    }

    /**
     * Gets as columnSpan
     *
     * The number of columns the row spans.
     *
     * @return int
     */
    public function getColumnSpan()
    {
        return $this->columnSpan;
    }

    /**
     * Sets a new columnSpan
     *
     * The number of columns the row spans.
     *
     * @param int $columnSpan
     * @return self
     */
    public function setColumnSpan($columnSpan)
    {
        $this->columnSpan = $columnSpan;
        return $this;
    }

    /**
     * Adds as availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @return self
     * @param \Recranet\OTA\CabinClassAvailabilityType $availabilityList
     */
    public function addToAvailabilityList(\Recranet\OTA\CabinClassAvailabilityType $availabilityList)
    {
        $this->availabilityList[] = $availabilityList;
        return $this;
    }

    /**
     * isset availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailabilityList($index)
    {
        return isset($this->availabilityList[$index]);
    }

    /**
     * unset availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailabilityList($index)
    {
        unset($this->availabilityList[$index]);
    }

    /**
     * Gets as availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @return \Recranet\OTA\CabinClassAvailabilityType[]
     */
    public function getAvailabilityList()
    {
        return $this->availabilityList;
    }

    /**
     * Sets a new availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying seat details are in the Summary and Detail elements.
     *
     * @param \Recranet\OTA\CabinClassAvailabilityType[] $availabilityList
     * @return self
     */
    public function setAvailabilityList(array $availabilityList = null)
    {
        $this->availabilityList = $availabilityList;
        return $this;
    }

    /**
     * Adds as rowInfo
     *
     * Cabin row information.
     *
     * @return self
     * @param \Recranet\OTA\RowDetailType $rowInfo
     */
    public function addToRowInfo(\Recranet\OTA\RowDetailType $rowInfo)
    {
        $this->rowInfo[] = $rowInfo;
        return $this;
    }

    /**
     * isset rowInfo
     *
     * Cabin row information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRowInfo($index)
    {
        return isset($this->rowInfo[$index]);
    }

    /**
     * unset rowInfo
     *
     * Cabin row information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRowInfo($index)
    {
        unset($this->rowInfo[$index]);
    }

    /**
     * Gets as rowInfo
     *
     * Cabin row information.
     *
     * @return \Recranet\OTA\RowDetailType[]
     */
    public function getRowInfo()
    {
        return $this->rowInfo;
    }

    /**
     * Sets a new rowInfo
     *
     * Cabin row information.
     *
     * @param \Recranet\OTA\RowDetailType[] $rowInfo
     * @return self
     */
    public function setRowInfo(array $rowInfo = null)
    {
        $this->rowInfo = $rowInfo;
        return $this;
    }

    /**
     * Gets as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return \Recranet\OTA\SeatDetailsType
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }

    /**
     * Sets a new seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param \Recranet\OTA\SeatDetailsType $seatInfo
     * @return self
     */
    public function setSeatInfo(?\Recranet\OTA\SeatDetailsType $seatInfo = null)
    {
        $this->seatInfo = $seatInfo;
        return $this;
    }

    /**
     * Adds as zone
     *
     * Zones associated with the cabin class.
     *
     * @return self
     * @param \Recranet\OTA\SeatZoneSummaryType $zone
     */
    public function addToZone(\Recranet\OTA\SeatZoneSummaryType $zone)
    {
        $this->zone[] = $zone;
        return $this;
    }

    /**
     * isset zone
     *
     * Zones associated with the cabin class.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZone($index)
    {
        return isset($this->zone[$index]);
    }

    /**
     * unset zone
     *
     * Zones associated with the cabin class.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZone($index)
    {
        unset($this->zone[$index]);
    }

    /**
     * Gets as zone
     *
     * Zones associated with the cabin class.
     *
     * @return \Recranet\OTA\SeatZoneSummaryType[]
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets a new zone
     *
     * Zones associated with the cabin class.
     *
     * @param \Recranet\OTA\SeatZoneSummaryType[] $zone
     * @return self
     */
    public function setZone(array $zone = null)
    {
        $this->zone = $zone;
        return $this;
    }
}

