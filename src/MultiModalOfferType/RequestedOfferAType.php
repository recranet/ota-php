<?php

namespace Recranet\OTA\MultiModalOfferType;

/**
 * Class representing RequestedOfferAType
 */
class RequestedOfferAType
{
    /**
     * Total traveler quantity.
     * Example: 2
     * Note: This is the total quantity of travelers that must be accommodated in the offer response.
     *
     * @var int $numberInParty
     */
    private $numberInParty = null;

    /**
     * One or more offer types to be included or excluded in the response.
     *
     * @var \Recranet\OTA\OntologyOfferType $offerTypes
     */
    private $offerTypes = null;

    /**
     * Offer starting date/ time period and time period duration.
     *
     * @var \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\TimePeriodAType $timePeriod
     */
    private $timePeriod = null;

    /**
     * Requested offer pricing.
     * Note: If specified, this information should be applied to all offers considered for the response.
     *
     * @var \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType $guidelinePricing
     */
    private $guidelinePricing = null;

    /**
     * Trip purpose.
     *
     * @var \Recranet\OTA\OntologyTripPurposeType $tripPurpose
     */
    private $tripPurpose = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as numberInParty
     *
     * Total traveler quantity.
     * Example: 2
     * Note: This is the total quantity of travelers that must be accommodated in the offer response.
     *
     * @return int
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }

    /**
     * Sets a new numberInParty
     *
     * Total traveler quantity.
     * Example: 2
     * Note: This is the total quantity of travelers that must be accommodated in the offer response.
     *
     * @param int $numberInParty
     * @return self
     */
    public function setNumberInParty($numberInParty)
    {
        $this->numberInParty = $numberInParty;
        return $this;
    }

    /**
     * Gets as offerTypes
     *
     * One or more offer types to be included or excluded in the response.
     *
     * @return \Recranet\OTA\OntologyOfferType
     */
    public function getOfferTypes()
    {
        return $this->offerTypes;
    }

    /**
     * Sets a new offerTypes
     *
     * One or more offer types to be included or excluded in the response.
     *
     * @param \Recranet\OTA\OntologyOfferType $offerTypes
     * @return self
     */
    public function setOfferTypes(\Recranet\OTA\OntologyOfferType $offerTypes)
    {
        $this->offerTypes = $offerTypes;
        return $this;
    }

    /**
     * Gets as timePeriod
     *
     * Offer starting date/ time period and time period duration.
     *
     * @return \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\TimePeriodAType
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Sets a new timePeriod
     *
     * Offer starting date/ time period and time period duration.
     *
     * @param \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\TimePeriodAType $timePeriod
     * @return self
     */
    public function setTimePeriod(\Recranet\OTA\MultiModalOfferType\RequestedOfferAType\TimePeriodAType $timePeriod)
    {
        $this->timePeriod = $timePeriod;
        return $this;
    }

    /**
     * Gets as guidelinePricing
     *
     * Requested offer pricing.
     * Note: If specified, this information should be applied to all offers considered for the response.
     *
     * @return \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType
     */
    public function getGuidelinePricing()
    {
        return $this->guidelinePricing;
    }

    /**
     * Sets a new guidelinePricing
     *
     * Requested offer pricing.
     * Note: If specified, this information should be applied to all offers considered for the response.
     *
     * @param \Recranet\OTA\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType $guidelinePricing
     * @return self
     */
    public function setGuidelinePricing(?\Recranet\OTA\MultiModalOfferType\RequestedOfferAType\GuidelinePricingAType $guidelinePricing = null)
    {
        $this->guidelinePricing = $guidelinePricing;
        return $this;
    }

    /**
     * Gets as tripPurpose
     *
     * Trip purpose.
     *
     * @return \Recranet\OTA\OntologyTripPurposeType
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose.
     *
     * @param \Recranet\OTA\OntologyTripPurposeType $tripPurpose
     * @return self
     */
    public function setTripPurpose(?\Recranet\OTA\OntologyTripPurposeType $tripPurpose = null)
    {
        $this->tripPurpose = $tripPurpose;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}
