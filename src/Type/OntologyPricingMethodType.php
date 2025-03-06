<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyPricingMethodType
 *
 * Pricing method with ontology reference.
 * XSD Type: OntologyPricingMethodType
 */
class OntologyPricingMethodType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Inclusive pricing indicator.
     * Example: true
     * Implementer: If true, the offer pricing should include all associated fees and taxes.
     *
     * @var bool $inclusiveInd
     */
    private $inclusiveInd = null;

    /**
     * Approximate pricing indicator.
     * Example: true
     * Implementer: If true, the returned offer pricing is approximate.
     *
     * @var bool $approximateInd
     */
    private $approximateInd = null;

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
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as inclusiveInd
     *
     * Inclusive pricing indicator.
     * Example: true
     * Implementer: If true, the offer pricing should include all associated fees and taxes.
     *
     * @return bool
     */
    public function getInclusiveInd()
    {
        return $this->inclusiveInd;
    }

    /**
     * Sets a new inclusiveInd
     *
     * Inclusive pricing indicator.
     * Example: true
     * Implementer: If true, the offer pricing should include all associated fees and taxes.
     *
     * @param bool $inclusiveInd
     * @return self
     */
    public function setInclusiveInd($inclusiveInd)
    {
        $this->inclusiveInd = $inclusiveInd;
        return $this;
    }

    /**
     * Gets as approximateInd
     *
     * Approximate pricing indicator.
     * Example: true
     * Implementer: If true, the returned offer pricing is approximate.
     *
     * @return bool
     */
    public function getApproximateInd()
    {
        return $this->approximateInd;
    }

    /**
     * Sets a new approximateInd
     *
     * Approximate pricing indicator.
     * Example: true
     * Implementer: If true, the returned offer pricing is approximate.
     *
     * @param bool $approximateInd
     * @return self
     */
    public function setApproximateInd($approximateInd)
    {
        $this->approximateInd = $approximateInd;
        return $this;
    }

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
}

