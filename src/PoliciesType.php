<?php

namespace Recranet\OTA;

/**
 * Class representing PoliciesType
 *
 * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
 * XSD Type: PoliciesType
 */
class PoliciesType
{
    /**
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @var \Recranet\OTA\PoliciesType\PolicyAType[] $policy
     */
    private $policy = [
        
    ];

    /**
     * Adds as policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @return self
     * @param \Recranet\OTA\PoliciesType\PolicyAType $policy
     */
    public function addToPolicy(\Recranet\OTA\PoliciesType\PolicyAType $policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * isset policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @return \Recranet\OTA\PoliciesType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
     *
     * @param \Recranet\OTA\PoliciesType\PolicyAType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;
        return $this;
    }
}

