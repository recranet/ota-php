<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyOfferType
 *
 * Offer type, inclusion/ exclusion with ontology reference.
 * XSD Type: OntologyOfferType
 */
class OntologyOfferType
{
    /**
     * Return all offer types indicator.
     * Example: true
     * Implementer: If true, all offer types should be considered for the response and it is not necessary to parse the OfferType element.
     *
     * @var bool $allOffersInd
     */
    private $allOffersInd = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * One offer type.
     *
     * @var \Recranet\OTA\OntologyOfferType\OfferAType[] $offer
     */
    private $offer = [
        
    ];

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as allOffersInd
     *
     * Return all offer types indicator.
     * Example: true
     * Implementer: If true, all offer types should be considered for the response and it is not necessary to parse the OfferType element.
     *
     * @return bool
     */
    public function getAllOffersInd()
    {
        return $this->allOffersInd;
    }

    /**
     * Sets a new allOffersInd
     *
     * Return all offer types indicator.
     * Example: true
     * Implementer: If true, all offer types should be considered for the response and it is not necessary to parse the OfferType element.
     *
     * @param bool $allOffersInd
     * @return self
     */
    public function setAllOffersInd($allOffersInd)
    {
        $this->allOffersInd = $allOffersInd;
        return $this;
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;
        return $this;
    }

    /**
     * Adds as offer
     *
     * One offer type.
     *
     * @return self
     * @param \Recranet\OTA\OntologyOfferType\OfferAType $offer
     */
    public function addToOffer(\Recranet\OTA\OntologyOfferType\OfferAType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * One offer type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * One offer type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * One offer type.
     *
     * @return \Recranet\OTA\OntologyOfferType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * One offer type.
     *
     * @param \Recranet\OTA\OntologyOfferType\OfferAType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;
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

