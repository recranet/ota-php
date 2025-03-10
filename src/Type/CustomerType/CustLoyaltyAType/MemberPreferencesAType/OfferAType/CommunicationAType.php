<?php

namespace Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType;

/**
 * Class representing CommunicationAType
 */
class CommunicationAType
{
    /**
     * An enumerated list of method of communication. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @var string $distribType
     */
    private $distribType = null;

    /**
     * Gets as distribType
     *
     * An enumerated list of method of communication. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getDistribType()
    {
        return $this->distribType;
    }

    /**
     * Sets a new distribType
     *
     * An enumerated list of method of communication. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $distribType
     * @return self
     */
    public function setDistribType($distribType)
    {
        $this->distribType = $distribType;
        return $this;
    }
}

