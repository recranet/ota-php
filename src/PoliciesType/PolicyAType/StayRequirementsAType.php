<?php

namespace Recranet\OTA\PoliciesType\PolicyAType;

/**
 * Class representing StayRequirementsAType
 */
class StayRequirementsAType
{
    /**
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @var \Recranet\OTA\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[] $stayRequirement
     */
    private $stayRequirement = [
        
    ];

    /**
     * Adds as stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @return self
     * @param \Recranet\OTA\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType $stayRequirement
     */
    public function addToStayRequirement(\Recranet\OTA\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType $stayRequirement)
    {
        $this->stayRequirement[] = $stayRequirement;
        return $this;
    }

    /**
     * isset stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayRequirement($index)
    {
        return isset($this->stayRequirement[$index]);
    }

    /**
     * unset stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayRequirement($index)
    {
        unset($this->stayRequirement[$index]);
    }

    /**
     * Gets as stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @return \Recranet\OTA\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     */
    public function getStayRequirement()
    {
        return $this->stayRequirement;
    }

    /**
     * Sets a new stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
     *
     * @param \Recranet\OTA\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[] $stayRequirement
     * @return self
     */
    public function setStayRequirement(array $stayRequirement)
    {
        $this->stayRequirement = $stayRequirement;
        return $this;
    }
}

