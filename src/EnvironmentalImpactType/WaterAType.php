<?php

namespace Recranet\OTA\EnvironmentalImpactType;

/**
 * Class representing WaterAType
 */
class WaterAType
{
    /**
     * Grey water recycling indicator.
     * Example: true
     * Implementer: If true, the property recycles gray-water through watering of plants and landscaping.
     *
     * @var bool $grayWaterInd
     */
    private $grayWaterInd = null;

    /**
     * Active water conservation program indicator.
     * Example: true
     * Implementer: If true, the property has an active water conservation program in place, that may include low flow shower heads and toilets.
     *
     * @var bool $waterProgramInd
     */
    private $waterProgramInd = null;

    /**
     * Water usage per room per night.
     * Example: 60
     * Implementer: The associated unit of measure is specified in the WaterUOM element.
     *
     * @var int $perRoomNightUsage
     */
    private $perRoomNightUsage = null;

    /**
     * Water usage per room per day.
     * Example: 40
     * Implementer: The associated water unit of measure is specified in the WaterUOM element.
     *
     * @var int $perRoomDayUsage
     */
    private $perRoomDayUsage = null;

    /**
     * Defines the waste diversion rate.
     *
     * @var float $wasteDiversionPercentage
     */
    private $wasteDiversionPercentage = null;

    /**
     * Water unit of measure.
     * Example: Gallon(s)
     *
     * @var \Recranet\OTA\ListUnitOfMeasureType $waterUOM
     */
    private $waterUOM = null;

    /**
     * Water conservation program description.
     *
     * @var \Recranet\OTA\ParagraphType[] $programDescription
     */
    private $programDescription = [
        
    ];

    /**
     * Gets as grayWaterInd
     *
     * Grey water recycling indicator.
     * Example: true
     * Implementer: If true, the property recycles gray-water through watering of plants and landscaping.
     *
     * @return bool
     */
    public function getGrayWaterInd()
    {
        return $this->grayWaterInd;
    }

    /**
     * Sets a new grayWaterInd
     *
     * Grey water recycling indicator.
     * Example: true
     * Implementer: If true, the property recycles gray-water through watering of plants and landscaping.
     *
     * @param bool $grayWaterInd
     * @return self
     */
    public function setGrayWaterInd($grayWaterInd)
    {
        $this->grayWaterInd = $grayWaterInd;
        return $this;
    }

    /**
     * Gets as waterProgramInd
     *
     * Active water conservation program indicator.
     * Example: true
     * Implementer: If true, the property has an active water conservation program in place, that may include low flow shower heads and toilets.
     *
     * @return bool
     */
    public function getWaterProgramInd()
    {
        return $this->waterProgramInd;
    }

    /**
     * Sets a new waterProgramInd
     *
     * Active water conservation program indicator.
     * Example: true
     * Implementer: If true, the property has an active water conservation program in place, that may include low flow shower heads and toilets.
     *
     * @param bool $waterProgramInd
     * @return self
     */
    public function setWaterProgramInd($waterProgramInd)
    {
        $this->waterProgramInd = $waterProgramInd;
        return $this;
    }

    /**
     * Gets as perRoomNightUsage
     *
     * Water usage per room per night.
     * Example: 60
     * Implementer: The associated unit of measure is specified in the WaterUOM element.
     *
     * @return int
     */
    public function getPerRoomNightUsage()
    {
        return $this->perRoomNightUsage;
    }

    /**
     * Sets a new perRoomNightUsage
     *
     * Water usage per room per night.
     * Example: 60
     * Implementer: The associated unit of measure is specified in the WaterUOM element.
     *
     * @param int $perRoomNightUsage
     * @return self
     */
    public function setPerRoomNightUsage($perRoomNightUsage)
    {
        $this->perRoomNightUsage = $perRoomNightUsage;
        return $this;
    }

    /**
     * Gets as perRoomDayUsage
     *
     * Water usage per room per day.
     * Example: 40
     * Implementer: The associated water unit of measure is specified in the WaterUOM element.
     *
     * @return int
     */
    public function getPerRoomDayUsage()
    {
        return $this->perRoomDayUsage;
    }

    /**
     * Sets a new perRoomDayUsage
     *
     * Water usage per room per day.
     * Example: 40
     * Implementer: The associated water unit of measure is specified in the WaterUOM element.
     *
     * @param int $perRoomDayUsage
     * @return self
     */
    public function setPerRoomDayUsage($perRoomDayUsage)
    {
        $this->perRoomDayUsage = $perRoomDayUsage;
        return $this;
    }

    /**
     * Gets as wasteDiversionPercentage
     *
     * Defines the waste diversion rate.
     *
     * @return float
     */
    public function getWasteDiversionPercentage()
    {
        return $this->wasteDiversionPercentage;
    }

    /**
     * Sets a new wasteDiversionPercentage
     *
     * Defines the waste diversion rate.
     *
     * @param float $wasteDiversionPercentage
     * @return self
     */
    public function setWasteDiversionPercentage($wasteDiversionPercentage)
    {
        $this->wasteDiversionPercentage = $wasteDiversionPercentage;
        return $this;
    }

    /**
     * Gets as waterUOM
     *
     * Water unit of measure.
     * Example: Gallon(s)
     *
     * @return \Recranet\OTA\ListUnitOfMeasureType
     */
    public function getWaterUOM()
    {
        return $this->waterUOM;
    }

    /**
     * Sets a new waterUOM
     *
     * Water unit of measure.
     * Example: Gallon(s)
     *
     * @param \Recranet\OTA\ListUnitOfMeasureType $waterUOM
     * @return self
     */
    public function setWaterUOM(?\Recranet\OTA\ListUnitOfMeasureType $waterUOM = null)
    {
        $this->waterUOM = $waterUOM;
        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Water conservation program description.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $programDescription
     */
    public function addToProgramDescription(\Recranet\OTA\ParagraphType $programDescription)
    {
        $this->programDescription[] = $programDescription;
        return $this;
    }

    /**
     * isset programDescription
     *
     * Water conservation program description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramDescription($index)
    {
        return isset($this->programDescription[$index]);
    }

    /**
     * unset programDescription
     *
     * Water conservation program description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramDescription($index)
    {
        unset($this->programDescription[$index]);
    }

    /**
     * Gets as programDescription
     *
     * Water conservation program description.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * Water conservation program description.
     *
     * @param \Recranet\OTA\ParagraphType[] $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription = null)
    {
        $this->programDescription = $programDescription;
        return $this;
    }
}

