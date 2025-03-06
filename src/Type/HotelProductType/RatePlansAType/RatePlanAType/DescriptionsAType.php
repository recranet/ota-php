<?php

namespace Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Description information related to the rate plan.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as description
     *
     * Description information related to the rate plan.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Description information related to the rate plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Description information related to the rate plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Description information related to the rate plan.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description information related to the rate plan.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}

