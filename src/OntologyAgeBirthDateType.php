<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyAgeBirthDateType
 *
 * Age,and birthdate information with ontology reference.
 * XSD Type: OntologyAgeBirthDateType
 */
class OntologyAgeBirthDateType
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
     * Age in years.
     * Example: 32
     *
     * @var int $age
     */
    private $age = null;

    /**
     * Birth date.
     * Example: 1973-01-12
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Birth year.
     * Example: 1973-01-12
     *
     * @var int $birthYear
     */
    private $birthYear = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

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
     * Gets as age
     *
     * Age in years.
     * Example: 32
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Age in years.
     * Example: 32
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Birth date.
     * Example: 1973-01-12
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Birth date.
     * Example: 1973-01-12
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as birthYear
     *
     * Birth year.
     * Example: 1973-01-12
     *
     * @return int
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Sets a new birthYear
     *
     * Birth year.
     * Example: 1973-01-12
     *
     * @param int $birthYear
     * @return self
     */
    public function setBirthYear($birthYear)
    {
        $this->birthYear = $birthYear;
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

