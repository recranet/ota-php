<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyWeightType
 *
 * Weight measurement system, unit of measure and weight value with ontology reference.
 * XSD Type: OntologyWeightType
 */
class OntologyWeightType
{
    /**
     * Measurement system for weight information.
     *
     * @var string $measurementSystem
     */
    private $measurementSystem = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Weight unit of measure.
     * Example: US_Customary
     *
     * @var \Recranet\OTA\Type\OntologyWeightType\WeightUnitAType $weightUnit
     */
    private $weightUnit = null;

    /**
     * Gets as measurementSystem
     *
     * Measurement system for weight information.
     *
     * @return string
     */
    public function getMeasurementSystem()
    {
        return $this->measurementSystem;
    }

    /**
     * Sets a new measurementSystem
     *
     * Measurement system for weight information.
     *
     * @param string $measurementSystem
     * @return self
     */
    public function setMeasurementSystem($measurementSystem)
    {
        $this->measurementSystem = $measurementSystem;
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
     * Gets as weightUnit
     *
     * Weight unit of measure.
     * Example: US_Customary
     *
     * @return \Recranet\OTA\Type\OntologyWeightType\WeightUnitAType
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * Weight unit of measure.
     * Example: US_Customary
     *
     * @param \Recranet\OTA\Type\OntologyWeightType\WeightUnitAType $weightUnit
     * @return self
     */
    public function setWeightUnit(?\Recranet\OTA\Type\OntologyWeightType\WeightUnitAType $weightUnit = null)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
}

