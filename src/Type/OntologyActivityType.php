<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyActivityType
 *
 * Activity related information with ontology reference.
 * XSD Type: OntologyActivityType
 */
class OntologyActivityType
{
    /**
     * Activity type.
     * Example: Family
     * Implementer: To pass a value that is not in this list, select the "Other_" literal and specify a value in the @OtherType attribute.
     *
     * @var \Recranet\OTA\Type\OntologyActivityType\TypeAType $type
     */
    private $type = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Activity type.
     * Example: Family
     * Implementer: To pass a value that is not in this list, select the "Other_" literal and specify a value in the @OtherType attribute.
     *
     * @return \Recranet\OTA\Type\OntologyActivityType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Activity type.
     * Example: Family
     * Implementer: To pass a value that is not in this list, select the "Other_" literal and specify a value in the @OtherType attribute.
     *
     * @param \Recranet\OTA\Type\OntologyActivityType\TypeAType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\Type\OntologyActivityType\TypeAType $type = null)
    {
        $this->type = $type;
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

