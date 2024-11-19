<?php

namespace Recranet\OTA;

/**
 * Class representing HotelPaymentFormType
 *
 * Defines how an account will be settled at checkout.
 * XSD Type: HotelPaymentFormType
 */
class HotelPaymentFormType extends PaymentFormType
{
    /**
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @var \Recranet\OTA\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage
     */
    private $masterAccountUsage = null;

    /**
     * Gets as masterAccountUsage
     *
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @return \Recranet\OTA\HotelPaymentFormType\MasterAccountUsageAType
     */
    public function getMasterAccountUsage()
    {
        return $this->masterAccountUsage;
    }

    /**
     * Sets a new masterAccountUsage
     *
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @param \Recranet\OTA\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage
     * @return self
     */
    public function setMasterAccountUsage(?\Recranet\OTA\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage = null)
    {
        $this->masterAccountUsage = $masterAccountUsage;
        return $this;
    }
}

