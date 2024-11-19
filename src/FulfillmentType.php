<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Ticket delivery information for the booking request.
     *
     * @var \Recranet\OTA\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * Purchaser name details.
     *
     * @var \Recranet\OTA\PersonNameType $name
     */
    private $name = null;

    /**
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @var \Recranet\OTA\FulfillmentType\ReceiptAType $receipt
     */
    private $receipt = null;

    /**
     * Used to provide textual information concerning fulfillment.
     *
     * @var \Recranet\OTA\FulfillmentType\PaymentTextAType[] $paymentText
     */
    private $paymentText = [
        
    ];

    /**
     * Adds as paymentDetail
     *
     * Container for Payment Detail.
     *
     * @return self
     * @param \Recranet\OTA\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail
     */
    public function addToPaymentDetails(\Recranet\OTA\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail)
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
     * @return \Recranet\OTA\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
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
     * @param \Recranet\OTA\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
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
     * @return \Recranet\OTA\AddressType
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
     * @param \Recranet\OTA\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(?\Recranet\OTA\AddressType $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as name
     *
     * Purchaser name details.
     *
     * @return \Recranet\OTA\PersonNameType
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
     * @param \Recranet\OTA\PersonNameType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\PersonNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @return \Recranet\OTA\FulfillmentType\ReceiptAType
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
     * @param \Recranet\OTA\FulfillmentType\ReceiptAType $receipt
     * @return self
     */
    public function setReceipt(?\Recranet\OTA\FulfillmentType\ReceiptAType $receipt = null)
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
     * @param \Recranet\OTA\FulfillmentType\PaymentTextAType $paymentText
     */
    public function addToPaymentText(\Recranet\OTA\FulfillmentType\PaymentTextAType $paymentText)
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
     * @return \Recranet\OTA\FulfillmentType\PaymentTextAType[]
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
     * @param \Recranet\OTA\FulfillmentType\PaymentTextAType[] $paymentText
     * @return self
     */
    public function setPaymentText(array $paymentText = null)
    {
        $this->paymentText = $paymentText;
        return $this;
    }
}

