<?php

namespace Recranet\OTA\Type\RateUploadType;

/**
 * Class representing GuaranteePoliciesAType
 */
class GuaranteePoliciesAType
{
    /**
     * GuaranteePolicy.
     *
     * @var \Recranet\OTA\Type\GuaranteeType[] $guaranteePolicy
     */
    private $guaranteePolicy = [
        
    ];

    /**
     * Adds as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuaranteeType $guaranteePolicy
     */
    public function addToGuaranteePolicy(\Recranet\OTA\Type\GuaranteeType $guaranteePolicy)
    {
        $this->guaranteePolicy[] = $guaranteePolicy;
        return $this;
    }

    /**
     * isset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePolicy($index)
    {
        return isset($this->guaranteePolicy[$index]);
    }

    /**
     * unset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePolicy($index)
    {
        unset($this->guaranteePolicy[$index]);
    }

    /**
     * Gets as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return \Recranet\OTA\Type\GuaranteeType[]
     */
    public function getGuaranteePolicy()
    {
        return $this->guaranteePolicy;
    }

    /**
     * Sets a new guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param \Recranet\OTA\Type\GuaranteeType[] $guaranteePolicy
     * @return self
     */
    public function setGuaranteePolicy(array $guaranteePolicy)
    {
        $this->guaranteePolicy = $guaranteePolicy;
        return $this;
    }
}

