<?php

namespace Recranet\OTA\OntologyBaggageType;

/**
 * Class representing DetailAType
 */
class DetailAType
{
    /**
     * Baggage item name or code.
     * Example: Suitcase
     *
     * @var \Recranet\OTA\OntologyBaggageType\DetailAType\ItemAType $item
     */
    private $item = null;

    /**
     * Baggage size.
     *
     * @var \Recranet\OTA\OntologyDimensionType $size
     */
    private $size = null;

    /**
     * Baggage weight.
     *
     * @var \Recranet\OTA\OntologyWeightType $weight
     */
    private $weight = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as item
     *
     * Baggage item name or code.
     * Example: Suitcase
     *
     * @return \Recranet\OTA\OntologyBaggageType\DetailAType\ItemAType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Baggage item name or code.
     * Example: Suitcase
     *
     * @param \Recranet\OTA\OntologyBaggageType\DetailAType\ItemAType $item
     * @return self
     */
    public function setItem(\Recranet\OTA\OntologyBaggageType\DetailAType\ItemAType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as size
     *
     * Baggage size.
     *
     * @return \Recranet\OTA\OntologyDimensionType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * Baggage size.
     *
     * @param \Recranet\OTA\OntologyDimensionType $size
     * @return self
     */
    public function setSize(?\Recranet\OTA\OntologyDimensionType $size = null)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Baggage weight.
     *
     * @return \Recranet\OTA\OntologyWeightType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Baggage weight.
     *
     * @param \Recranet\OTA\OntologyWeightType $weight
     * @return self
     */
    public function setWeight(?\Recranet\OTA\OntologyWeightType $weight = null)
    {
        $this->weight = $weight;
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

