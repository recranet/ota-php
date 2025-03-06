<?php

namespace Recranet\OTA\Type\OntologyBaggageType;

/**
 * Class representing DetailAType
 */
class DetailAType
{
    /**
     * Baggage item name or code.
     * Example: Suitcase
     *
     * @var \Recranet\OTA\Type\OntologyBaggageType\DetailAType\ItemAType $item
     */
    private $item = null;

    /**
     * Baggage size.
     *
     * @var \Recranet\OTA\Type\OntologyDimensionType $size
     */
    private $size = null;

    /**
     * Baggage weight.
     *
     * @var \Recranet\OTA\Type\OntologyWeightType $weight
     */
    private $weight = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as item
     *
     * Baggage item name or code.
     * Example: Suitcase
     *
     * @return \Recranet\OTA\Type\OntologyBaggageType\DetailAType\ItemAType
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
     * @param \Recranet\OTA\Type\OntologyBaggageType\DetailAType\ItemAType $item
     * @return self
     */
    public function setItem(\Recranet\OTA\Type\OntologyBaggageType\DetailAType\ItemAType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as size
     *
     * Baggage size.
     *
     * @return \Recranet\OTA\Type\OntologyDimensionType
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
     * @param \Recranet\OTA\Type\OntologyDimensionType $size
     * @return self
     */
    public function setSize(?\Recranet\OTA\Type\OntologyDimensionType $size = null)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Baggage weight.
     *
     * @return \Recranet\OTA\Type\OntologyWeightType
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
     * @param \Recranet\OTA\Type\OntologyWeightType $weight
     * @return self
     */
    public function setWeight(?\Recranet\OTA\Type\OntologyWeightType $weight = null)
    {
        $this->weight = $weight;
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

