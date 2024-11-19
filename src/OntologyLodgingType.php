<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\OntologyCodeType $code
     */
    private $code = null;

    /**
     * Property class.
     *
     * @var \Recranet\OTA\OntologyLodgingType\PropertyClassAType $propertyClass
     */
    private $propertyClass = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as code
     *
     * Property code or name.
     * Example: 123
     *
     * @return \Recranet\OTA\OntologyCodeType
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
     * @param \Recranet\OTA\OntologyCodeType $code
     * @return self
     */
    public function setCode(\Recranet\OTA\OntologyCodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as propertyClass
     *
     * Property class.
     *
     * @return \Recranet\OTA\OntologyLodgingType\PropertyClassAType
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
     * @param \Recranet\OTA\OntologyLodgingType\PropertyClassAType $propertyClass
     * @return self
     */
    public function setPropertyClass(?\Recranet\OTA\OntologyLodgingType\PropertyClassAType $propertyClass = null)
    {
        $this->propertyClass = $propertyClass;
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

