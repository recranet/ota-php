<?php

namespace Recranet\OTA;

/**
 * Class representing RowDetailType
 *
 * Describes the row details in a seat map.
 * XSD Type: RowDetailType
 */
class RowDetailType
{
    /**
     * if true, the row is operable.
     *
     * @var bool $operableInd
     */
    private $operableInd = null;

    /**
     * The section of the plane the row is located in.
     *
     * @var string $planeSection
     */
    private $planeSection = null;

    /**
     * The grid number associated with the row.
     *
     * @var int $gridNumber
     */
    private $gridNumber = null;

    /**
     * If true, ths row is buffered.
     *
     * @var bool $bufferInd
     */
    private $bufferInd = null;

    /**
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @var string $cabinType
     */
    private $cabinType = null;

    /**
     * The row number.
     *
     * @var int $rowNumber
     */
    private $rowNumber = null;

    /**
     * Row characteristics.
     *
     * @var \Recranet\OTA\RowCharacteristicsType[] $characteristics
     */
    private $characteristics = [
        
    ];

    /**
     * Row description.
     *
     * @var \Recranet\OTA\FormattedTextTextType[] $description
     */
    private $description = [
        
    ];

    /**
     * Summary and detailed seat information.
     *
     * @var \Recranet\OTA\SeatDetailsType[] $seatInfo
     */
    private $seatInfo = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as operableInd
     *
     * if true, the row is operable.
     *
     * @return bool
     */
    public function getOperableInd()
    {
        return $this->operableInd;
    }

    /**
     * Sets a new operableInd
     *
     * if true, the row is operable.
     *
     * @param bool $operableInd
     * @return self
     */
    public function setOperableInd($operableInd)
    {
        $this->operableInd = $operableInd;
        return $this;
    }

    /**
     * Gets as planeSection
     *
     * The section of the plane the row is located in.
     *
     * @return string
     */
    public function getPlaneSection()
    {
        return $this->planeSection;
    }

    /**
     * Sets a new planeSection
     *
     * The section of the plane the row is located in.
     *
     * @param string $planeSection
     * @return self
     */
    public function setPlaneSection($planeSection)
    {
        $this->planeSection = $planeSection;
        return $this;
    }

    /**
     * Gets as gridNumber
     *
     * The grid number associated with the row.
     *
     * @return int
     */
    public function getGridNumber()
    {
        return $this->gridNumber;
    }

    /**
     * Sets a new gridNumber
     *
     * The grid number associated with the row.
     *
     * @param int $gridNumber
     * @return self
     */
    public function setGridNumber($gridNumber)
    {
        $this->gridNumber = $gridNumber;
        return $this;
    }

    /**
     * Gets as bufferInd
     *
     * If true, ths row is buffered.
     *
     * @return bool
     */
    public function getBufferInd()
    {
        return $this->bufferInd;
    }

    /**
     * Sets a new bufferInd
     *
     * If true, ths row is buffered.
     *
     * @param bool $bufferInd
     * @return self
     */
    public function setBufferInd($bufferInd)
    {
        $this->bufferInd = $bufferInd;
        return $this;
    }

    /**
     * Gets as cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;
        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * The row number.
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
     * The row number.
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
     * Adds as characteristics
     *
     * Row characteristics.
     *
     * @return self
     * @param \Recranet\OTA\RowCharacteristicsType $characteristics
     */
    public function addToCharacteristics(\Recranet\OTA\RowCharacteristicsType $characteristics)
    {
        $this->characteristics[] = $characteristics;
        return $this;
    }

    /**
     * isset characteristics
     *
     * Row characteristics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristics($index)
    {
        return isset($this->characteristics[$index]);
    }

    /**
     * unset characteristics
     *
     * Row characteristics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristics($index)
    {
        unset($this->characteristics[$index]);
    }

    /**
     * Gets as characteristics
     *
     * Row characteristics.
     *
     * @return \Recranet\OTA\RowCharacteristicsType[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * Row characteristics.
     *
     * @param \Recranet\OTA\RowCharacteristicsType[] $characteristics
     * @return self
     */
    public function setCharacteristics(array $characteristics = null)
    {
        $this->characteristics = $characteristics;
        return $this;
    }

    /**
     * Adds as description
     *
     * Row description.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextTextType $description
     */
    public function addToDescription(\Recranet\OTA\FormattedTextTextType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Row description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Row description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Row description.
     *
     * @return \Recranet\OTA\FormattedTextTextType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Row description.
     *
     * @param \Recranet\OTA\FormattedTextTextType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return self
     * @param \Recranet\OTA\SeatDetailsType $seatInfo
     */
    public function addToSeatInfo(\Recranet\OTA\SeatDetailsType $seatInfo)
    {
        $this->seatInfo[] = $seatInfo;
        return $this;
    }

    /**
     * isset seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatInfo($index)
    {
        return isset($this->seatInfo[$index]);
    }

    /**
     * unset seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatInfo($index)
    {
        unset($this->seatInfo[$index]);
    }

    /**
     * Gets as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return \Recranet\OTA\SeatDetailsType[]
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
     * @param \Recranet\OTA\SeatDetailsType[] $seatInfo
     * @return self
     */
    public function setSeatInfo(array $seatInfo = null)
    {
        $this->seatInfo = $seatInfo;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

