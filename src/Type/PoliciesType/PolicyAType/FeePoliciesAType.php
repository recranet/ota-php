<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType;

/**
 * Class representing FeePoliciesAType
 */
class FeePoliciesAType
{
    /**
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @var \Recranet\OTA\Type\FeeType[] $feePolicy
     */
    private $feePolicy = [
        
    ];

    /**
     * Adds as feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @return self
     * @param \Recranet\OTA\Type\FeeType $feePolicy
     */
    public function addToFeePolicy(\Recranet\OTA\Type\FeeType $feePolicy)
    {
        $this->feePolicy[] = $feePolicy;
        return $this;
    }

    /**
     * isset feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeePolicy($index)
    {
        return isset($this->feePolicy[$index]);
    }

    /**
     * unset feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeePolicy($index)
    {
        unset($this->feePolicy[$index]);
    }

    /**
     * Gets as feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @return \Recranet\OTA\Type\FeeType[]
     */
    public function getFeePolicy()
    {
        return $this->feePolicy;
    }

    /**
     * Sets a new feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     *
     * @param \Recranet\OTA\Type\FeeType[] $feePolicy
     * @return self
     */
    public function setFeePolicy(array $feePolicy)
    {
        $this->feePolicy = $feePolicy;
        return $this;
    }
}

