<?php

namespace Recranet\OTA;

/**
 * Class representing MultiModalOfferType
 *
 * Traveler and trip information used for targeted multi-modal offers.
 * XSD Type: MultiModalOfferType
 */
class MultiModalOfferType
{
    /**
     * Requesting party information.
     *
     * @var \Recranet\OTA\MultiModalOfferType\RequestingPartyAType $requestingParty
     */
    private $requestingParty = null;

    /**
     * OpenTravel ontology information.
     *
     * @var \Recranet\OTA\MultiModalOfferType\OntologyAType $ontology
     */
    private $ontology = null;

    /**
     * Requested offer information.
     *
     * @var \Recranet\OTA\MultiModalOfferType\RequestedOfferAType $requestedOffer
     */
    private $requestedOffer = null;

    /**
     * Existing trip characteristics.
     * Note: All of this information pertains to the trip component that has been accommodated by the offer requestor.
     *
     * @var \Recranet\OTA\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics
     */
    private $tripCharacteristics = null;

    /**
     * Traveler characteristics.
     *
     * @var \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics
     */
    private $travelerCharacteristics = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as requestingParty
     *
     * Requesting party information.
     *
     * @return \Recranet\OTA\MultiModalOfferType\RequestingPartyAType
     */
    public function getRequestingParty()
    {
        return $this->requestingParty;
    }

    /**
     * Sets a new requestingParty
     *
     * Requesting party information.
     *
     * @param \Recranet\OTA\MultiModalOfferType\RequestingPartyAType $requestingParty
     * @return self
     */
    public function setRequestingParty(\Recranet\OTA\MultiModalOfferType\RequestingPartyAType $requestingParty)
    {
        $this->requestingParty = $requestingParty;
        return $this;
    }

    /**
     * Gets as ontology
     *
     * OpenTravel ontology information.
     *
     * @return \Recranet\OTA\MultiModalOfferType\OntologyAType
     */
    public function getOntology()
    {
        return $this->ontology;
    }

    /**
     * Sets a new ontology
     *
     * OpenTravel ontology information.
     *
     * @param \Recranet\OTA\MultiModalOfferType\OntologyAType $ontology
     * @return self
     */
    public function setOntology(?\Recranet\OTA\MultiModalOfferType\OntologyAType $ontology = null)
    {
        $this->ontology = $ontology;
        return $this;
    }

    /**
     * Gets as requestedOffer
     *
     * Requested offer information.
     *
     * @return \Recranet\OTA\MultiModalOfferType\RequestedOfferAType
     */
    public function getRequestedOffer()
    {
        return $this->requestedOffer;
    }

    /**
     * Sets a new requestedOffer
     *
     * Requested offer information.
     *
     * @param \Recranet\OTA\MultiModalOfferType\RequestedOfferAType $requestedOffer
     * @return self
     */
    public function setRequestedOffer(\Recranet\OTA\MultiModalOfferType\RequestedOfferAType $requestedOffer)
    {
        $this->requestedOffer = $requestedOffer;
        return $this;
    }

    /**
     * Gets as tripCharacteristics
     *
     * Existing trip characteristics.
     * Note: All of this information pertains to the trip component that has been accommodated by the offer requestor.
     *
     * @return \Recranet\OTA\MultiModalOfferType\TripCharacteristicsAType
     */
    public function getTripCharacteristics()
    {
        return $this->tripCharacteristics;
    }

    /**
     * Sets a new tripCharacteristics
     *
     * Existing trip characteristics.
     * Note: All of this information pertains to the trip component that has been accommodated by the offer requestor.
     *
     * @param \Recranet\OTA\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics
     * @return self
     */
    public function setTripCharacteristics(?\Recranet\OTA\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics = null)
    {
        $this->tripCharacteristics = $tripCharacteristics;
        return $this;
    }

    /**
     * Gets as travelerCharacteristics
     *
     * Traveler characteristics.
     *
     * @return \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType
     */
    public function getTravelerCharacteristics()
    {
        return $this->travelerCharacteristics;
    }

    /**
     * Sets a new travelerCharacteristics
     *
     * Traveler characteristics.
     *
     * @param \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics
     * @return self
     */
    public function setTravelerCharacteristics(?\Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics = null)
    {
        $this->travelerCharacteristics = $travelerCharacteristics;
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

