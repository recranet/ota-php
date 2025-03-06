<?php

namespace Recranet\OTA\Type;

/**
 * Class representing NoShowFeeType
 *
 * Information regarding the no show fee policy for a vehicle type.
 * XSD Type: NoShowFeeType
 */
class NoShowFeeType
{
    /**
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @var \Recranet\OTA\Type\NoShowFeeType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * The period of time between scheduled pickup time and no show fee.
     *
     * @var \Recranet\OTA\Type\NoShowFeeType\GracePeriodAType $gracePeriod
     */
    private $gracePeriod = null;

    /**
     * The amount of the no show fee if a reservation is not cancelled before the specified deadline and the renter does not show up for the reservation.
     *
     * @var \Recranet\OTA\Type\NoShowFeeType\FeeAmountAType $feeAmount
     */
    private $feeAmount = null;

    /**
     * A general text description of the no show fee policy that is suitable for display to the customer during the booking process.
     *
     * @var \Recranet\OTA\Type\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as deadline
     *
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @return \Recranet\OTA\Type\NoShowFeeType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @param \Recranet\OTA\Type\NoShowFeeType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(?\Recranet\OTA\Type\NoShowFeeType\DeadlineAType $deadline = null)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Gets as gracePeriod
     *
     * The period of time between scheduled pickup time and no show fee.
     *
     * @return \Recranet\OTA\Type\NoShowFeeType\GracePeriodAType
     */
    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    /**
     * Sets a new gracePeriod
     *
     * The period of time between scheduled pickup time and no show fee.
     *
     * @param \Recranet\OTA\Type\NoShowFeeType\GracePeriodAType $gracePeriod
     * @return self
     */
    public function setGracePeriod(?\Recranet\OTA\Type\NoShowFeeType\GracePeriodAType $gracePeriod = null)
    {
        $this->gracePeriod = $gracePeriod;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * The amount of the no show fee if a reservation is not cancelled before the specified deadline and the renter does not show up for the reservation.
     *
     * @return \Recranet\OTA\Type\NoShowFeeType\FeeAmountAType
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * The amount of the no show fee if a reservation is not cancelled before the specified deadline and the renter does not show up for the reservation.
     *
     * @param \Recranet\OTA\Type\NoShowFeeType\FeeAmountAType $feeAmount
     * @return self
     */
    public function setFeeAmount(?\Recranet\OTA\Type\NoShowFeeType\FeeAmountAType $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Gets as description
     *
     * A general text description of the no show fee policy that is suitable for display to the customer during the booking process.
     *
     * @return \Recranet\OTA\Type\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A general text description of the no show fee policy that is suitable for display to the customer during the booking process.
     *
     * @param \Recranet\OTA\Type\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\FormattedTextTextType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

