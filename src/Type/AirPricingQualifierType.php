<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirPricingQualifierType
 *
 * Additional pricing information, including negotiated fares, restrictions, promotions and tax exemptions.
 * XSD Type: AirPricingQualifierType
 */
class AirPricingQualifierType
{
    /**
     * The age qualifying code of the traveler. Use an item from the OpenTravel Age Qualifying Code (AQC) code list.
     * (Reference) http://www.opentraveldevelopersnetwork.com/Public_OpenTravel_Code_List.php
     *
     * @var string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Specifies a fare related designator.
     *
     * @var string $inputTicketDesigCode
     */
    private $inputTicketDesigCode = null;

    /**
     * A code to uniquely identify a fare account.
     *
     * @var string $accountCode
     */
    private $accountCode = null;

    /**
     * Advanced purchase and fare penalty indicators.
     *
     * @var \Recranet\OTA\Type\AirPricingQualifierType\RestrictionsAType $restrictions
     */
    private $restrictions = null;

    /**
     * Tax exemption criteria.
     *
     * @var \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType $taxExemption
     */
    private $taxExemption = null;

    /**
     * A promotion code with associated airline code.
     *
     * @var \Recranet\OTA\Type\AirPricingQualifierType\PromotionCodeAType $promotionCode
     */
    private $promotionCode = null;

    /**
     * Gets as ageQualifyingCode
     *
     * The age qualifying code of the traveler. Use an item from the OpenTravel Age Qualifying Code (AQC) code list.
     * (Reference) http://www.opentraveldevelopersnetwork.com/Public_OpenTravel_Code_List.php
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * The age qualifying code of the traveler. Use an item from the OpenTravel Age Qualifying Code (AQC) code list.
     * (Reference) http://www.opentraveldevelopersnetwork.com/Public_OpenTravel_Code_List.php
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }

    /**
     * Gets as inputTicketDesigCode
     *
     * Specifies a fare related designator.
     *
     * @return string
     */
    public function getInputTicketDesigCode()
    {
        return $this->inputTicketDesigCode;
    }

    /**
     * Sets a new inputTicketDesigCode
     *
     * Specifies a fare related designator.
     *
     * @param string $inputTicketDesigCode
     * @return self
     */
    public function setInputTicketDesigCode($inputTicketDesigCode)
    {
        $this->inputTicketDesigCode = $inputTicketDesigCode;
        return $this;
    }

    /**
     * Gets as accountCode
     *
     * A code to uniquely identify a fare account.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * A code to uniquely identify a fare account.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * Gets as restrictions
     *
     * Advanced purchase and fare penalty indicators.
     *
     * @return \Recranet\OTA\Type\AirPricingQualifierType\RestrictionsAType
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * Advanced purchase and fare penalty indicators.
     *
     * @param \Recranet\OTA\Type\AirPricingQualifierType\RestrictionsAType $restrictions
     * @return self
     */
    public function setRestrictions(?\Recranet\OTA\Type\AirPricingQualifierType\RestrictionsAType $restrictions = null)
    {
        $this->restrictions = $restrictions;
        return $this;
    }

    /**
     * Gets as taxExemption
     *
     * Tax exemption criteria.
     *
     * @return \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType
     */
    public function getTaxExemption()
    {
        return $this->taxExemption;
    }

    /**
     * Sets a new taxExemption
     *
     * Tax exemption criteria.
     *
     * @param \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType $taxExemption
     * @return self
     */
    public function setTaxExemption(?\Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType $taxExemption = null)
    {
        $this->taxExemption = $taxExemption;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * A promotion code with associated airline code.
     *
     * @return \Recranet\OTA\Type\AirPricingQualifierType\PromotionCodeAType
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * A promotion code with associated airline code.
     *
     * @param \Recranet\OTA\Type\AirPricingQualifierType\PromotionCodeAType $promotionCode
     * @return self
     */
    public function setPromotionCode(?\Recranet\OTA\Type\AirPricingQualifierType\PromotionCodeAType $promotionCode = null)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }
}

