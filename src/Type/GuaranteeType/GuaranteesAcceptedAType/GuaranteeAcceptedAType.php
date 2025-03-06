<?php

namespace Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType;

use Recranet\OTA\Type\PaymentFormType;

/**
 * Class representing GuaranteeAcceptedAType
 */
class GuaranteeAcceptedAType extends PaymentFormType
{
    /**
     * This is to indicate that the information in the model is the default (e.g. if PaymentCard information is completed then this would be considered the default if the boolean is true).
     *
     * @var bool $default
     */
    private $default = null;

    /**
     * If true, no credit card holder information is required. If false, it is not required.
     *
     * @var bool $noCardHolderInfoReqInd
     */
    private $noCardHolderInfoReqInd = null;

    /**
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @var bool $nameReqInd
     */
    private $nameReqInd = null;

    /**
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @var bool $addressReqInd
     */
    private $addressReqInd = null;

    /**
     * If true, credit card holder phone number is required. If false, it is not required.
     *
     * @var bool $phoneReqInd
     */
    private $phoneReqInd = null;

    /**
     * If true, the credit card interbank number is required. If false, it is not required.
     *
     * @var bool $interbankNbrReqInd
     */
    private $interbankNbrReqInd = null;

    /**
     * When true, the booking source may be used to guarantee the booking.
     *
     * @var bool $bookingSourceAllowedInd
     */
    private $bookingSourceAllowedInd = null;

    /**
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @var bool $corpDiscountNbrAllowedInd
     */
    private $corpDiscountNbrAllowedInd = null;

    /**
     * Gets as default
     *
     * This is to indicate that the information in the model is the default (e.g. if PaymentCard information is completed then this would be considered the default if the boolean is true).
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * This is to indicate that the information in the model is the default (e.g. if PaymentCard information is completed then this would be considered the default if the boolean is true).
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not required.
     *
     * @return bool
     */
    public function getNoCardHolderInfoReqInd()
    {
        return $this->noCardHolderInfoReqInd;
    }

    /**
     * Sets a new noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not required.
     *
     * @param bool $noCardHolderInfoReqInd
     * @return self
     */
    public function setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
    {
        $this->noCardHolderInfoReqInd = $noCardHolderInfoReqInd;
        return $this;
    }

    /**
     * Gets as nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @return bool
     */
    public function getNameReqInd()
    {
        return $this->nameReqInd;
    }

    /**
     * Sets a new nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @param bool $nameReqInd
     * @return self
     */
    public function setNameReqInd($nameReqInd)
    {
        $this->nameReqInd = $nameReqInd;
        return $this;
    }

    /**
     * Gets as addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @return bool
     */
    public function getAddressReqInd()
    {
        return $this->addressReqInd;
    }

    /**
     * Sets a new addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @param bool $addressReqInd
     * @return self
     */
    public function setAddressReqInd($addressReqInd)
    {
        $this->addressReqInd = $addressReqInd;
        return $this;
    }

    /**
     * Gets as phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not required.
     *
     * @return bool
     */
    public function getPhoneReqInd()
    {
        return $this->phoneReqInd;
    }

    /**
     * Sets a new phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not required.
     *
     * @param bool $phoneReqInd
     * @return self
     */
    public function setPhoneReqInd($phoneReqInd)
    {
        $this->phoneReqInd = $phoneReqInd;
        return $this;
    }

    /**
     * Gets as interbankNbrReqInd
     *
     * If true, the credit card interbank number is required. If false, it is not required.
     *
     * @return bool
     */
    public function getInterbankNbrReqInd()
    {
        return $this->interbankNbrReqInd;
    }

    /**
     * Sets a new interbankNbrReqInd
     *
     * If true, the credit card interbank number is required. If false, it is not required.
     *
     * @param bool $interbankNbrReqInd
     * @return self
     */
    public function setInterbankNbrReqInd($interbankNbrReqInd)
    {
        $this->interbankNbrReqInd = $interbankNbrReqInd;
        return $this;
    }

    /**
     * Gets as bookingSourceAllowedInd
     *
     * When true, the booking source may be used to guarantee the booking.
     *
     * @return bool
     */
    public function getBookingSourceAllowedInd()
    {
        return $this->bookingSourceAllowedInd;
    }

    /**
     * Sets a new bookingSourceAllowedInd
     *
     * When true, the booking source may be used to guarantee the booking.
     *
     * @param bool $bookingSourceAllowedInd
     * @return self
     */
    public function setBookingSourceAllowedInd($bookingSourceAllowedInd)
    {
        $this->bookingSourceAllowedInd = $bookingSourceAllowedInd;
        return $this;
    }

    /**
     * Gets as corpDiscountNbrAllowedInd
     *
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @return bool
     */
    public function getCorpDiscountNbrAllowedInd()
    {
        return $this->corpDiscountNbrAllowedInd;
    }

    /**
     * Sets a new corpDiscountNbrAllowedInd
     *
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @param bool $corpDiscountNbrAllowedInd
     * @return self
     */
    public function setCorpDiscountNbrAllowedInd($corpDiscountNbrAllowedInd)
    {
        $this->corpDiscountNbrAllowedInd = $corpDiscountNbrAllowedInd;
        return $this;
    }
}

