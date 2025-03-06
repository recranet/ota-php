<?php

namespace Recranet\OTA\Type\AirPurchasedOfferType;

use Recranet\OTA\Type\AncillaryServiceDetailType;

/**
 * Class representing PurchasedItemAType
 */
class PurchasedItemAType extends AncillaryServiceDetailType
{
    /**
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate the applied pricing method.
     *
     * @var \Recranet\OTA\Type\ApplyPriceToType $appliesTo
     */
    private $appliesTo = null;

    /**
     * Information about purchased land product(s), such as lounge passes.
     *
     * @var \Recranet\OTA\Type\AirLandProductType $landProductInfo
     */
    private $landProductInfo = null;

    /**
     * Third-party trip insurance information.
     *
     * @var \Recranet\OTA\Type\AirInsuranceOfferType $insuranceProduct
     */
    private $insuranceProduct = null;

    /**
     * Gets as appliesTo
     *
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate the applied pricing method.
     *
     * @return \Recranet\OTA\Type\ApplyPriceToType
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate the applied pricing method.
     *
     * @param \Recranet\OTA\Type\ApplyPriceToType $appliesTo
     * @return self
     */
    public function setAppliesTo(?\Recranet\OTA\Type\ApplyPriceToType $appliesTo = null)
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * Gets as landProductInfo
     *
     * Information about purchased land product(s), such as lounge passes.
     *
     * @return \Recranet\OTA\Type\AirLandProductType
     */
    public function getLandProductInfo()
    {
        return $this->landProductInfo;
    }

    /**
     * Sets a new landProductInfo
     *
     * Information about purchased land product(s), such as lounge passes.
     *
     * @param \Recranet\OTA\Type\AirLandProductType $landProductInfo
     * @return self
     */
    public function setLandProductInfo(?\Recranet\OTA\Type\AirLandProductType $landProductInfo = null)
    {
        $this->landProductInfo = $landProductInfo;
        return $this;
    }

    /**
     * Gets as insuranceProduct
     *
     * Third-party trip insurance information.
     *
     * @return \Recranet\OTA\Type\AirInsuranceOfferType
     */
    public function getInsuranceProduct()
    {
        return $this->insuranceProduct;
    }

    /**
     * Sets a new insuranceProduct
     *
     * Third-party trip insurance information.
     *
     * @param \Recranet\OTA\Type\AirInsuranceOfferType $insuranceProduct
     * @return self
     */
    public function setInsuranceProduct(?\Recranet\OTA\Type\AirInsuranceOfferType $insuranceProduct = null)
    {
        $this->insuranceProduct = $insuranceProduct;
        return $this;
    }
}

