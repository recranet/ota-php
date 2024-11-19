<?php

namespace Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType;

use Recranet\OTA\HotelPaymentFormType;

/**
 * Class representing GuaranteePaymentAType
 */
class GuaranteePaymentAType extends HotelPaymentFormType
{
    /**
     * @var string $detailType
     */
    private $detailType = null;

    /**
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @var string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * Gets as detailType
     *
     * @return string
     */
    public function getDetailType()
    {
        return $this->detailType;
    }

    /**
     * Sets a new detailType
     *
     * @param string $detailType
     * @return self
     */
    public function setDetailType($detailType)
    {
        $this->detailType = $detailType;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }
}

