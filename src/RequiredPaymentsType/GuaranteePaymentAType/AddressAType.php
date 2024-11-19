<?php

namespace Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType;

use Recranet\OTA\AddressInfoType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressInfoType
{
    /**
     * The name of the reciever of the payment.
     *
     * @var string $addresseeName
     */
    private $addresseeName = null;

    /**
     * Gets as addresseeName
     *
     * The name of the reciever of the payment.
     *
     * @return string
     */
    public function getAddresseeName()
    {
        return $this->addresseeName;
    }

    /**
     * Sets a new addresseeName
     *
     * The name of the reciever of the payment.
     *
     * @param string $addresseeName
     * @return self
     */
    public function setAddresseeName($addresseeName)
    {
        $this->addresseeName = $addresseeName;
        return $this;
    }
}

