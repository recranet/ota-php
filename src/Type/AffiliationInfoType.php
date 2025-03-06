<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AffiliationInfoType
 *
 * The AffiliationInfo object is used to identify the brand or franchise affiliations of the hotel.
 * XSD Type: AffiliationInfoType
 */
class AffiliationInfoType
{
    /**
     * The date and time when the affiliation information for this hotel was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A collection of DistribSystem elements.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\DistribSystemsAType $distribSystems
     */
    private $distribSystems = null;

    /**
     * Collection of Brands.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\BrandsAType\BrandAType[] $brands
     */
    private $brands = null;

    /**
     * Collection of LoyalPrograms.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[] $loyalPrograms
     */
    private $loyalPrograms = null;

    /**
     * A collection of Award elements.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[] $awards
     */
    private $awards = null;

    /**
     * Collection of PartnerInfo.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[] $partnerInfos
     */
    private $partnerInfos = null;

    /**
     * Collection of affiliation descriptions.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $descriptions
     */
    private $descriptions = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when the affiliation information for this hotel was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the affiliation information for this hotel was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as distribSystems
     *
     * A collection of DistribSystem elements.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\DistribSystemsAType
     */
    public function getDistribSystems()
    {
        return $this->distribSystems;
    }

    /**
     * Sets a new distribSystems
     *
     * A collection of DistribSystem elements.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\DistribSystemsAType $distribSystems
     * @return self
     */
    public function setDistribSystems(?\Recranet\OTA\Type\AffiliationInfoType\DistribSystemsAType $distribSystems = null)
    {
        $this->distribSystems = $distribSystems;
        return $this;
    }

    /**
     * Adds as brand
     *
     * Collection of Brands.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\BrandsAType\BrandAType $brand
     */
    public function addToBrands(\Recranet\OTA\Type\AffiliationInfoType\BrandsAType\BrandAType $brand)
    {
        $this->brands[] = $brand;
        return $this;
    }

    /**
     * isset brands
     *
     * Collection of Brands.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrands($index)
    {
        return isset($this->brands[$index]);
    }

    /**
     * unset brands
     *
     * Collection of Brands.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrands($index)
    {
        unset($this->brands[$index]);
    }

    /**
     * Gets as brands
     *
     * Collection of Brands.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\BrandsAType\BrandAType[]
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Sets a new brands
     *
     * Collection of Brands.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\BrandsAType\BrandAType[] $brands
     * @return self
     */
    public function setBrands(array $brands = null)
    {
        $this->brands = $brands;
        return $this;
    }

    /**
     * Adds as loyalProgram
     *
     * Collection of LoyalPrograms.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram
     */
    public function addToLoyalPrograms(\Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram)
    {
        $this->loyalPrograms[] = $loyalProgram;
        return $this;
    }

    /**
     * isset loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalPrograms($index)
    {
        return isset($this->loyalPrograms[$index]);
    }

    /**
     * unset loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalPrograms($index)
    {
        unset($this->loyalPrograms[$index]);
    }

    /**
     * Gets as loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     */
    public function getLoyalPrograms()
    {
        return $this->loyalPrograms;
    }

    /**
     * Sets a new loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[] $loyalPrograms
     * @return self
     */
    public function setLoyalPrograms(array $loyalPrograms = null)
    {
        $this->loyalPrograms = $loyalPrograms;
        return $this;
    }

    /**
     * Adds as award
     *
     * A collection of Award elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType $award
     */
    public function addToAwards(\Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType $award)
    {
        $this->awards[] = $award;
        return $this;
    }

    /**
     * isset awards
     *
     * A collection of Award elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwards($index)
    {
        return isset($this->awards[$index]);
    }

    /**
     * unset awards
     *
     * A collection of Award elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwards($index)
    {
        unset($this->awards[$index]);
    }

    /**
     * Gets as awards
     *
     * A collection of Award elements.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[]
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Sets a new awards
     *
     * A collection of Award elements.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[] $awards
     * @return self
     */
    public function setAwards(array $awards = null)
    {
        $this->awards = $awards;
        return $this;
    }

    /**
     * Adds as partnerInfo
     *
     * Collection of PartnerInfo.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo
     */
    public function addToPartnerInfos(\Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo)
    {
        $this->partnerInfos[] = $partnerInfo;
        return $this;
    }

    /**
     * isset partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartnerInfos($index)
    {
        return isset($this->partnerInfos[$index]);
    }

    /**
     * unset partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartnerInfos($index)
    {
        unset($this->partnerInfos[$index]);
    }

    /**
     * Gets as partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     */
    public function getPartnerInfos()
    {
        return $this->partnerInfos;
    }

    /**
     * Sets a new partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[] $partnerInfos
     * @return self
     */
    public function setPartnerInfos(array $partnerInfos = null)
    {
        $this->partnerInfos = $partnerInfos;
        return $this;
    }

    /**
     * Adds as description
     *
     * Collection of affiliation descriptions.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescriptions(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }
}

