<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FulfillmentType
 *
 * Payment information relevant to a booking.
 * XSD Type: FulfillmentType
 */
class FulfillmentType
{
    /**
     * Container for Payment Detail.
     *
     * @var \Recranet\OTA\Type\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Ticket delivery information for the booking request.
     *
     * @var \Recranet\OTA\Type\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * Purchaser name details.
     *
     * @var \Recranet\OTA\Type\PersonNameType $name
     */
    private $name = null;

    /**
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @var \Recranet\OTA\Type\FulfillmentType\ReceiptAType $receipt
     */
    private $receipt = null;

    /**
     * Used to provide textual information concerning fulfillment.
     *
     * @var \Recranet\OTA\Type\FulfillmentType\PaymentTextAType[] $paymentText
     */
    private $paymentText = [
        
    ];

    /**
     * Adds as paymentDetail
     *
     * Container for Payment Detail.
     *
     * @return self
     * @param \Recranet\OTA\Type\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail
     */
    public function addToPaymentDetails(\Recranet\OTA\Type\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail)
    {
        $this->paymentDetails[] = $paymentDetail;
        return $this;
    }

    /**
     * isset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDetails($index)
    {
        return isset($this->paymentDetails[$index]);
    }

    /**
     * unset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDetails($index)
    {
        unset($this->paymentDetails[$index]);
    }

    /**
     * Gets as paymentDetails
     *
     * Container for Payment Detail.
     *
     * @return \Recranet\OTA\Type\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param \Recranet\OTA\Type\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
     * @return self
     */
    public function setPaymentDetails(array $paymentDetails = null)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @return \Recranet\OTA\Type\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @param \Recranet\OTA\Type\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(?\Recranet\OTA\Type\AddressType $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as name
     *
     * Purchaser name details.
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Purchaser name details.
     *
     * @param \Recranet\OTA\Type\PersonNameType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\Type\PersonNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @return \Recranet\OTA\Type\FulfillmentType\ReceiptAType
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Sets a new receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @param \Recranet\OTA\Type\FulfillmentType\ReceiptAType $receipt
     * @return self
     */
    public function setReceipt(?\Recranet\OTA\Type\FulfillmentType\ReceiptAType $receipt = null)
    {
        $this->receipt = $receipt;
        return $this;
    }

    /**
     * Adds as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return self
     * @param \Recranet\OTA\Type\FulfillmentType\PaymentTextAType $paymentText
     */
    public function addToPaymentText(\Recranet\OTA\Type\FulfillmentType\PaymentTextAType $paymentText)
    {
        $this->paymentText[] = $paymentText;
        return $this;
    }

    /**
     * isset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentText($index)
    {
        return isset($this->paymentText[$index]);
    }

    /**
     * unset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentText($index)
    {
        unset($this->paymentText[$index]);
    }

    /**
     * Gets as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return \Recranet\OTA\Type\FulfillmentType\PaymentTextAType[]
     */
    public function getPaymentText()
    {
        return $this->paymentText;
    }

    /**
     * Sets a new paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param \Recranet\OTA\Type\FulfillmentType\PaymentTextAType[] $paymentText
     * @return self
     */
    public function setPaymentText(array $paymentText = null)
    {
        $this->paymentText = $paymentText;
        return $this;
    }
}

