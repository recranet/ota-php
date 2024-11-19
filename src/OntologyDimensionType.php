<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyDimensionType
 *
 * Dimension measurement system, unit of measure and dimension values with ontology reference.
 * XSD Type: OntologyDimensionType
 */
class OntologyDimensionType
{
    /**
     * Measurement system for size information.
     * Example: US_Customary
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
     * Dimension unit of measure.
     * Example: US_Customary
     *
     * @var \Recranet\OTA\OntologyDimensionType\DimensionUnitAType $dimensionUnit
     */
    private $dimensionUnit = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as measurementSystem
     *
     * Measurement system for size information.
     * Example: US_Customary
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
     * Measurement system for size information.
     * Example: US_Customary
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
     * Gets as dimensionUnit
     *
     * Dimension unit of measure.
     * Example: US_Customary
     *
     * @return \Recranet\OTA\OntologyDimensionType\DimensionUnitAType
     */
    public function getDimensionUnit()
    {
        return $this->dimensionUnit;
    }

    /**
     * Sets a new dimensionUnit
     *
     * Dimension unit of measure.
     * Example: US_Customary
     *
     * @param \Recranet\OTA\OntologyDimensionType\DimensionUnitAType $dimensionUnit
     * @return self
     */
    public function setDimensionUnit(?\Recranet\OTA\OntologyDimensionType\DimensionUnitAType $dimensionUnit = null)
    {
        $this->dimensionUnit = $dimensionUnit;
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

