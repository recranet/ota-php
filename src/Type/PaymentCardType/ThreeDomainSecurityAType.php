<?php

namespace Recranet\OTA\Type\PaymentCardType;

/**
 * Class representing ThreeDomainSecurityAType
 */
class ThreeDomainSecurityAType
{
    /**
     * Merchant gateway information.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\GatewayAType $gateway
     */
    private $gateway = null;

    /**
     * Transaction results.
     *
     * @var \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\ResultsAType $results
     */
    private $results = null;

    /**
     * Gets as gateway
     *
     * Merchant gateway information.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\GatewayAType
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Sets a new gateway
     *
     * Merchant gateway information.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\GatewayAType $gateway
     * @return self
     */
    public function setGateway(?\Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\GatewayAType $gateway = null)
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * Gets as results
     *
     * Transaction results.
     *
     * @return \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\ResultsAType
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sets a new results
     *
     * Transaction results.
     *
     * @param \Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\ResultsAType $results
     * @return self
     */
    public function setResults(?\Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\ResultsAType $results = null)
    {
        $this->results = $results;
        return $this;
    }
}

