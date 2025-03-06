<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyLodgingType
 *
 * Lodging information with ontology reference.
 * XSD Type: OntologyLodgingType
 */
class OntologyLodgingType
{
    /**
     * Property code or name.
     * Example: 123
     *
     * @var \Recranet\OTA\Type\OntologyCodeType $code
     */
    private $code = null;

    /**
     * Property class.
     *
     * @var \Recranet\OTA\Type\OntologyLodgingType\PropertyClassAType $propertyClass
     */
    private $propertyClass = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as code
     *
     * Property code or name.
     * Example: 123
     *
     * @return \Recranet\OTA\Type\OntologyCodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Property code or name.
     * Example: 123
     *
     * @param \Recranet\OTA\Type\OntologyCodeType $code
     * @return self
     */
    public function setCode(\Recranet\OTA\Type\OntologyCodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as propertyClass
     *
     * Property class.
     *
     * @return \Recranet\OTA\Type\OntologyLodgingType\PropertyClassAType
     */
    public function getPropertyClass()
    {
        return $this->propertyClass;
    }

    /**
     * Sets a new propertyClass
     *
     * Property class.
     *
     * @param \Recranet\OTA\Type\OntologyLodgingType\PropertyClassAType $propertyClass
     * @return self
     */
    public function setPropertyClass(?\Recranet\OTA\Type\OntologyLodgingType\PropertyClassAType $propertyClass = null)
    {
        $this->propertyClass = $propertyClass;
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

