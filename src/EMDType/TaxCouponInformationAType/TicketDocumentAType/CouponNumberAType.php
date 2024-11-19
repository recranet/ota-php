<?php

namespace Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType;

/**
 * Class representing CouponNumberAType
 */
class CouponNumberAType
{
    /**
     * The coupon number.
     *
     * @var int $number
     */
    private $number = null;

    /**
     * The tax coupon information for cabin and air equipment.
     *
     * @var \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType $taxCouponInfo
     */
    private $taxCouponInfo = null;

    /**
     * The tax/fee charge for this coupon.
     *
     * @var \Recranet\OTA\AirTaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @var \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[] $unticketedPointInfo
     */
    private $unticketedPointInfo = [
        
    ];

    /**
     * Gets as number
     *
     * The coupon number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The coupon number.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as taxCouponInfo
     *
     * The tax coupon information for cabin and air equipment.
     *
     * @return \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType
     */
    public function getTaxCouponInfo()
    {
        return $this->taxCouponInfo;
    }

    /**
     * Sets a new taxCouponInfo
     *
     * The tax coupon information for cabin and air equipment.
     *
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType $taxCouponInfo
     * @return self
     */
    public function setTaxCouponInfo(?\Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType $taxCouponInfo = null)
    {
        $this->taxCouponInfo = $taxCouponInfo;
        return $this;
    }

    /**
     * Adds as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return self
     * @param \Recranet\OTA\AirTaxType $tax
     */
    public function addToTax(\Recranet\OTA\AirTaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return \Recranet\OTA\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param \Recranet\OTA\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Adds as unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType $unticketedPointInfo
     */
    public function addToUnticketedPointInfo(\Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType $unticketedPointInfo)
    {
        $this->unticketedPointInfo[] = $unticketedPointInfo;
        return $this;
    }

    /**
     * isset unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnticketedPointInfo($index)
    {
        return isset($this->unticketedPointInfo[$index]);
    }

    /**
     * unset unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnticketedPointInfo($index)
    {
        unset($this->unticketedPointInfo[$index]);
    }

    /**
     * Gets as unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @return \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[]
     */
    public function getUnticketedPointInfo()
    {
        return $this->unticketedPointInfo;
    }

    /**
     * Sets a new unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure dates.
     *
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[] $unticketedPointInfo
     * @return self
     */
    public function setUnticketedPointInfo(array $unticketedPointInfo = null)
    {
        $this->unticketedPointInfo = $unticketedPointInfo;
        return $this;
    }
}

