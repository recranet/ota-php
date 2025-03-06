<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AgreementsType
 *
 * Section of a business profile that contains information about trading partner agreements.
 * XSD Type: AgreementsType
 */
class AgreementsType
{
    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Information about certifications or accreditations.
     *
     * @var \Recranet\OTA\Type\CertificationType[] $certification
     */
    private $certification = [
        
    ];

    /**
     * Information about alliance partnerships and consortiums.
     *
     * @var \Recranet\OTA\Type\AllianceConsortiumType[] $allianceConsortium
     */
    private $allianceConsortium = [
        
    ];

    /**
     * Information about an agreement for a commission arrangement.
     *
     * @var \Recranet\OTA\Type\CommissionInfoType[] $commissionInfo
     */
    private $commissionInfo = [
        
    ];

    /**
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @var \Recranet\OTA\Type\AgreementsType\ProfileSecurityAType[] $profileSecurity
     */
    private $profileSecurity = [
        
    ];

    /**
     * Used to reflect contract details linked to a profile.
     *
     * @var \Recranet\OTA\Type\ParagraphType $contractInformation
     */
    private $contractInformation = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Adds as certification
     *
     * Information about certifications or accreditations.
     *
     * @return self
     * @param \Recranet\OTA\Type\CertificationType $certification
     */
    public function addToCertification(\Recranet\OTA\Type\CertificationType $certification)
    {
        $this->certification[] = $certification;
        return $this;
    }

    /**
     * isset certification
     *
     * Information about certifications or accreditations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertification($index)
    {
        return isset($this->certification[$index]);
    }

    /**
     * unset certification
     *
     * Information about certifications or accreditations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertification($index)
    {
        unset($this->certification[$index]);
    }

    /**
     * Gets as certification
     *
     * Information about certifications or accreditations.
     *
     * @return \Recranet\OTA\Type\CertificationType[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * Information about certifications or accreditations.
     *
     * @param \Recranet\OTA\Type\CertificationType[] $certification
     * @return self
     */
    public function setCertification(array $certification = null)
    {
        $this->certification = $certification;
        return $this;
    }

    /**
     * Adds as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return self
     * @param \Recranet\OTA\Type\AllianceConsortiumType $allianceConsortium
     */
    public function addToAllianceConsortium(\Recranet\OTA\Type\AllianceConsortiumType $allianceConsortium)
    {
        $this->allianceConsortium[] = $allianceConsortium;
        return $this;
    }

    /**
     * isset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllianceConsortium($index)
    {
        return isset($this->allianceConsortium[$index]);
    }

    /**
     * unset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllianceConsortium($index)
    {
        unset($this->allianceConsortium[$index]);
    }

    /**
     * Gets as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return \Recranet\OTA\Type\AllianceConsortiumType[]
     */
    public function getAllianceConsortium()
    {
        return $this->allianceConsortium;
    }

    /**
     * Sets a new allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param \Recranet\OTA\Type\AllianceConsortiumType[] $allianceConsortium
     * @return self
     */
    public function setAllianceConsortium(array $allianceConsortium = null)
    {
        $this->allianceConsortium = $allianceConsortium;
        return $this;
    }

    /**
     * Adds as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return self
     * @param \Recranet\OTA\Type\CommissionInfoType $commissionInfo
     */
    public function addToCommissionInfo(\Recranet\OTA\Type\CommissionInfoType $commissionInfo)
    {
        $this->commissionInfo[] = $commissionInfo;
        return $this;
    }

    /**
     * isset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommissionInfo($index)
    {
        return isset($this->commissionInfo[$index]);
    }

    /**
     * unset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommissionInfo($index)
    {
        unset($this->commissionInfo[$index]);
    }

    /**
     * Gets as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return \Recranet\OTA\Type\CommissionInfoType[]
     */
    public function getCommissionInfo()
    {
        return $this->commissionInfo;
    }

    /**
     * Sets a new commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param \Recranet\OTA\Type\CommissionInfoType[] $commissionInfo
     * @return self
     */
    public function setCommissionInfo(array $commissionInfo = null)
    {
        $this->commissionInfo = $commissionInfo;
        return $this;
    }

    /**
     * Adds as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @return self
     * @param \Recranet\OTA\Type\AgreementsType\ProfileSecurityAType $profileSecurity
     */
    public function addToProfileSecurity(\Recranet\OTA\Type\AgreementsType\ProfileSecurityAType $profileSecurity)
    {
        $this->profileSecurity[] = $profileSecurity;
        return $this;
    }

    /**
     * isset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileSecurity($index)
    {
        return isset($this->profileSecurity[$index]);
    }

    /**
     * unset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileSecurity($index)
    {
        unset($this->profileSecurity[$index]);
    }

    /**
     * Gets as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @return \Recranet\OTA\Type\AgreementsType\ProfileSecurityAType[]
     */
    public function getProfileSecurity()
    {
        return $this->profileSecurity;
    }

    /**
     * Sets a new profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param \Recranet\OTA\Type\AgreementsType\ProfileSecurityAType[] $profileSecurity
     * @return self
     */
    public function setProfileSecurity(array $profileSecurity = null)
    {
        $this->profileSecurity = $profileSecurity;
        return $this;
    }

    /**
     * Gets as contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getContractInformation()
    {
        return $this->contractInformation;
    }

    /**
     * Sets a new contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @param \Recranet\OTA\Type\ParagraphType $contractInformation
     * @return self
     */
    public function setContractInformation(?\Recranet\OTA\Type\ParagraphType $contractInformation = null)
    {
        $this->contractInformation = $contractInformation;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

