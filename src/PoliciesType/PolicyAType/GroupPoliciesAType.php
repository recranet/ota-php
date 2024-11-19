<?php

namespace Recranet\OTA\PoliciesType\PolicyAType;

/**
 * Class representing GroupPoliciesAType
 */
class GroupPoliciesAType
{
    /**
     * Group policy information.
     *
     * @var \Recranet\OTA\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[] $groupPolicy
     */
    private $groupPolicy = [
        
    ];

    /**
     * Adds as groupPolicy
     *
     * Group policy information.
     *
     * @return self
     * @param \Recranet\OTA\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType $groupPolicy
     */
    public function addToGroupPolicy(\Recranet\OTA\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType $groupPolicy)
    {
        $this->groupPolicy[] = $groupPolicy;
        return $this;
    }

    /**
     * isset groupPolicy
     *
     * Group policy information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupPolicy($index)
    {
        return isset($this->groupPolicy[$index]);
    }

    /**
     * unset groupPolicy
     *
     * Group policy information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupPolicy($index)
    {
        unset($this->groupPolicy[$index]);
    }

    /**
     * Gets as groupPolicy
     *
     * Group policy information.
     *
     * @return \Recranet\OTA\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     */
    public function getGroupPolicy()
    {
        return $this->groupPolicy;
    }

    /**
     * Sets a new groupPolicy
     *
     * Group policy information.
     *
     * @param \Recranet\OTA\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[] $groupPolicy
     * @return self
     */
    public function setGroupPolicy(array $groupPolicy)
    {
        $this->groupPolicy = $groupPolicy;
        return $this;
    }
}

