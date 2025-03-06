<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\OntologyLoyaltyType\SectorAType $sector
     */
    private $sector = null;

    /**
     * Loyalty program name.
     *
     * @var \Recranet\OTA\Type\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode
     */
    private $programNameOrCode = null;

    /**
     * Loyalty program member information.
     *
     * @var \Recranet\OTA\Type\OntologyLoyaltyType\MemberInfoAType $memberInfo
     */
    private $memberInfo = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as sector
     *
     * Program provider travel sector.
     * Example: Transportation
     *
     * @return \Recranet\OTA\Type\OntologyLoyaltyType\SectorAType
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
     * @param \Recranet\OTA\Type\OntologyLoyaltyType\SectorAType $sector
     * @return self
     */
    public function setSector(?\Recranet\OTA\Type\OntologyLoyaltyType\SectorAType $sector = null)
    {
        $this->sector = $sector;
        return $this;
    }

    /**
     * Gets as programNameOrCode
     *
     * Loyalty program name.
     *
     * @return \Recranet\OTA\Type\OntologyLoyaltyType\ProgramNameOrCodeAType
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
     * @param \Recranet\OTA\Type\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode
     * @return self
     */
    public function setProgramNameOrCode(?\Recranet\OTA\Type\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode = null)
    {
        $this->programNameOrCode = $programNameOrCode;
        return $this;
    }

    /**
     * Gets as memberInfo
     *
     * Loyalty program member information.
     *
     * @return \Recranet\OTA\Type\OntologyLoyaltyType\MemberInfoAType
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
     * @param \Recranet\OTA\Type\OntologyLoyaltyType\MemberInfoAType $memberInfo
     * @return self
     */
    public function setMemberInfo(?\Recranet\OTA\Type\OntologyLoyaltyType\MemberInfoAType $memberInfo = null)
    {
        $this->memberInfo = $memberInfo;
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

