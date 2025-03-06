<?php

namespace Recranet\OTA\Type\MultiModalOfferType;

use Recranet\OTA\Type\OntologyDefinitionType;

/**
 * Class representing OntologyAType
 */
class OntologyAType extends OntologyDefinitionType
{
    /**
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\OntologyAType\CompatibleWithAType[] $compatibleWith
     */
    private $compatibleWith = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Adds as compatibleWith
     *
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @return self
     * @param \Recranet\OTA\Type\MultiModalOfferType\OntologyAType\CompatibleWithAType $compatibleWith
     */
    public function addToCompatibleWith(\Recranet\OTA\Type\MultiModalOfferType\OntologyAType\CompatibleWithAType $compatibleWith)
    {
        $this->compatibleWith[] = $compatibleWith;
        return $this;
    }

    /**
     * isset compatibleWith
     *
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompatibleWith($index)
    {
        return isset($this->compatibleWith[$index]);
    }

    /**
     * unset compatibleWith
     *
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompatibleWith($index)
    {
        unset($this->compatibleWith[$index]);
    }

    /**
     * Gets as compatibleWith
     *
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\OntologyAType\CompatibleWithAType[]
     */
    public function getCompatibleWith()
    {
        return $this->compatibleWith;
    }

    /**
     * Sets a new compatibleWith
     *
     * Compatible ontology(s) URI collection.
     * Note: This is a URL to another ontology that this specified ontology is compatible with.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\OntologyAType\CompatibleWithAType[] $compatibleWith
     * @return self
     */
    public function setCompatibleWith(array $compatibleWith = null)
    {
        $this->compatibleWith = $compatibleWith;
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

