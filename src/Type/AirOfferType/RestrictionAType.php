<?php

namespace Recranet\OTA\Type\AirOfferType;

/**
 * Class representing RestrictionAType
 */
class RestrictionAType
{
    /**
     * The minumum quantity of this offer that must be purchased for the trip as a whole.
     *
     * @var int $tripMinOfferQty
     */
    private $tripMinOfferQty = null;

    /**
     * The maximum quantity of this offer that may be purchased for the trip as a whole.
     *
     * @var int $tripMaxOfferQty
     */
    private $tripMaxOfferQty = null;

    /**
     * The minumum quantity of this offer that must be purchased by one traveler.
     *
     * @var int $travelerMinOfferQty
     */
    private $travelerMinOfferQty = null;

    /**
     * The maximum quantity of this offer that may be purchased by one traveler.
     *
     * @var int $travelerMaxOfferQty
     */
    private $travelerMaxOfferQty = null;

    /**
     * The date that an offer is available/ usable.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * The date that an offer is no longer available/ usable.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * Other restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as tripMinOfferQty
     *
     * The minumum quantity of this offer that must be purchased for the trip as a whole.
     *
     * @return int
     */
    public function getTripMinOfferQty()
    {
        return $this->tripMinOfferQty;
    }

    /**
     * Sets a new tripMinOfferQty
     *
     * The minumum quantity of this offer that must be purchased for the trip as a whole.
     *
     * @param int $tripMinOfferQty
     * @return self
     */
    public function setTripMinOfferQty($tripMinOfferQty)
    {
        $this->tripMinOfferQty = $tripMinOfferQty;
        return $this;
    }

    /**
     * Gets as tripMaxOfferQty
     *
     * The maximum quantity of this offer that may be purchased for the trip as a whole.
     *
     * @return int
     */
    public function getTripMaxOfferQty()
    {
        return $this->tripMaxOfferQty;
    }

    /**
     * Sets a new tripMaxOfferQty
     *
     * The maximum quantity of this offer that may be purchased for the trip as a whole.
     *
     * @param int $tripMaxOfferQty
     * @return self
     */
    public function setTripMaxOfferQty($tripMaxOfferQty)
    {
        $this->tripMaxOfferQty = $tripMaxOfferQty;
        return $this;
    }

    /**
     * Gets as travelerMinOfferQty
     *
     * The minumum quantity of this offer that must be purchased by one traveler.
     *
     * @return int
     */
    public function getTravelerMinOfferQty()
    {
        return $this->travelerMinOfferQty;
    }

    /**
     * Sets a new travelerMinOfferQty
     *
     * The minumum quantity of this offer that must be purchased by one traveler.
     *
     * @param int $travelerMinOfferQty
     * @return self
     */
    public function setTravelerMinOfferQty($travelerMinOfferQty)
    {
        $this->travelerMinOfferQty = $travelerMinOfferQty;
        return $this;
    }

    /**
     * Gets as travelerMaxOfferQty
     *
     * The maximum quantity of this offer that may be purchased by one traveler.
     *
     * @return int
     */
    public function getTravelerMaxOfferQty()
    {
        return $this->travelerMaxOfferQty;
    }

    /**
     * Sets a new travelerMaxOfferQty
     *
     * The maximum quantity of this offer that may be purchased by one traveler.
     *
     * @param int $travelerMaxOfferQty
     * @return self
     */
    public function setTravelerMaxOfferQty($travelerMaxOfferQty)
    {
        $this->travelerMaxOfferQty = $travelerMaxOfferQty;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * The date that an offer is available/ usable.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * The date that an offer is available/ usable.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * The date that an offer is no longer available/ usable.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * The date that an offer is no longer available/ usable.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as description
     *
     * Other restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Other restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}

