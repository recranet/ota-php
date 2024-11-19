<?php

namespace Recranet\OTA\HotelProductType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{
    /**
     * Charges related to additional guests.
     *
     * @var \Recranet\OTA\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmount
     */
    private $additionalGuestAmount = [
        
    ];

    /**
     * Adds as additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @return self
     * @param \Recranet\OTA\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(\Recranet\OTA\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount)
    {
        $this->additionalGuestAmount[] = $additionalGuestAmount;
        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalGuestAmount($index)
    {
        return isset($this->additionalGuestAmount[$index]);
    }

    /**
     * unset additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalGuestAmount($index)
    {
        unset($this->additionalGuestAmount[$index]);
    }

    /**
     * Gets as additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @return \Recranet\OTA\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Charges related to additional guests.
     *
     * @param \Recranet\OTA\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
}

