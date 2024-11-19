<?php

namespace Recranet\OTA\EMDType\TaxCouponInformationAType;

/**
 * Class representing TicketDocumentAType
 */
class TicketDocumentAType
{
    /**
     * The ticket/document number for this transaction.
     *
     * @var string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * The applicable coupon number.
     *
     * @var \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType[] $couponNumber
     */
    private $couponNumber = [
        
    ];

    /**
     * Gets as ticketDocumentNbr
     *
     * The ticket/document number for this transaction.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * The ticket/document number for this transaction.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }

    /**
     * Adds as couponNumber
     *
     * The applicable coupon number.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType $couponNumber
     */
    public function addToCouponNumber(\Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType $couponNumber)
    {
        $this->couponNumber[] = $couponNumber;
        return $this;
    }

    /**
     * isset couponNumber
     *
     * The applicable coupon number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCouponNumber($index)
    {
        return isset($this->couponNumber[$index]);
    }

    /**
     * unset couponNumber
     *
     * The applicable coupon number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCouponNumber($index)
    {
        unset($this->couponNumber[$index]);
    }

    /**
     * Gets as couponNumber
     *
     * The applicable coupon number.
     *
     * @return \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType[]
     */
    public function getCouponNumber()
    {
        return $this->couponNumber;
    }

    /**
     * Sets a new couponNumber
     *
     * The applicable coupon number.
     *
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType[] $couponNumber
     * @return self
     */
    public function setCouponNumber(array $couponNumber)
    {
        $this->couponNumber = $couponNumber;
        return $this;
    }
}

