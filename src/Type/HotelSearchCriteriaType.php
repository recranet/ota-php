<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelSearchCriteriaType
 *
 * A collection of single search criterion items.
 * XSD Type: HotelSearchCriteriaType
 */
class HotelSearchCriteriaType
{
    /**
     * When true, return only hotels that are available.
     *
     * @var bool $availableOnlyIndicator
     */
    private $availableOnlyIndicator = null;

    /**
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @var bool $bestOnlyIndicator
     */
    private $bestOnlyIndicator = null;

    /**
     * If true, then all rates with a total amount that does not include taxes should be excluded from the response results set.
     *
     * @var bool $totalAfterTaxOnlyInd
     */
    private $totalAfterTaxOnlyInd = null;

    /**
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriteriaType\CriterionAType[] $criterion
     */
    private $criterion = [
        
    ];

    /**
     * Gets as availableOnlyIndicator
     *
     * When true, return only hotels that are available.
     *
     * @return bool
     */
    public function getAvailableOnlyIndicator()
    {
        return $this->availableOnlyIndicator;
    }

    /**
     * Sets a new availableOnlyIndicator
     *
     * When true, return only hotels that are available.
     *
     * @param bool $availableOnlyIndicator
     * @return self
     */
    public function setAvailableOnlyIndicator($availableOnlyIndicator)
    {
        $this->availableOnlyIndicator = $availableOnlyIndicator;
        return $this;
    }

    /**
     * Gets as bestOnlyIndicator
     *
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @return bool
     */
    public function getBestOnlyIndicator()
    {
        return $this->bestOnlyIndicator;
    }

    /**
     * Sets a new bestOnlyIndicator
     *
     * When true, return only the lowest room rate for hotels that are available.
     *
     * @param bool $bestOnlyIndicator
     * @return self
     */
    public function setBestOnlyIndicator($bestOnlyIndicator)
    {
        $this->bestOnlyIndicator = $bestOnlyIndicator;
        return $this;
    }

    /**
     * Gets as totalAfterTaxOnlyInd
     *
     * If true, then all rates with a total amount that does not include taxes should be excluded from the response results set.
     *
     * @return bool
     */
    public function getTotalAfterTaxOnlyInd()
    {
        return $this->totalAfterTaxOnlyInd;
    }

    /**
     * Sets a new totalAfterTaxOnlyInd
     *
     * If true, then all rates with a total amount that does not include taxes should be excluded from the response results set.
     *
     * @param bool $totalAfterTaxOnlyInd
     * @return self
     */
    public function setTotalAfterTaxOnlyInd($totalAfterTaxOnlyInd)
    {
        $this->totalAfterTaxOnlyInd = $totalAfterTaxOnlyInd;
        return $this;
    }

    /**
     * Adds as criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriteriaType\CriterionAType $criterion
     */
    public function addToCriterion(\Recranet\OTA\Type\HotelSearchCriteriaType\CriterionAType $criterion)
    {
        $this->criterion[] = $criterion;
        return $this;
    }

    /**
     * isset criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
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
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
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
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriteriaType\CriterionAType[]
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriteriaType\CriterionAType[] $criterion
     * @return self
     */
    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;
        return $this;
    }
}

