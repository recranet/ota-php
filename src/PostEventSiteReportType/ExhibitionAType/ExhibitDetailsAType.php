<?php

namespace Recranet\OTA\PostEventSiteReportType\ExhibitionAType;

/**
 * Class representing ExhibitDetailsAType
 */
class ExhibitDetailsAType
{
    /**
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @var bool $foodAndBeverageIndicator
     */
    private $foodAndBeverageIndicator = null;

    /**
     * Number of booths requiring food and beverage service.
     *
     * @var int $foodAndBeverageBoothQuantity
     */
    private $foodAndBeverageBoothQuantity = null;

    /**
     * Describes a single exhibit within an exhibitiion.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[] $exhibitDetail
     */
    private $exhibitDetail = [
        
    ];

    /**
     * Gets as foodAndBeverageIndicator
     *
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @return bool
     */
    public function getFoodAndBeverageIndicator()
    {
        return $this->foodAndBeverageIndicator;
    }

    /**
     * Sets a new foodAndBeverageIndicator
     *
     * When true, indicates one or more exhibits required food and beverage service.
     *
     * @param bool $foodAndBeverageIndicator
     * @return self
     */
    public function setFoodAndBeverageIndicator($foodAndBeverageIndicator)
    {
        $this->foodAndBeverageIndicator = $foodAndBeverageIndicator;
        return $this;
    }

    /**
     * Gets as foodAndBeverageBoothQuantity
     *
     * Number of booths requiring food and beverage service.
     *
     * @return int
     */
    public function getFoodAndBeverageBoothQuantity()
    {
        return $this->foodAndBeverageBoothQuantity;
    }

    /**
     * Sets a new foodAndBeverageBoothQuantity
     *
     * Number of booths requiring food and beverage service.
     *
     * @param int $foodAndBeverageBoothQuantity
     * @return self
     */
    public function setFoodAndBeverageBoothQuantity($foodAndBeverageBoothQuantity)
    {
        $this->foodAndBeverageBoothQuantity = $foodAndBeverageBoothQuantity;
        return $this;
    }

    /**
     * Adds as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail
     */
    public function addToExhibitDetail(\Recranet\OTA\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail)
    {
        $this->exhibitDetail[] = $exhibitDetail;
        return $this;
    }

    /**
     * isset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExhibitDetail($index)
    {
        return isset($this->exhibitDetail[$index]);
    }

    /**
     * unset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExhibitDetail($index)
    {
        unset($this->exhibitDetail[$index]);
    }

    /**
     * Gets as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     */
    public function getExhibitDetail()
    {
        return $this->exhibitDetail;
    }

    /**
     * Sets a new exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[] $exhibitDetail
     * @return self
     */
    public function setExhibitDetail(array $exhibitDetail)
    {
        $this->exhibitDetail = $exhibitDetail;
        return $this;
    }
}

