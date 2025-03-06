<?php

namespace Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType;

use Recranet\OTA\Type\AmountPercentType;

/**
 * Class representing AmountPercentAType
 */
class AmountPercentAType extends AmountPercentType
{
    /**
     * When true, indicates that the amount has been overridden.
     *
     * @var bool $overriddenAmountIndicator
     */
    private $overriddenAmountIndicator = null;

    /**
     * Gets as overriddenAmountIndicator
     *
     * When true, indicates that the amount has been overridden.
     *
     * @return bool
     */
    public function getOverriddenAmountIndicator()
    {
        return $this->overriddenAmountIndicator;
    }

    /**
     * Sets a new overriddenAmountIndicator
     *
     * When true, indicates that the amount has been overridden.
     *
     * @param bool $overriddenAmountIndicator
     * @return self
     */
    public function setOverriddenAmountIndicator($overriddenAmountIndicator)
    {
        $this->overriddenAmountIndicator = $overriddenAmountIndicator;
        return $this;
    }
}

