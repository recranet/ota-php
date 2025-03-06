<?php

namespace Recranet\OTA\Type\EnvironmentalImpactType;

/**
 * Class representing GeneralAType
 */
class GeneralAType
{
    /**
     * Certification credentials available indicator.
     * Example: true
     * Implementer: If true, the property is willing to provide a copy of their certification.
     *
     * @var bool $certificationAvailInd
     */
    private $certificationAvailInd = null;

    /**
     * Guest sensitivity indicator.
     * Example: true
     * Implementer: If true, the property accommodates guests with chemical sensitivities and/or allergies.
     *
     * @var bool $chemicalAllergiesInd
     */
    private $chemicalAllergiesInd = null;

    /**
     * Environmentally responsible cleaning products indicator.
     * Example: true
     * Implementer: If true, the property uses environmentally responsible cleaning products.
     *
     * @var bool $environmentalCleanersInd
     */
    private $environmentalCleanersInd = null;

    /**
     * Linen reuse program indicator.
     * Example: true
     * Implementer: If true, the property has a linen reuse program.
     *
     * @var mixed $linenReuseInd
     */
    private $linenReuseInd = null;

    /**
     * Supplier procurement policy indicator.
     * Example: true
     * Implementer: If true, the property has an environmental procurement policy in place for its suppliers.
     *
     * @var bool $procurementPolicyInd
     */
    private $procurementPolicyInd = null;

    /**
     * Environmental certification program participation description.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $certification
     */
    private $certification = [
        
    ];

    /**
     * Active environmental program description.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $environmental
     */
    private $environmental = [
        
    ];

    /**
     * Gets as certificationAvailInd
     *
     * Certification credentials available indicator.
     * Example: true
     * Implementer: If true, the property is willing to provide a copy of their certification.
     *
     * @return bool
     */
    public function getCertificationAvailInd()
    {
        return $this->certificationAvailInd;
    }

    /**
     * Sets a new certificationAvailInd
     *
     * Certification credentials available indicator.
     * Example: true
     * Implementer: If true, the property is willing to provide a copy of their certification.
     *
     * @param bool $certificationAvailInd
     * @return self
     */
    public function setCertificationAvailInd($certificationAvailInd)
    {
        $this->certificationAvailInd = $certificationAvailInd;
        return $this;
    }

    /**
     * Gets as chemicalAllergiesInd
     *
     * Guest sensitivity indicator.
     * Example: true
     * Implementer: If true, the property accommodates guests with chemical sensitivities and/or allergies.
     *
     * @return bool
     */
    public function getChemicalAllergiesInd()
    {
        return $this->chemicalAllergiesInd;
    }

    /**
     * Sets a new chemicalAllergiesInd
     *
     * Guest sensitivity indicator.
     * Example: true
     * Implementer: If true, the property accommodates guests with chemical sensitivities and/or allergies.
     *
     * @param bool $chemicalAllergiesInd
     * @return self
     */
    public function setChemicalAllergiesInd($chemicalAllergiesInd)
    {
        $this->chemicalAllergiesInd = $chemicalAllergiesInd;
        return $this;
    }

    /**
     * Gets as environmentalCleanersInd
     *
     * Environmentally responsible cleaning products indicator.
     * Example: true
     * Implementer: If true, the property uses environmentally responsible cleaning products.
     *
     * @return bool
     */
    public function getEnvironmentalCleanersInd()
    {
        return $this->environmentalCleanersInd;
    }

    /**
     * Sets a new environmentalCleanersInd
     *
     * Environmentally responsible cleaning products indicator.
     * Example: true
     * Implementer: If true, the property uses environmentally responsible cleaning products.
     *
     * @param bool $environmentalCleanersInd
     * @return self
     */
    public function setEnvironmentalCleanersInd($environmentalCleanersInd)
    {
        $this->environmentalCleanersInd = $environmentalCleanersInd;
        return $this;
    }

    /**
     * Gets as linenReuseInd
     *
     * Linen reuse program indicator.
     * Example: true
     * Implementer: If true, the property has a linen reuse program.
     *
     * @return mixed
     */
    public function getLinenReuseInd()
    {
        return $this->linenReuseInd;
    }

    /**
     * Sets a new linenReuseInd
     *
     * Linen reuse program indicator.
     * Example: true
     * Implementer: If true, the property has a linen reuse program.
     *
     * @param mixed $linenReuseInd
     * @return self
     */
    public function setLinenReuseInd($linenReuseInd)
    {
        $this->linenReuseInd = $linenReuseInd;
        return $this;
    }

    /**
     * Gets as procurementPolicyInd
     *
     * Supplier procurement policy indicator.
     * Example: true
     * Implementer: If true, the property has an environmental procurement policy in place for its suppliers.
     *
     * @return bool
     */
    public function getProcurementPolicyInd()
    {
        return $this->procurementPolicyInd;
    }

    /**
     * Sets a new procurementPolicyInd
     *
     * Supplier procurement policy indicator.
     * Example: true
     * Implementer: If true, the property has an environmental procurement policy in place for its suppliers.
     *
     * @param bool $procurementPolicyInd
     * @return self
     */
    public function setProcurementPolicyInd($procurementPolicyInd)
    {
        $this->procurementPolicyInd = $procurementPolicyInd;
        return $this;
    }

    /**
     * Adds as certification
     *
     * Environmental certification program participation description.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $certification
     */
    public function addToCertification(\Recranet\OTA\Type\ParagraphType $certification)
    {
        $this->certification[] = $certification;
        return $this;
    }

    /**
     * isset certification
     *
     * Environmental certification program participation description.
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
     * Environmental certification program participation description.
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
     * Environmental certification program participation description.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * Environmental certification program participation description.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $certification
     * @return self
     */
    public function setCertification(array $certification = null)
    {
        $this->certification = $certification;
        return $this;
    }

    /**
     * Adds as environmental
     *
     * Active environmental program description.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $environmental
     */
    public function addToEnvironmental(\Recranet\OTA\Type\ParagraphType $environmental)
    {
        $this->environmental[] = $environmental;
        return $this;
    }

    /**
     * isset environmental
     *
     * Active environmental program description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmental($index)
    {
        return isset($this->environmental[$index]);
    }

    /**
     * unset environmental
     *
     * Active environmental program description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmental($index)
    {
        unset($this->environmental[$index]);
    }

    /**
     * Gets as environmental
     *
     * Active environmental program description.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getEnvironmental()
    {
        return $this->environmental;
    }

    /**
     * Sets a new environmental
     *
     * Active environmental program description.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $environmental
     * @return self
     */
    public function setEnvironmental(array $environmental = null)
    {
        $this->environmental = $environmental;
        return $this;
    }
}

