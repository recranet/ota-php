<?php

namespace Recranet\OTA\MultiModalOfferType\RequestedOfferAType;

/**
 * Class representing GuidelinePricingAType
 */
class GuidelinePricingAType
{
    /**
     * Maximum offer price.
     *
     * @var \Recranet\OTA\OntologyCurrencyType $maximumPrice
     */
    private $maximumPrice = null;

    /**
     * Pricing method.
     *
     * @var \Recranet\OTA\OntologyPricingMethodType $method
     */
    private $method = null;

    /**
     * Gets as maximumPrice
     *
     * Maximum offer price.
     *
     * @return \Recranet\OTA\OntologyCurrencyType
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
     * @param \Recranet\OTA\OntologyCurrencyType $maximumPrice
     * @return self
     */
    public function setMaximumPrice(\Recranet\OTA\OntologyCurrencyType $maximumPrice)
    {
        $this->maximumPrice = $maximumPrice;
        return $this;
    }

    /**
     * Gets as method
     *
     * Pricing method.
     *
     * @return \Recranet\OTA\OntologyPricingMethodType
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
     * @param \Recranet\OTA\OntologyPricingMethodType $method
     * @return self
     */
    public function setMethod(?\Recranet\OTA\OntologyPricingMethodType $method = null)
    {
        $this->method = $method;
        return $this;
    }
}

