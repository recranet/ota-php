<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyBaggageType
 *
 * Baggage type, quantity, weight, size with ontology reference.
 * XSD Type: OntologyBaggageType
 */
class OntologyBaggageType
{
    /**
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, traveler(s) have one or more specialty baggage items.
     *
     * @var bool $specialItemInd
     */
    private $specialItemInd = null;

    /**
     * Total baggage quantity.
     * Example: 4
     *
     * @var int $totalPieces
     */
    private $totalPieces = null;

    /**
     * Total weight for all baggage items.
     *
     * @var \Recranet\OTA\OntologyWeightType $totalWeight
     */
    private $totalWeight = null;

    /**
     * Baggage item details.
     *
     * @var \Recranet\OTA\OntologyBaggageType\DetailAType[] $detail
     */
    private $detail = [
        
    ];

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as specialItemInd
     *
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, traveler(s) have one or more specialty baggage items.
     *
     * @return bool
     */
    public function getSpecialItemInd()
    {
        return $this->specialItemInd;
    }

    /**
     * Sets a new specialItemInd
     *
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, traveler(s) have one or more specialty baggage items.
     *
     * @param bool $specialItemInd
     * @return self
     */
    public function setSpecialItemInd($specialItemInd)
    {
        $this->specialItemInd = $specialItemInd;
        return $this;
    }

    /**
     * Gets as totalPieces
     *
     * Total baggage quantity.
     * Example: 4
     *
     * @return int
     */
    public function getTotalPieces()
    {
        return $this->totalPieces;
    }

    /**
     * Sets a new totalPieces
     *
     * Total baggage quantity.
     * Example: 4
     *
     * @param int $totalPieces
     * @return self
     */
    public function setTotalPieces($totalPieces)
    {
        $this->totalPieces = $totalPieces;
        return $this;
    }

    /**
     * Gets as totalWeight
     *
     * Total weight for all baggage items.
     *
     * @return \Recranet\OTA\OntologyWeightType
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * Total weight for all baggage items.
     *
     * @param \Recranet\OTA\OntologyWeightType $totalWeight
     * @return self
     */
    public function setTotalWeight(?\Recranet\OTA\OntologyWeightType $totalWeight = null)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Baggage item details.
     *
     * @return self
     * @param \Recranet\OTA\OntologyBaggageType\DetailAType $detail
     */
    public function addToDetail(\Recranet\OTA\OntologyBaggageType\DetailAType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Baggage item details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Baggage item details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Baggage item details.
     *
     * @return \Recranet\OTA\OntologyBaggageType\DetailAType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Baggage item details.
     *
     * @param \Recranet\OTA\OntologyBaggageType\DetailAType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
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

