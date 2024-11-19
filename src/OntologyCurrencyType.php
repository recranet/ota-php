<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyCurrencyType
 *
 * Currency encoding, amount with ontology reference.
 * XSD Type: OntologyCurrencyType
 */
class OntologyCurrencyType
{
    /**
     * Currency code for monetary amounts.
     * Example: USD
     * Note: Best practices state an ISO 4217 Currency Code format should be used. If another format is used, specify the format in the @Context attribute.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Decimal places for associated @CurrencyCode.
     * Example: 2
     *
     * @var int $currencyDecimal
     */
    private $currencyDecimal = null;

    /**
     * Currency amount.
     * Example: USD
     * Note: ISO 4217 Currency Code format.
     *
     * @var int $amount
     */
    private $amount = null;

    /**
     * Item context (source authority.)
     * Example: ISO
     *
     * @var string $context
     */
    private $context = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Gets as currencyCode
     *
     * Currency code for monetary amounts.
     * Example: USD
     * Note: Best practices state an ISO 4217 Currency Code format should be used. If another format is used, specify the format in the @Context attribute.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Currency code for monetary amounts.
     * Example: USD
     * Note: Best practices state an ISO 4217 Currency Code format should be used. If another format is used, specify the format in the @Context attribute.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as currencyDecimal
     *
     * Decimal places for associated @CurrencyCode.
     * Example: 2
     *
     * @return int
     */
    public function getCurrencyDecimal()
    {
        return $this->currencyDecimal;
    }

    /**
     * Sets a new currencyDecimal
     *
     * Decimal places for associated @CurrencyCode.
     * Example: 2
     *
     * @param int $currencyDecimal
     * @return self
     */
    public function setCurrencyDecimal($currencyDecimal)
    {
        $this->currencyDecimal = $currencyDecimal;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Currency amount.
     * Example: USD
     * Note: ISO 4217 Currency Code format.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Currency amount.
     * Example: USD
     * Note: ISO 4217 Currency Code format.
     *
     * @param int $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as context
     *
     * Item context (source authority.)
     * Example: ISO
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Item context (source authority.)
     * Example: ISO
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;
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

