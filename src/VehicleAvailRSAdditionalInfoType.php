<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleAvailRSAdditionalInfoType
 *
 * The VehicleAvailRSAdditionalInfoType complex type identifies the data that descibes the supplemental information assocated with the availability and rates of a rental vehicle.
 * XSD Type: VehicleAvailRSAdditionalInfoType
 */
class VehicleAvailRSAdditionalInfoType
{
    /**
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @var \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     */
    private $customer = null;

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @return \Recranet\OTA\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(?\Recranet\OTA\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}

