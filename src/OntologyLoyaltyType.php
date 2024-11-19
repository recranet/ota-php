<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyLoyaltyType
 *
 * Loyalty information with ontology reference.
 * XSD Type: OntologyLoyaltyType
 */
class OntologyLoyaltyType
{
    /**
     * Program provider travel sector.
     * Example: Transportation
     *
     * @var \Recranet\OTA\OntologyLoyaltyType\SectorAType $sector
     */
    private $sector = null;

    /**
     * Loyalty program name.
     *
     * @var \Recranet\OTA\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode
     */
    private $programNameOrCode = null;

    /**
     * Loyalty program member information.
     *
     * @var \Recranet\OTA\OntologyLoyaltyType\MemberInfoAType $memberInfo
     */
    private $memberInfo = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as sector
     *
     * Program provider travel sector.
     * Example: Transportation
     *
     * @return \Recranet\OTA\OntologyLoyaltyType\SectorAType
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Sets a new sector
     *
     * Program provider travel sector.
     * Example: Transportation
     *
     * @param \Recranet\OTA\OntologyLoyaltyType\SectorAType $sector
     * @return self
     */
    public function setSector(?\Recranet\OTA\OntologyLoyaltyType\SectorAType $sector = null)
    {
        $this->sector = $sector;
        return $this;
    }

    /**
     * Gets as programNameOrCode
     *
     * Loyalty program name.
     *
     * @return \Recranet\OTA\OntologyLoyaltyType\ProgramNameOrCodeAType
     */
    public function getProgramNameOrCode()
    {
        return $this->programNameOrCode;
    }

    /**
     * Sets a new programNameOrCode
     *
     * Loyalty program name.
     *
     * @param \Recranet\OTA\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode
     * @return self
     */
    public function setProgramNameOrCode(?\Recranet\OTA\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode = null)
    {
        $this->programNameOrCode = $programNameOrCode;
        return $this;
    }

    /**
     * Gets as memberInfo
     *
     * Loyalty program member information.
     *
     * @return \Recranet\OTA\OntologyLoyaltyType\MemberInfoAType
     */
    public function getMemberInfo()
    {
        return $this->memberInfo;
    }

    /**
     * Sets a new memberInfo
     *
     * Loyalty program member information.
     *
     * @param \Recranet\OTA\OntologyLoyaltyType\MemberInfoAType $memberInfo
     * @return self
     */
    public function setMemberInfo(?\Recranet\OTA\OntologyLoyaltyType\MemberInfoAType $memberInfo = null)
    {
        $this->memberInfo = $memberInfo;
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

