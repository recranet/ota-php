<?php

namespace Recranet\OTA\IndCoverageReqsType;

/**
 * Class representing CoveredLuggageAType
 */
class CoveredLuggageAType
{
    /**
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @var \Recranet\OTA\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[] $luggageItem
     */
    private $luggageItem = [
        
    ];

    /**
     * Adds as luggageItem
     *
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @return self
     * @param \Recranet\OTA\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType $luggageItem
     */
    public function addToLuggageItem(\Recranet\OTA\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType $luggageItem)
    {
        $this->luggageItem[] = $luggageItem;
        return $this;
    }

    /**
     * isset luggageItem
     *
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLuggageItem($index)
    {
        return isset($this->luggageItem[$index]);
    }

    /**
     * unset luggageItem
     *
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLuggageItem($index)
    {
        unset($this->luggageItem[$index]);
    }

    /**
     * Gets as luggageItem
     *
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @return \Recranet\OTA\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     */
    public function getLuggageItem()
    {
        return $this->luggageItem;
    }

    /**
     * Sets a new luggageItem
     *
     * Contains a description and estimated value for a specific piece of luggage/equipment for which the traveler would like additional insurance.
     *
     * @param \Recranet\OTA\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[] $luggageItem
     * @return self
     */
    public function setLuggageItem(array $luggageItem)
    {
        $this->luggageItem = $luggageItem;
        return $this;
    }
}

