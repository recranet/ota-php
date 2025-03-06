<?php

namespace Recranet\OTA\Type\EnvironmentalImpactType;

/**
 * Class representing RecyclingAType
 */
class RecyclingAType
{
    /**
     * Active recycling program indicator.
     * Example: true
     * Implementer: If true, the property has an active recycling program.
     *
     * @var bool $activeProgramInd
     */
    private $activeProgramInd = null;

    /**
     * Non-disposable dishware indicator.
     * Example: true
     * Implementer: If true, the property uses cups, glasses, dishes, tableware and other items are long-lasting and not disposable.
     *
     * @var bool $ecologicalDishwareInd
     */
    private $ecologicalDishwareInd = null;

    /**
     * Recycling details.
     *
     * @var \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType\DetailsAType $details
     */
    private $details = null;

    /**
     * Recycling program description.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $programDescription
     */
    private $programDescription = [
        
    ];

    /**
     * Gets as activeProgramInd
     *
     * Active recycling program indicator.
     * Example: true
     * Implementer: If true, the property has an active recycling program.
     *
     * @return bool
     */
    public function getActiveProgramInd()
    {
        return $this->activeProgramInd;
    }

    /**
     * Sets a new activeProgramInd
     *
     * Active recycling program indicator.
     * Example: true
     * Implementer: If true, the property has an active recycling program.
     *
     * @param bool $activeProgramInd
     * @return self
     */
    public function setActiveProgramInd($activeProgramInd)
    {
        $this->activeProgramInd = $activeProgramInd;
        return $this;
    }

    /**
     * Gets as ecologicalDishwareInd
     *
     * Non-disposable dishware indicator.
     * Example: true
     * Implementer: If true, the property uses cups, glasses, dishes, tableware and other items are long-lasting and not disposable.
     *
     * @return bool
     */
    public function getEcologicalDishwareInd()
    {
        return $this->ecologicalDishwareInd;
    }

    /**
     * Sets a new ecologicalDishwareInd
     *
     * Non-disposable dishware indicator.
     * Example: true
     * Implementer: If true, the property uses cups, glasses, dishes, tableware and other items are long-lasting and not disposable.
     *
     * @param bool $ecologicalDishwareInd
     * @return self
     */
    public function setEcologicalDishwareInd($ecologicalDishwareInd)
    {
        $this->ecologicalDishwareInd = $ecologicalDishwareInd;
        return $this;
    }

    /**
     * Gets as details
     *
     * Recycling details.
     *
     * @return \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Recycling details.
     *
     * @param \Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType\DetailsAType $details
     * @return self
     */
    public function setDetails(?\Recranet\OTA\Type\EnvironmentalImpactType\RecyclingAType\DetailsAType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Recycling program description.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $programDescription
     */
    public function addToProgramDescription(\Recranet\OTA\Type\ParagraphType $programDescription)
    {
        $this->programDescription[] = $programDescription;
        return $this;
    }

    /**
     * isset programDescription
     *
     * Recycling program description.
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
     * Recycling program description.
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
     * Recycling program description.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * Recycling program description.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription = null)
    {
        $this->programDescription = $programDescription;
        return $this;
    }
}

