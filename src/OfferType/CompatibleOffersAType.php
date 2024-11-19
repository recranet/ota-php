<?php

namespace Recranet\OTA\OfferType;

/**
 * Class representing CompatibleOffersAType
 */
class CompatibleOffersAType
{
    /**
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @var \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[] $compatibleOffer
     */
    private $compatibleOffer = [
        
    ];

    /**
     * Adds as compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer
     */
    public function addToCompatibleOffer(\Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer)
    {
        $this->compatibleOffer[] = $compatibleOffer;
        return $this;
    }

    /**
     * isset compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompatibleOffer($index)
    {
        return isset($this->compatibleOffer[$index]);
    }

    /**
     * unset compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompatibleOffer($index)
    {
        unset($this->compatibleOffer[$index]);
    }

    /**
     * Gets as compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @return \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     */
    public function getCompatibleOffer()
    {
        return $this->compatibleOffer;
    }

    /**
     * Sets a new compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[] $compatibleOffer
     * @return self
     */
    public function setCompatibleOffer(array $compatibleOffer)
    {
        $this->compatibleOffer = $compatibleOffer;
        return $this;
    }
}

