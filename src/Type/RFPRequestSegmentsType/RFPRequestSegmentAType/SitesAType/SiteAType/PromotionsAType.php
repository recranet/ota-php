<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType;

/**
 * Class representing PromotionsAType
 */
class PromotionsAType
{
    /**
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[] $promotion
     */
    private $promotion = [
        
    ];

    /**
     * Adds as promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType $promotion
     */
    public function addToPromotion(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType $promotion)
    {
        $this->promotion[] = $promotion;
        return $this;
    }

    /**
     * isset promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
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
     * A promotion that has similar date criteria as the meeting dates.
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
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[] $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;
        return $this;
    }
}

