<?php

namespace Recranet\OTA\Type\RateUploadType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{
    /**
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
     *
     * @var \Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmount
     */
    private $additionalGuestAmount = [
        
    ];

    /**
     * Adds as additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(\Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount)
    {
        $this->additionalGuestAmount[] = $additionalGuestAmount;
        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
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
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
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
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
     *
     * @return \Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
     *
     * @param \Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
}

