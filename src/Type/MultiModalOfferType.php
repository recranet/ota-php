<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestingPartyAType $requestingParty
     */
    private $requestingParty = null;

    /**
     * OpenTravel ontology information.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\OntologyAType $ontology
     */
    private $ontology = null;

    /**
     * Requested offer information.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType $requestedOffer
     */
    private $requestedOffer = null;

    /**
     * Existing trip characteristics.
     * Note: All of this information pertains to the trip component that has been accommodated by the offer requestor.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics
     */
    private $tripCharacteristics = null;

    /**
     * Traveler characteristics.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics
     */
    private $travelerCharacteristics = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as requestingParty
     *
     * Requesting party information.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestingPartyAType
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
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestingPartyAType $requestingParty
     * @return self
     */
    public function setRequestingParty(\Recranet\OTA\Type\MultiModalOfferType\RequestingPartyAType $requestingParty)
    {
        $this->requestingParty = $requestingParty;
        return $this;
    }

    /**
     * Gets as ontology
     *
     * OpenTravel ontology information.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\OntologyAType
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
     * @param \Recranet\OTA\Type\MultiModalOfferType\OntologyAType $ontology
     * @return self
     */
    public function setOntology(?\Recranet\OTA\Type\MultiModalOfferType\OntologyAType $ontology = null)
    {
        $this->ontology = $ontology;
        return $this;
    }

    /**
     * Gets as requestedOffer
     *
     * Requested offer information.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType
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
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType $requestedOffer
     * @return self
     */
    public function setRequestedOffer(\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType $requestedOffer)
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
     * @return \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType
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
     * @param \Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics
     * @return self
     */
    public function setTripCharacteristics(?\Recranet\OTA\Type\MultiModalOfferType\TripCharacteristicsAType $tripCharacteristics = null)
    {
        $this->tripCharacteristics = $tripCharacteristics;
        return $this;
    }

    /**
     * Gets as travelerCharacteristics
     *
     * Traveler characteristics.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\TravelerCharacteristicsAType
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
     * @param \Recranet\OTA\Type\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics
     * @return self
     */
    public function setTravelerCharacteristics(?\Recranet\OTA\Type\MultiModalOfferType\TravelerCharacteristicsAType $travelerCharacteristics = null)
    {
        $this->travelerCharacteristics = $travelerCharacteristics;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

