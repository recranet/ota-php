<?php

namespace Recranet\OTA\Type\AirPricingQualifierType;

/**
 * Class representing TaxExemptionAType
 */
class TaxExemptionAType
{
    /**
     * If true, exclude taxes from all priced offers.
     *
     * @var bool $exemptAllInd
     */
    private $exemptAllInd = null;

    /**
     * The country code for tax exemption in ISO 3166 encoding.
     * ISO 3166 Alpha-3 Country Codes: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * If this code is entered, it overrides the TicketingCityCode.
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * A province code for tax exemption.
     *
     * @var string $provinceCode
     */
    private $provinceCode = null;

    /**
     * A government body that's tax exempt.
     *
     * @var string $governmentBody
     */
    private $governmentBody = null;

    /**
     * Exemption tax code(s) and types.
     *
     * @var \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType[] $taxCode
     */
    private $taxCode = [
        
    ];

    /**
     * Gets as exemptAllInd
     *
     * If true, exclude taxes from all priced offers.
     *
     * @return bool
     */
    public function getExemptAllInd()
    {
        return $this->exemptAllInd;
    }

    /**
     * Sets a new exemptAllInd
     *
     * If true, exclude taxes from all priced offers.
     *
     * @param bool $exemptAllInd
     * @return self
     */
    public function setExemptAllInd($exemptAllInd)
    {
        $this->exemptAllInd = $exemptAllInd;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country code for tax exemption in ISO 3166 encoding.
     * ISO 3166 Alpha-3 Country Codes: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * If this code is entered, it overrides the TicketingCityCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country code for tax exemption in ISO 3166 encoding.
     * ISO 3166 Alpha-3 Country Codes: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * If this code is entered, it overrides the TicketingCityCode.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as provinceCode
     *
     * A province code for tax exemption.
     *
     * @return string
     */
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * Sets a new provinceCode
     *
     * A province code for tax exemption.
     *
     * @param string $provinceCode
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }

    /**
     * Gets as governmentBody
     *
     * A government body that's tax exempt.
     *
     * @return string
     */
    public function getGovernmentBody()
    {
        return $this->governmentBody;
    }

    /**
     * Sets a new governmentBody
     *
     * A government body that's tax exempt.
     *
     * @param string $governmentBody
     * @return self
     */
    public function setGovernmentBody($governmentBody)
    {
        $this->governmentBody = $governmentBody;
        return $this;
    }

    /**
     * Adds as taxCode
     *
     * Exemption tax code(s) and types.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType $taxCode
     */
    public function addToTaxCode(\Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType $taxCode)
    {
        $this->taxCode[] = $taxCode;
        return $this;
    }

    /**
     * isset taxCode
     *
     * Exemption tax code(s) and types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCode($index)
    {
        return isset($this->taxCode[$index]);
    }

    /**
     * unset taxCode
     *
     * Exemption tax code(s) and types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCode($index)
    {
        unset($this->taxCode[$index]);
    }

    /**
     * Gets as taxCode
     *
     * Exemption tax code(s) and types.
     *
     * @return \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType[]
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * Exemption tax code(s) and types.
     *
     * @param \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType[] $taxCode
     * @return self
     */
    public function setTaxCode(array $taxCode = null)
    {
        $this->taxCode = $taxCode;
        return $this;
    }
}

