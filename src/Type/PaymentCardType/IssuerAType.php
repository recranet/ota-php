<?php

namespace Recranet\OTA\Type\PaymentCardType;

use Recranet\OTA\Type\ListPaymentCardIssuerType;

/**
 * Class representing IssuerAType
 */
class IssuerAType extends ListPaymentCardIssuerType
{
    /**
     * Issuer bank code.
     * Example: CHASE
     *
     * @var string $bankID
     */
    private $bankID = null;

    /**
     * Gets as bankID
     *
     * Issuer bank code.
     * Example: CHASE
     *
     * @return string
     */
    public function getBankID()
    {
        return $this->bankID;
    }

    /**
     * Sets a new bankID
     *
     * Issuer bank code.
     * Example: CHASE
     *
     * @param string $bankID
     * @return self
     */
    public function setBankID($bankID)
    {
        $this->bankID = $bankID;
        return $this;
    }
}

