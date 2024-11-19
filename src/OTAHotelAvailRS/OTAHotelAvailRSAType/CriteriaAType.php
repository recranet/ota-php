<?php

namespace Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType;

/**
 * Class representing CriteriaAType
 */
class CriteriaAType
{
    /**
     * @var \Recranet\OTA\HotelSearchCriterionType[] $criterion
     */
    private $criterion = [
        
    ];

    /**
     * Adds as criterion
     *
     * @return self
     * @param \Recranet\OTA\HotelSearchCriterionType $criterion
     */
    public function addToCriterion(\Recranet\OTA\HotelSearchCriterionType $criterion)
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
     * @return \Recranet\OTA\HotelSearchCriterionType[]
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * @param \Recranet\OTA\HotelSearchCriterionType[] $criterion
     * @return self
     */
    public function setCriterion(array $criterion = null)
    {
        $this->criterion = $criterion;
        return $this;
    }
}

