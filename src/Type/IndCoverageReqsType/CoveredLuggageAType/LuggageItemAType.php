<?php

namespace Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType;

/**
 * Class representing LuggageItemAType
 */
class LuggageItemAType
{
    /**
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @var string $luggageType
     */
    private $luggageType = null;

    /**
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @var \Recranet\OTA\Type\FreeTextType $luggageDescription
     */
    private $luggageDescription = null;

    /**
     * Estimated value of the piece of luggage/equipment.
     *
     * @var \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType $itemDeclaredValue
     */
    private $itemDeclaredValue = null;

    /**
     * Additional cost to insure luggage/equipment.
     *
     * @var \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType $luggagePremium
     */
    private $luggagePremium = null;

    /**
     * Gets as luggageType
     *
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @return string
     */
    public function getLuggageType()
    {
        return $this->luggageType;
    }

    /**
     * Sets a new luggageType
     *
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @param string $luggageType
     * @return self
     */
    public function setLuggageType($luggageType)
    {
        $this->luggageType = $luggageType;
        return $this;
    }

    /**
     * Gets as luggageDescription
     *
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @return \Recranet\OTA\Type\FreeTextType
     */
    public function getLuggageDescription()
    {
        return $this->luggageDescription;
    }

    /**
     * Sets a new luggageDescription
     *
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @param \Recranet\OTA\Type\FreeTextType $luggageDescription
     * @return self
     */
    public function setLuggageDescription(\Recranet\OTA\Type\FreeTextType $luggageDescription)
    {
        $this->luggageDescription = $luggageDescription;
        return $this;
    }

    /**
     * Gets as itemDeclaredValue
     *
     * Estimated value of the piece of luggage/equipment.
     *
     * @return \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType
     */
    public function getItemDeclaredValue()
    {
        return $this->itemDeclaredValue;
    }

    /**
     * Sets a new itemDeclaredValue
     *
     * Estimated value of the piece of luggage/equipment.
     *
     * @param \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType $itemDeclaredValue
     * @return self
     */
    public function setItemDeclaredValue(\Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType $itemDeclaredValue)
    {
        $this->itemDeclaredValue = $itemDeclaredValue;
        return $this;
    }

    /**
     * Gets as luggagePremium
     *
     * Additional cost to insure luggage/equipment.
     *
     * @return \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType
     */
    public function getLuggagePremium()
    {
        return $this->luggagePremium;
    }

    /**
     * Sets a new luggagePremium
     *
     * Additional cost to insure luggage/equipment.
     *
     * @param \Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType $luggagePremium
     * @return self
     */
    public function setLuggagePremium(?\Recranet\OTA\Type\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType $luggagePremium = null)
    {
        $this->luggagePremium = $luggagePremium;
        return $this;
    }
}

