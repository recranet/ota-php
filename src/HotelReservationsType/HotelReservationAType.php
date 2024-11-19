<?php

namespace Recranet\OTA\HotelReservationsType;

use Recranet\OTA\HotelReservationType;

/**
 * Class representing HotelReservationAType
 */
class HotelReservationAType extends HotelReservationType
{
    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

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

