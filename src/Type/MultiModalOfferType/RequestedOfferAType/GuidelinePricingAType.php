<?php

namespace Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType;

/**
 * Class representing GuidelinePricingAType
 */
class GuidelinePricingAType
{
    /**
     * Maximum offer price.
     *
     * @var \Recranet\OTA\Type\OntologyCurrencyType $maximumPrice
     */
    private $maximumPrice = null;

    /**
     * Pricing method.
     *
     * @var \Recranet\OTA\Type\OntologyPricingMethodType $method
     */
    private $method = null;

    /**
     * Gets as maximumPrice
     *
     * Maximum offer price.
     *
     * @return \Recranet\OTA\Type\OntologyCurrencyType
     */
    public function getMaximumPrice()
    {
        return $this->maximumPrice;
    }

    /**
     * Sets a new maximumPrice
     *
     * Maximum offer price.
     *
     * @param \Recranet\OTA\Type\OntologyCurrencyType $maximumPrice
     * @return self
     */
    public function setMaximumPrice(\Recranet\OTA\Type\OntologyCurrencyType $maximumPrice)
    {
        $this->maximumPrice = $maximumPrice;
        return $this;
    }

    /**
     * Gets as method
     *
     * Pricing method.
     *
     * @return \Recranet\OTA\Type\OntologyPricingMethodType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Pricing method.
     *
     * @param \Recranet\OTA\Type\OntologyPricingMethodType $method
     * @return self
     */
    public function setMethod(?\Recranet\OTA\Type\OntologyPricingMethodType $method = null)
    {
        $this->method = $method;
        return $this;
    }
}

