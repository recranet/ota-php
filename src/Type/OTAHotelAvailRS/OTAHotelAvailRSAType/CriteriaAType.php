<?php

namespace Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType;

/**
 * Class representing CriteriaAType
 */
class CriteriaAType
{
    /**
     * @var \Recranet\OTA\Type\HotelSearchCriterionType[] $criterion
     */
    private $criterion = [
        
    ];

    /**
     * Adds as criterion
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType $criterion
     */
    public function addToCriterion(\Recranet\OTA\Type\HotelSearchCriterionType $criterion)
    {
        $this->criterion[] = $criterion;
        return $this;
    }

    /**
     * isset criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriterion($index)
    {
        return isset($this->criterion[$index]);
    }

    /**
     * unset criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriterion($index)
    {
        unset($this->criterion[$index]);
    }

    /**
     * Gets as criterion
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType[]
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType[] $criterion
     * @return self
     */
    public function setCriterion(array $criterion = null)
    {
        $this->criterion = $criterion;
        return $this;
    }
}

