<?php

namespace Recranet\OTA\OTAHotelResRQ;

use Recranet\OTA\HotelResRequestType;

/**
 * Class representing OTAHotelResRQAType
 */
class OTAHotelResRQAType extends HotelResRequestType
{
    /**
     * Information about an independent charitable donation made with the hotel booking.
     *
     * @var \Recranet\OTA\DonationType $donationInformation
     */
    private $donationInformation = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Gets as donationInformation
     *
     * Information about an independent charitable donation made with the hotel booking.
     *
     * @return \Recranet\OTA\DonationType
     */
    public function getDonationInformation()
    {
        return $this->donationInformation;
    }

    /**
     * Sets a new donationInformation
     *
     * Information about an independent charitable donation made with the hotel booking.
     *
     * @param \Recranet\OTA\DonationType $donationInformation
     * @return self
     */
    public function setDonationInformation(?\Recranet\OTA\DonationType $donationInformation = null)
    {
        $this->donationInformation = $donationInformation;
        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Recranet\OTA\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Recranet\OTA\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;
        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Recranet\OTA\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Recranet\OTA\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms = null)
    {
        $this->rebatePrograms = $rebatePrograms;
        return $this;
    }
}

