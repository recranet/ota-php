<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType;

use Recranet\OTA\Type\InvBlockType;

/**
 * Class representing InvBlockAType
 */
class InvBlockAType extends InvBlockType
{
    /**
     * The guarantee information to hold a reservation
     *
     * @var \Recranet\OTA\Type\GuaranteeType $guarantee
     */
    private $guarantee = null;

    /**
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType\MarketCodeAType[] $marketCode
     */
    private $marketCode = [
        
    ];

    /**
     * Gets as guarantee
     *
     * The guarantee information to hold a reservation
     *
     * @return \Recranet\OTA\Type\GuaranteeType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information to hold a reservation
     *
     * @param \Recranet\OTA\Type\GuaranteeType $guarantee
     * @return self
     */
    public function setGuarantee(?\Recranet\OTA\Type\GuaranteeType $guarantee = null)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Adds as marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType\MarketCodeAType $marketCode
     */
    public function addToMarketCode(\Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType\MarketCodeAType $marketCode)
    {
        $this->marketCode[] = $marketCode;
        return $this;
    }

    /**
     * isset marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketCode($index)
    {
        return isset($this->marketCode[$index]);
    }

    /**
     * unset marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketCode($index)
    {
        unset($this->marketCode[$index]);
    }

    /**
     * Gets as marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType\MarketCodeAType[]
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * This is user specific information used for tracking and market segmentation reporting.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType\MarketCodeAType[] $marketCode
     * @return self
     */
    public function setMarketCode(array $marketCode = null)
    {
        $this->marketCode = $marketCode;
        return $this;
    }
}

