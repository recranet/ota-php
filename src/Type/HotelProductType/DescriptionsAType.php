<?php

namespace Recranet\OTA\Type\HotelProductType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Descriptive information for the product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as description
     *
     * Descriptive information for the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType $description
     */
    public function addToDescription(\Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Descriptive information for the product.
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
     * Descriptive information for the product.
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
     * Descriptive information for the product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information for the product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}

