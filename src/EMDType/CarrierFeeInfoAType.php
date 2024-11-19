<?php

namespace Recranet\OTA\EMDType;

/**
 * Class representing CarrierFeeInfoAType
 */
class CarrierFeeInfoAType
{
    /**
     * Form of payment information.
     *
     * @var \Recranet\OTA\PaymentDetailType $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @var \Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType[] $carrierFee
     */
    private $carrierFee = [
        
    ];

    /**
     * A collection of taxes applicable to the carrier fee.
     *
     * @var \Recranet\OTA\AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * Gets as paymentDetail
     *
     * Form of payment information.
     *
     * @return \Recranet\OTA\PaymentDetailType
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Form of payment information.
     *
     * @param \Recranet\OTA\PaymentDetailType $paymentDetail
     * @return self
     */
    public function setPaymentDetail(?\Recranet\OTA\PaymentDetailType $paymentDetail = null)
    {
        $this->paymentDetail = $paymentDetail;
        return $this;
    }

    /**
     * Adds as carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType $carrierFee
     */
    public function addToCarrierFee(\Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType $carrierFee)
    {
        $this->carrierFee[] = $carrierFee;
        return $this;
    }

    /**
     * isset carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierFee($index)
    {
        return isset($this->carrierFee[$index]);
    }

    /**
     * unset carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierFee($index)
    {
        unset($this->carrierFee[$index]);
    }

    /**
     * Gets as carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @return \Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType[]
     */
    public function getCarrierFee()
    {
        return $this->carrierFee;
    }

    /**
     * Sets a new carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or service and associated information.
     *
     * @param \Recranet\OTA\EMDType\CarrierFeeInfoAType\CarrierFeeAType[] $carrierFee
     * @return self
     */
    public function setCarrierFee(array $carrierFee = null)
    {
        $this->carrierFee = $carrierFee;
        return $this;
    }

    /**
     * Adds as tax
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @return self
     * @param \Recranet\OTA\AirTaxType $tax
     */
    public function addToTaxes(\Recranet\OTA\AirTaxType $tax)
    {
        $this->taxes[] = $tax;
        return $this;
    }

    /**
     * isset taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @return \Recranet\OTA\AirTaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param \Recranet\OTA\AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }
}

