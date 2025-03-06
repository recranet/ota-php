<?php

namespace Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType;

/**
 * Class representing CalculationMethodAType
 */
class CalculationMethodAType
{
    /**
     * Other type.
     * Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @var string $otherType
     */
    private $otherType = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Formula used to calculate earliest start date or start date and time.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\FormulaAType $formula
     */
    private $formula = null;

    /**
     * Formula distance unit of measure and value.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DistanceAType $distance
     */
    private $distance = null;

    /**
     * Formula duration unit of measure and value.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as otherType
     *
     * Other type.
     * Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @return string
     */
    public function getOtherType()
    {
        return $this->otherType;
    }

    /**
     * Sets a new otherType
     *
     * Other type.
     * Implementer: Type if "Other_" is selected from enumerated list.
     *
     * @param string $otherType
     * @return self
     */
    public function setOtherType($otherType)
    {
        $this->otherType = $otherType;
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
     * Gets as formula
     *
     * Formula used to calculate earliest start date or start date and time.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\FormulaAType
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Sets a new formula
     *
     * Formula used to calculate earliest start date or start date and time.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\FormulaAType $formula
     * @return self
     */
    public function setFormula(?\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\FormulaAType $formula = null)
    {
        $this->formula = $formula;
        return $this;
    }

    /**
     * Gets as distance
     *
     * Formula distance unit of measure and value.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DistanceAType
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * Formula distance unit of measure and value.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DistanceAType $distance
     * @return self
     */
    public function setDistance(?\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DistanceAType $distance = null)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Formula duration unit of measure and value.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Formula duration unit of measure and value.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DurationAType $duration
     * @return self
     */
    public function setDuration(?\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType\DurationAType $duration = null)
    {
        $this->duration = $duration;
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

