<?php

namespace Recranet\OTA\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType;

/**
 * Class representing MarketCodeAType
 */
class MarketCodeAType
{
    /**
     * The company specific code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @var string $marketCode
     */
    private $marketCode = null;

    /**
     * The descriptive name of the code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @var string $marketCodeName
     */
    private $marketCodeName = null;

    /**
     * If true, indicates that the rate for this market code is commissionable. The Commission element may be used to send details regarding the commission.
     *
     * @var bool $commissionableIndicator
     */
    private $commissionableIndicator = null;

    /**
     * The source of the business.
     * Example: Radio
     *
     * @var string $sourceOfBusiness
     */
    private $sourceOfBusiness = null;

    /**
     * Gets as marketCode
     *
     * The company specific code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * The company specific code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @param string $marketCode
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;
        return $this;
    }

    /**
     * Gets as marketCodeName
     *
     * The descriptive name of the code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @return string
     */
    public function getMarketCodeName()
    {
        return $this->marketCodeName;
    }

    /**
     * Sets a new marketCodeName
     *
     * The descriptive name of the code that relates to the market being sold to (e.g. corporate, government, association, social).
     *
     * @param string $marketCodeName
     * @return self
     */
    public function setMarketCodeName($marketCodeName)
    {
        $this->marketCodeName = $marketCodeName;
        return $this;
    }

    /**
     * Gets as commissionableIndicator
     *
     * If true, indicates that the rate for this market code is commissionable. The Commission element may be used to send details regarding the commission.
     *
     * @return bool
     */
    public function getCommissionableIndicator()
    {
        return $this->commissionableIndicator;
    }

    /**
     * Sets a new commissionableIndicator
     *
     * If true, indicates that the rate for this market code is commissionable. The Commission element may be used to send details regarding the commission.
     *
     * @param bool $commissionableIndicator
     * @return self
     */
    public function setCommissionableIndicator($commissionableIndicator)
    {
        $this->commissionableIndicator = $commissionableIndicator;
        return $this;
    }

    /**
     * Gets as sourceOfBusiness
     *
     * The source of the business.
     * Example: Radio
     *
     * @return string
     */
    public function getSourceOfBusiness()
    {
        return $this->sourceOfBusiness;
    }

    /**
     * Sets a new sourceOfBusiness
     *
     * The source of the business.
     * Example: Radio
     *
     * @param string $sourceOfBusiness
     * @return self
     */
    public function setSourceOfBusiness($sourceOfBusiness)
    {
        $this->sourceOfBusiness = $sourceOfBusiness;
        return $this;
    }
}

