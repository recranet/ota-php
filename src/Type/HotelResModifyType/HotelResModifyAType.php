<?php

namespace Recranet\OTA\Type\HotelResModifyType;

use Recranet\OTA\Type\HotelReservationType;

/**
 * Class representing HotelResModifyAType
 */
class HotelResModifyAType extends HotelReservationType
{
    /**
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @var \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType\VerificationAType[] $verification
     */
    private $verification = [
        
    ];

    /**
     * Adds as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType\VerificationAType $verification
     */
    public function addToVerification(\Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType\VerificationAType $verification)
    {
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * isset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerification($index)
    {
        return isset($this->verification[$index]);
    }

    /**
     * unset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerification($index)
    {
        unset($this->verification[$index]);
    }

    /**
     * Gets as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @return \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType\VerificationAType[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType\VerificationAType[] $verification
     * @return self
     */
    public function setVerification(array $verification = null)
    {
        $this->verification = $verification;
        return $this;
    }
}

