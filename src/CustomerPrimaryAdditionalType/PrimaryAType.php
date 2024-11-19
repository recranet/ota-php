<?php

namespace Recranet\OTA\CustomerPrimaryAdditionalType;

use Recranet\OTA\CustomerType;

/**
 * Class representing PrimaryAType
 */
class PrimaryAType extends CustomerType
{
    /**
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @var \Recranet\OTA\UniqueIDType $customerID
     */
    private $customerID = null;

    /**
     * Gets as customerID
     *
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @param \Recranet\OTA\UniqueIDType $customerID
     * @return self
     */
    public function setCustomerID(?\Recranet\OTA\UniqueIDType $customerID = null)
    {
        $this->customerID = $customerID;
        return $this;
    }
}

