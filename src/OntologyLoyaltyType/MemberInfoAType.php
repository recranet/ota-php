<?php

namespace Recranet\OTA\OntologyLoyaltyType;

/**
 * Class representing MemberInfoAType
 */
class MemberInfoAType
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
     * Loyalty program member ID.
     * Example: 1234567
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Loyalty program member signup date.
     * Example: 2010-01-12
     *
     * @var \DateTime $signupDate
     */
    private $signupDate = null;

    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
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
     * Gets as iD
     *
     * Loyalty program member ID.
     * Example: 1234567
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Loyalty program member ID.
     * Example: 1234567
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as signupDate
     *
     * Loyalty program member signup date.
     * Example: 2010-01-12
     *
     * @return \DateTime
     */
    public function getSignupDate()
    {
        return $this->signupDate;
    }

    /**
     * Sets a new signupDate
     *
     * Loyalty program member signup date.
     * Example: 2010-01-12
     *
     * @param \DateTime $signupDate
     * @return self
     */
    public function setSignupDate(\DateTime $signupDate)
    {
        $this->signupDate = $signupDate;
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

