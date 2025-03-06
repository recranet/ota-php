<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing PolicyInfoAType
 */
class PolicyInfoAType
{
    /**
     * Specifies the cancel policy information to be returned.
     *
     * @var string $sendCancelPolicy
     */
    private $sendCancelPolicy = null;

    /**
     * When true, send guarantee payment information. When false, do not send policy information.
     *
     * @var string $sendGuaranteePayment
     */
    private $sendGuaranteePayment = null;

    /**
     * When true, send booking rules information. When false, do not send policy information.
     *
     * @var bool $sendBookingRulesInd
     */
    private $sendBookingRulesInd = null;

    /**
     * Gets as sendCancelPolicy
     *
     * Specifies the cancel policy information to be returned.
     *
     * @return string
     */
    public function getSendCancelPolicy()
    {
        return $this->sendCancelPolicy;
    }

    /**
     * Sets a new sendCancelPolicy
     *
     * Specifies the cancel policy information to be returned.
     *
     * @param string $sendCancelPolicy
     * @return self
     */
    public function setSendCancelPolicy($sendCancelPolicy)
    {
        $this->sendCancelPolicy = $sendCancelPolicy;
        return $this;
    }

    /**
     * Gets as sendGuaranteePayment
     *
     * When true, send guarantee payment information. When false, do not send policy information.
     *
     * @return string
     */
    public function getSendGuaranteePayment()
    {
        return $this->sendGuaranteePayment;
    }

    /**
     * Sets a new sendGuaranteePayment
     *
     * When true, send guarantee payment information. When false, do not send policy information.
     *
     * @param string $sendGuaranteePayment
     * @return self
     */
    public function setSendGuaranteePayment($sendGuaranteePayment)
    {
        $this->sendGuaranteePayment = $sendGuaranteePayment;
        return $this;
    }

    /**
     * Gets as sendBookingRulesInd
     *
     * When true, send booking rules information. When false, do not send policy information.
     *
     * @return bool
     */
    public function getSendBookingRulesInd()
    {
        return $this->sendBookingRulesInd;
    }

    /**
     * Sets a new sendBookingRulesInd
     *
     * When true, send booking rules information. When false, do not send policy information.
     *
     * @param bool $sendBookingRulesInd
     * @return self
     */
    public function setSendBookingRulesInd($sendBookingRulesInd)
    {
        $this->sendBookingRulesInd = $sendBookingRulesInd;
        return $this;
    }
}

