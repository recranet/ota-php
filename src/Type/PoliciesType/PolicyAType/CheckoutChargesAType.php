<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType;

/**
 * Class representing CheckoutChargesAType
 */
class CheckoutChargesAType
{
    /**
     * @var \Recranet\OTA\Type\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[] $checkoutCharge
     */
    private $checkoutCharge = [
        
    ];

    /**
     * Adds as checkoutCharge
     *
     * @return self
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType $checkoutCharge
     */
    public function addToCheckoutCharge(\Recranet\OTA\Type\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType $checkoutCharge)
    {
        $this->checkoutCharge[] = $checkoutCharge;
        return $this;
    }

    /**
     * isset checkoutCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCheckoutCharge($index)
    {
        return isset($this->checkoutCharge[$index]);
    }

    /**
     * unset checkoutCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCheckoutCharge($index)
    {
        unset($this->checkoutCharge[$index]);
    }

    /**
     * Gets as checkoutCharge
     *
     * @return \Recranet\OTA\Type\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     */
    public function getCheckoutCharge()
    {
        return $this->checkoutCharge;
    }

    /**
     * Sets a new checkoutCharge
     *
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[] $checkoutCharge
     * @return self
     */
    public function setCheckoutCharge(array $checkoutCharge)
    {
        $this->checkoutCharge = $checkoutCharge;
        return $this;
    }
}

