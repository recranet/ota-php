<?php

namespace Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType;

/**
 * Class representing TimePeriodAType
 */
class TimePeriodAType
{
    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Earliest start date/ time for offer availability.
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType $earliestStart
     */
    private $earliestStart = null;

    /**
     * Maximum offer duration unit of measure and value.
     * Example: Minute
     *
     * @var \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\MaximumDurationAType $maximumDuration
     */
    private $maximumDuration = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

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
     * Gets as earliestStart
     *
     * Earliest start date/ time for offer availability.
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType
     */
    public function getEarliestStart()
    {
        return $this->earliestStart;
    }

    /**
     * Sets a new earliestStart
     *
     * Earliest start date/ time for offer availability.
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType $earliestStart
     * @return self
     */
    public function setEarliestStart(\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType $earliestStart)
    {
        $this->earliestStart = $earliestStart;
        return $this;
    }

    /**
     * Gets as maximumDuration
     *
     * Maximum offer duration unit of measure and value.
     * Example: Minute
     *
     * @return \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\MaximumDurationAType
     */
    public function getMaximumDuration()
    {
        return $this->maximumDuration;
    }

    /**
     * Sets a new maximumDuration
     *
     * Maximum offer duration unit of measure and value.
     * Example: Minute
     *
     * @param \Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\MaximumDurationAType $maximumDuration
     * @return self
     */
    public function setMaximumDuration(?\Recranet\OTA\Type\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\MaximumDurationAType $maximumDuration = null)
    {
        $this->maximumDuration = $maximumDuration;
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

