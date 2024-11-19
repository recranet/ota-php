<?php

namespace Recranet\OTA\AirPurchasedOfferType;

use Recranet\OTA\AncillaryServiceDetailType;

/**
 * Class representing PurchasedItemAType
 */
class PurchasedItemAType extends AncillaryServiceDetailType
{
    /**
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate the applied pricing method.
     *
     * @var \Recranet\OTA\ApplyPriceToType $appliesTo
     */
    private $appliesTo = null;

    /**
     * Information about purchased land product(s), such as lounge passes.
     *
     * @var \Recranet\OTA\AirLandProductType $landProductInfo
     */
    private $landProductInfo = null;

    /**
     * Third-party trip insurance information.
     *
     * @var \Recranet\OTA\AirInsuranceOfferType $insuranceProduct
     */
    private $insuranceProduct = null;

    /**
     * Gets as appliesTo
     *
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate the applied pricing method.
     *
     * @return \Recranet\OTA\ApplyPriceToType
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
     * @param \Recranet\OTA\ApplyPriceToType $appliesTo
     * @return self
     */
    public function setAppliesTo(?\Recranet\OTA\ApplyPriceToType $appliesTo = null)
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * Gets as landProductInfo
     *
     * Information about purchased land product(s), such as lounge passes.
     *
     * @return \Recranet\OTA\AirLandProductType
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
     * @param \Recranet\OTA\AirLandProductType $landProductInfo
     * @return self
     */
    public function setLandProductInfo(?\Recranet\OTA\AirLandProductType $landProductInfo = null)
    {
        $this->landProductInfo = $landProductInfo;
        return $this;
    }

    /**
     * Gets as insuranceProduct
     *
     * Third-party trip insurance information.
     *
     * @return \Recranet\OTA\AirInsuranceOfferType
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
     * @param \Recranet\OTA\AirInsuranceOfferType $insuranceProduct
     * @return self
     */
    public function setInsuranceProduct(?\Recranet\OTA\AirInsuranceOfferType $insuranceProduct = null)
    {
        $this->insuranceProduct = $insuranceProduct;
        return $this;
    }
}

