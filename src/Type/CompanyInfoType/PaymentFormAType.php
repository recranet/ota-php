<?php

namespace Recranet\OTA\Type\CompanyInfoType;

use Recranet\OTA\Type\PaymentFormType;

/**
 * Class representing PaymentFormAType
 */
class PaymentFormAType extends PaymentFormType
{
    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @var string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;
        return $this;
    }
}

