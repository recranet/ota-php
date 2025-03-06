<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyNameType
 *
 * Traveler name information with ontology reference.
 * XSD Type: OntologyNameType
 */
class OntologyNameType
{
    /**
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @var bool $privacyInd
     */
    private $privacyInd = null;

    /**
     * First name.
     * Example: Bob
     *
     * @var string $givenName
     */
    private $givenName = null;

    /**
     * Last name.
     * Example: Smith
     *
     * @var string $surname
     */
    private $surname = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as privacyInd
     *
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @return bool
     */
    public function getPrivacyInd()
    {
        return $this->privacyInd;
    }

    /**
     * Sets a new privacyInd
     *
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @param bool $privacyInd
     * @return self
     */
    public function setPrivacyInd($privacyInd)
    {
        $this->privacyInd = $privacyInd;
        return $this;
    }

    /**
     * Gets as givenName
     *
     * First name.
     * Example: Bob
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets a new givenName
     *
     * First name.
     * Example: Bob
     *
     * @param string $givenName
     * @return self
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
        return $this;
    }

    /**
     * Gets as surname
     *
     * Last name.
     * Example: Smith
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * Last name.
     * Example: Smith
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
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

