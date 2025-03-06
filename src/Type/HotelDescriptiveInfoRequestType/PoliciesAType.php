<?php

namespace Recranet\OTA\Type\HotelDescriptiveInfoRequestType;

/**
 * Class representing PoliciesAType
 */
class PoliciesAType
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendPolicies
     */
    private $sendPolicies = null;

    /**
     * Gets as sendPolicies
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendPolicies()
    {
        return $this->sendPolicies;
    }

    /**
     * Sets a new sendPolicies
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendPolicies
     * @return self
     */
    public function setSendPolicies($sendPolicies)
    {
        $this->sendPolicies = $sendPolicies;
        return $this;
    }
}

