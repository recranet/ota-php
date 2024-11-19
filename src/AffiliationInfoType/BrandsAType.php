<?php

namespace Recranet\OTA\AffiliationInfoType;

/**
 * Class representing BrandsAType
 */
class BrandsAType
{
    /**
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @var \Recranet\OTA\AffiliationInfoType\BrandsAType\BrandAType[] $brand
     */
    private $brand = [
        
    ];

    /**
     * Adds as brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @return self
     * @param \Recranet\OTA\AffiliationInfoType\BrandsAType\BrandAType $brand
     */
    public function addToBrand(\Recranet\OTA\AffiliationInfoType\BrandsAType\BrandAType $brand)
    {
        $this->brand[] = $brand;
        return $this;
    }

    /**
     * isset brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrand($index)
    {
        return isset($this->brand[$index]);
    }

    /**
     * unset brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrand($index)
    {
        unset($this->brand[$index]);
    }

    /**
     * Gets as brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @return \Recranet\OTA\AffiliationInfoType\BrandsAType\BrandAType[]
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param \Recranet\OTA\AffiliationInfoType\BrandsAType\BrandAType[] $brand
     * @return self
     */
    public function setBrand(array $brand)
    {
        $this->brand = $brand;
        return $this;
    }
}

