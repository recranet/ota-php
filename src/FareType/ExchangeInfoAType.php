<?php

namespace Recranet\OTA\FareType;

/**
 * Class representing ExchangeInfoAType
 */
class ExchangeInfoAType
{
    /**
     * The new ticket/document number.
     *
     * @var string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Optional information on coupon numbers being exchanged.
     *
     * @var \Recranet\OTA\FareType\ExchangeInfoAType\CouponInfoAType[] $couponInfo
     */
    private $couponInfo = [
        
    ];

    /**
     * The original origin and destination for exchanged ticket/documents.
     *
     * @var \Recranet\OTA\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination
     */
    private $originalOriginDestination = null;

    /**
     * Gets as ticketDocumentNbr
     *
     * The new ticket/document number.
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
     * The new ticket/document number.
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
     * Adds as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return self
     * @param \Recranet\OTA\FareType\ExchangeInfoAType\CouponInfoAType $couponInfo
     */
    public function addToCouponInfo(\Recranet\OTA\FareType\ExchangeInfoAType\CouponInfoAType $couponInfo)
    {
        $this->couponInfo[] = $couponInfo;
        return $this;
    }

    /**
     * isset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCouponInfo($index)
    {
        return isset($this->couponInfo[$index]);
    }

    /**
     * unset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCouponInfo($index)
    {
        unset($this->couponInfo[$index]);
    }

    /**
     * Gets as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return \Recranet\OTA\FareType\ExchangeInfoAType\CouponInfoAType[]
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets a new couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param \Recranet\OTA\FareType\ExchangeInfoAType\CouponInfoAType[] $couponInfo
     * @return self
     */
    public function setCouponInfo(array $couponInfo = null)
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }

    /**
     * Gets as originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @return \Recranet\OTA\FareType\ExchangeInfoAType\OriginalOriginDestinationAType
     */
    public function getOriginalOriginDestination()
    {
        return $this->originalOriginDestination;
    }

    /**
     * Sets a new originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @param \Recranet\OTA\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination
     * @return self
     */
    public function setOriginalOriginDestination(?\Recranet\OTA\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination = null)
    {
        $this->originalOriginDestination = $originalOriginDestination;
        return $this;
    }
}

