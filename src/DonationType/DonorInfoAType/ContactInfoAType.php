<?php

namespace Recranet\OTA\DonationType\DonorInfoAType;

use Recranet\OTA\AddressType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType extends AddressType
{
    /**
     * The donor email address.
     *
     * @var string $emailAddress
     */
    private $emailAddress = null;

    /**
     * Gets as emailAddress
     *
     * The donor email address.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * The donor email address.
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
}

