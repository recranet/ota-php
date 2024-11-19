<?php

namespace Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType;

/**
 * Class representing RoomRateInfoAType
 */
class RoomRateInfoAType
{
    /**
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @var \Recranet\OTA\RateType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * Provides textual description of the room rate.
     *
     * @var \Recranet\OTA\FormattedTextTextType $roomRateDescription
     */
    private $roomRateDescription = null;

    /**
     * Commission associated with the RatePlan.
     *
     * @var \Recranet\OTA\CommissionType[] $commission
     */
    private $commission = [
        
    ];

    /**
     * Adds as rate
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @return self
     * @param \Recranet\OTA\RateType\RateAType $rate
     */
    public function addToRates(\Recranet\OTA\RateType\RateAType $rate)
    {
        $this->rates[] = $rate;
        return $this;
    }

    /**
     * isset rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @return \Recranet\OTA\RateType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     *
     * @param \Recranet\OTA\RateType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates)
    {
        $this->rates = $rates;
        return $this;
    }

    /**
     * Gets as roomRateDescription
     *
     * Provides textual description of the room rate.
     *
     * @return \Recranet\OTA\FormattedTextTextType
     */
    public function getRoomRateDescription()
    {
        return $this->roomRateDescription;
    }

    /**
     * Sets a new roomRateDescription
     *
     * Provides textual description of the room rate.
     *
     * @param \Recranet\OTA\FormattedTextTextType $roomRateDescription
     * @return self
     */
    public function setRoomRateDescription(?\Recranet\OTA\FormattedTextTextType $roomRateDescription = null)
    {
        $this->roomRateDescription = $roomRateDescription;
        return $this;
    }

    /**
     * Adds as commission
     *
     * Commission associated with the RatePlan.
     *
     * @return self
     * @param \Recranet\OTA\CommissionType $commission
     */
    public function addToCommission(\Recranet\OTA\CommissionType $commission)
    {
        $this->commission[] = $commission;
        return $this;
    }

    /**
     * isset commission
     *
     * Commission associated with the RatePlan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Commission associated with the RatePlan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Commission associated with the RatePlan.
     *
     * @return \Recranet\OTA\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission associated with the RatePlan.
     *
     * @param \Recranet\OTA\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission = null)
    {
        $this->commission = $commission;
        return $this;
    }
}

