<?php

namespace Recranet\OTA\OntologyAnimalType;

/**
 * Class representing DetailAType
 */
class DetailAType
{
    /**
     * Animal type.
     * Example: Suitcase
     *
     * @var \Recranet\OTA\OntologyAnimalType\DetailAType\TypeAType $type
     */
    private $type = null;

    /**
     * Animal weight.
     *
     * @var \Recranet\OTA\OntologyAnimalType\DetailAType\WeightAType $weight
     */
    private $weight = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Animal type.
     * Example: Suitcase
     *
     * @return \Recranet\OTA\OntologyAnimalType\DetailAType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Animal type.
     * Example: Suitcase
     *
     * @param \Recranet\OTA\OntologyAnimalType\DetailAType\TypeAType $type
     * @return self
     */
    public function setType(\Recranet\OTA\OntologyAnimalType\DetailAType\TypeAType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Animal weight.
     *
     * @return \Recranet\OTA\OntologyAnimalType\DetailAType\WeightAType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Animal weight.
     *
     * @param \Recranet\OTA\OntologyAnimalType\DetailAType\WeightAType $weight
     * @return self
     */
    public function setWeight(?\Recranet\OTA\OntologyAnimalType\DetailAType\WeightAType $weight = null)
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

