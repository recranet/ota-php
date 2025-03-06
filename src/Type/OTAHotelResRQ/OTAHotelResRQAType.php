<?php

namespace Recranet\OTA\Type\OTAHotelResRQ;

use Recranet\OTA\Type\HotelResRequestType;

/**
 * Class representing OTAHotelResRQAType
 */
class OTAHotelResRQAType extends HotelResRequestType
{
    /**
     * Information about an independent charitable donation made with the hotel booking.
     *
     * @var \Recranet\OTA\Type\DonationType $donationInformation
     */
    private $donationInformation = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\Type\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Gets as donationInformation
     *
     * Information about an independent charitable donation made with the hotel booking.
     *
     * @return \Recranet\OTA\Type\DonationType
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
     * @param \Recranet\OTA\Type\DonationType $donationInformation
     * @return self
     */
    public function setDonationInformation(?\Recranet\OTA\Type\DonationType $donationInformation = null)
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
     * @param \Recranet\OTA\Type\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Recranet\OTA\Type\RebateType $rebateProgram)
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
     * @return \Recranet\OTA\Type\RebateType[]
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
     * @param \Recranet\OTA\Type\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms = null)
    {
        $this->rebatePrograms = $rebatePrograms;
        return $this;
    }
}

