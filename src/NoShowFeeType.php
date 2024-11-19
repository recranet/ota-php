<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\NoShowFeeType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * The period of time between scheduled pickup time and no show fee.
     *
     * @var \Recranet\OTA\NoShowFeeType\GracePeriodAType $gracePeriod
     */
    private $gracePeriod = null;

    /**
     * The amount of the no show fee if a reservation is not cancelled before the specified deadline and the renter does not show up for the reservation.
     *
     * @var \Recranet\OTA\NoShowFeeType\FeeAmountAType $feeAmount
     */
    private $feeAmount = null;

    /**
     * A general text description of the no show fee policy that is suitable for display to the customer during the booking process.
     *
     * @var \Recranet\OTA\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as deadline
     *
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @return \Recranet\OTA\NoShowFeeType\DeadlineAType
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
     * @param \Recranet\OTA\NoShowFeeType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(?\Recranet\OTA\NoShowFeeType\DeadlineAType $deadline = null)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Gets as gracePeriod
     *
     * The period of time between scheduled pickup time and no show fee.
     *
     * @return \Recranet\OTA\NoShowFeeType\GracePeriodAType
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
     * @param \Recranet\OTA\NoShowFeeType\GracePeriodAType $gracePeriod
     * @return self
     */
    public function setGracePeriod(?\Recranet\OTA\NoShowFeeType\GracePeriodAType $gracePeriod = null)
    {
        $this->gracePeriod = $gracePeriod;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * The amount of the no show fee if a reservation is not cancelled before the specified deadline and the renter does not show up for the reservation.
     *
     * @return \Recranet\OTA\NoShowFeeType\FeeAmountAType
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
     * @param \Recranet\OTA\NoShowFeeType\FeeAmountAType $feeAmount
     * @return self
     */
    public function setFeeAmount(?\Recranet\OTA\NoShowFeeType\FeeAmountAType $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Gets as description
     *
     * A general text description of the no show fee policy that is suitable for display to the customer during the booking process.
     *
     * @return \Recranet\OTA\FormattedTextTextType
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
     * @param \Recranet\OTA\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\FormattedTextTextType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

