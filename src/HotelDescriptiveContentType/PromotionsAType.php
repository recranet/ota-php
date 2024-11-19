<?php

namespace Recranet\OTA\HotelDescriptiveContentType;

/**
 * Class representing PromotionsAType
 */
class PromotionsAType
{
    /**
     * A hotel package or promotion.
     *
     * @var \Recranet\OTA\HotelDescriptiveContentType\PromotionsAType\PromotionAType[] $promotion
     */
    private $promotion = [
        
    ];

    /**
     * Adds as promotion
     *
     * A hotel package or promotion.
     *
     * @return self
     * @param \Recranet\OTA\HotelDescriptiveContentType\PromotionsAType\PromotionAType $promotion
     */
    public function addToPromotion(\Recranet\OTA\HotelDescriptiveContentType\PromotionsAType\PromotionAType $promotion)
    {
        $this->promotion[] = $promotion;
        return $this;
    }

    /**
     * isset promotion
     *
     * A hotel package or promotion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotion($index)
    {
        return isset($this->promotion[$index]);
    }

    /**
     * unset promotion
     *
     * A hotel package or promotion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotion($index)
    {
        unset($this->promotion[$index]);
    }

    /**
     * Gets as promotion
     *
     * A hotel package or promotion.
     *
     * @return \Recranet\OTA\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * A hotel package or promotion.
     *
     * @param \Recranet\OTA\HotelDescriptiveContentType\PromotionsAType\PromotionAType[] $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;
        return $this;
    }
}

