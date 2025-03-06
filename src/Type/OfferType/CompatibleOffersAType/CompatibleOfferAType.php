<?php

namespace Recranet\OTA\Type\OfferType\CompatibleOffersAType;

/**
 * Class representing CompatibleOfferAType
 */
class CompatibleOfferAType
{
    /**
     * References the other offer(s) with which this offer may be used.
     *
     * @var string[] $offerRPH
     */
    private $offerRPH = null;

    /**
     * When true this offer is incompatible with the OfferRPH. When false this offer is compatible with the OfferRPH.
     *
     * @var bool $incompatibleOfferIndicator
     */
    private $incompatibleOfferIndicator = null;

    /**
     * Adds as offerRPH
     *
     * References the other offer(s) with which this offer may be used.
     *
     * @return self
     * @param string $offerRPH
     */
    public function addToOfferRPH($offerRPH)
    {
        $this->offerRPH[] = $offerRPH;
        return $this;
    }

    /**
     * isset offerRPH
     *
     * References the other offer(s) with which this offer may be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferRPH($index)
    {
        return isset($this->offerRPH[$index]);
    }

    /**
     * unset offerRPH
     *
     * References the other offer(s) with which this offer may be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferRPH($index)
    {
        unset($this->offerRPH[$index]);
    }

    /**
     * Gets as offerRPH
     *
     * References the other offer(s) with which this offer may be used.
     *
     * @return string[]
     */
    public function getOfferRPH()
    {
        return $this->offerRPH;
    }

    /**
     * Sets a new offerRPH
     *
     * References the other offer(s) with which this offer may be used.
     *
     * @param string $offerRPH
     * @return self
     */
    public function setOfferRPH(array $offerRPH)
    {
        $this->offerRPH = $offerRPH;
        return $this;
    }

    /**
     * Gets as incompatibleOfferIndicator
     *
     * When true this offer is incompatible with the OfferRPH. When false this offer is compatible with the OfferRPH.
     *
     * @return bool
     */
    public function getIncompatibleOfferIndicator()
    {
        return $this->incompatibleOfferIndicator;
    }

    /**
     * Sets a new incompatibleOfferIndicator
     *
     * When true this offer is incompatible with the OfferRPH. When false this offer is compatible with the OfferRPH.
     *
     * @param bool $incompatibleOfferIndicator
     * @return self
     */
    public function setIncompatibleOfferIndicator($incompatibleOfferIndicator)
    {
        $this->incompatibleOfferIndicator = $incompatibleOfferIndicator;
        return $this;
    }
}

