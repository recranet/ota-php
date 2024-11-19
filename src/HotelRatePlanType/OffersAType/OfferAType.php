<?php

namespace Recranet\OTA\HotelRatePlanType\OffersAType;

use Recranet\OTA\OfferType;

/**
 * Class representing OfferAType
 */
class OfferAType extends OfferType
{
    /**
     * Identifies one or more supplements applicable to this offer.
     *
     * @var string[] $supplementRPH
     */
    private $supplementRPH = null;

    /**
     * Adds as supplementRPH
     *
     * Identifies one or more supplements applicable to this offer.
     *
     * @return self
     * @param string $supplementRPH
     */
    public function addToSupplementRPH($supplementRPH)
    {
        $this->supplementRPH[] = $supplementRPH;
        return $this;
    }

    /**
     * isset supplementRPH
     *
     * Identifies one or more supplements applicable to this offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementRPH($index)
    {
        return isset($this->supplementRPH[$index]);
    }

    /**
     * unset supplementRPH
     *
     * Identifies one or more supplements applicable to this offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementRPH($index)
    {
        unset($this->supplementRPH[$index]);
    }

    /**
     * Gets as supplementRPH
     *
     * Identifies one or more supplements applicable to this offer.
     *
     * @return string[]
     */
    public function getSupplementRPH()
    {
        return $this->supplementRPH;
    }

    /**
     * Sets a new supplementRPH
     *
     * Identifies one or more supplements applicable to this offer.
     *
     * @param string $supplementRPH
     * @return self
     */
    public function setSupplementRPH(array $supplementRPH)
    {
        $this->supplementRPH = $supplementRPH;
        return $this;
    }
}

