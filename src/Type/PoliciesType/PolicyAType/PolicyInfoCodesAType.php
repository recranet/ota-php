<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType;

/**
 * Class representing PolicyInfoCodesAType
 */
class PolicyInfoCodesAType
{
    /**
     * @var \Recranet\OTA\Type\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[] $policyInfoCode
     */
    private $policyInfoCode = [
        
    ];

    /**
     * Adds as policyInfoCode
     *
     * @return self
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType $policyInfoCode
     */
    public function addToPolicyInfoCode(\Recranet\OTA\Type\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType $policyInfoCode)
    {
        $this->policyInfoCode[] = $policyInfoCode;
        return $this;
    }

    /**
     * isset policyInfoCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicyInfoCode($index)
    {
        return isset($this->policyInfoCode[$index]);
    }

    /**
     * unset policyInfoCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicyInfoCode($index)
    {
        unset($this->policyInfoCode[$index]);
    }

    /**
     * Gets as policyInfoCode
     *
     * @return \Recranet\OTA\Type\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     */
    public function getPolicyInfoCode()
    {
        return $this->policyInfoCode;
    }

    /**
     * Sets a new policyInfoCode
     *
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[] $policyInfoCode
     * @return self
     */
    public function setPolicyInfoCode(array $policyInfoCode)
    {
        $this->policyInfoCode = $policyInfoCode;
        return $this;
    }
}

