<?php

namespace Recranet\OTA;

/**
 * Class representing ETFareInfoType
 *
 * Account code, net reporting code, nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, statistical code and tour code.
 * XSD Type: ET_FareInfo
 */
class ETFareInfoType
{
    /**
     * A code indicating the transaction is subject to a net reporting arrangement.
     *
     * @var string $netReportingCode
     */
    private $netReportingCode = null;

    /**
     * Used for domestic or international sales differentiation.
     *
     * @var string $statisticalCode
     */
    private $statisticalCode = null;

    /**
     * The applicable tour code.
     *
     * @var string $tourCode
     */
    private $tourCode = null;

    /**
     * The country code where the ticket is issued.
     *
     * @var string $countryCodeOfIssue
     */
    private $countryCodeOfIssue = null;

    /**
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @var \Recranet\OTA\ETFareInfoType\WaiverAType[] $waiver
     */
    private $waiver = [
        
    ];

    /**
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @var \Recranet\OTA\ETFareInfoType\RuleIndicatorAType[] $ruleIndicator
     */
    private $ruleIndicator = [
        
    ];

    /**
     * Gets as netReportingCode
     *
     * A code indicating the transaction is subject to a net reporting arrangement.
     *
     * @return string
     */
    public function getNetReportingCode()
    {
        return $this->netReportingCode;
    }

    /**
     * Sets a new netReportingCode
     *
     * A code indicating the transaction is subject to a net reporting arrangement.
     *
     * @param string $netReportingCode
     * @return self
     */
    public function setNetReportingCode($netReportingCode)
    {
        $this->netReportingCode = $netReportingCode;
        return $this;
    }

    /**
     * Gets as statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @return string
     */
    public function getStatisticalCode()
    {
        return $this->statisticalCode;
    }

    /**
     * Sets a new statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @param string $statisticalCode
     * @return self
     */
    public function setStatisticalCode($statisticalCode)
    {
        $this->statisticalCode = $statisticalCode;
        return $this;
    }

    /**
     * Gets as tourCode
     *
     * The applicable tour code.
     *
     * @return string
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * The applicable tour code.
     *
     * @param string $tourCode
     * @return self
     */
    public function setTourCode($tourCode)
    {
        $this->tourCode = $tourCode;
        return $this;
    }

    /**
     * Gets as countryCodeOfIssue
     *
     * The country code where the ticket is issued.
     *
     * @return string
     */
    public function getCountryCodeOfIssue()
    {
        return $this->countryCodeOfIssue;
    }

    /**
     * Sets a new countryCodeOfIssue
     *
     * The country code where the ticket is issued.
     *
     * @param string $countryCodeOfIssue
     * @return self
     */
    public function setCountryCodeOfIssue($countryCodeOfIssue)
    {
        $this->countryCodeOfIssue = $countryCodeOfIssue;
        return $this;
    }

    /**
     * Adds as waiver
     *
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @return self
     * @param \Recranet\OTA\ETFareInfoType\WaiverAType $waiver
     */
    public function addToWaiver(\Recranet\OTA\ETFareInfoType\WaiverAType $waiver)
    {
        $this->waiver[] = $waiver;
        return $this;
    }

    /**
     * isset waiver
     *
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWaiver($index)
    {
        return isset($this->waiver[$index]);
    }

    /**
     * unset waiver
     *
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWaiver($index)
    {
        unset($this->waiver[$index]);
    }

    /**
     * Gets as waiver
     *
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @return \Recranet\OTA\ETFareInfoType\WaiverAType[]
     */
    public function getWaiver()
    {
        return $this->waiver;
    }

    /**
     * Sets a new waiver
     *
     * A code assigned by the validating carrier that allows fare rule modification or override.
     *
     * @param \Recranet\OTA\ETFareInfoType\WaiverAType[] $waiver
     * @return self
     */
    public function setWaiver(array $waiver = null)
    {
        $this->waiver = $waiver;
        return $this;
    }

    /**
     * Adds as ruleIndicator
     *
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @return self
     * @param \Recranet\OTA\ETFareInfoType\RuleIndicatorAType $ruleIndicator
     */
    public function addToRuleIndicator(\Recranet\OTA\ETFareInfoType\RuleIndicatorAType $ruleIndicator)
    {
        $this->ruleIndicator[] = $ruleIndicator;
        return $this;
    }

    /**
     * isset ruleIndicator
     *
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRuleIndicator($index)
    {
        return isset($this->ruleIndicator[$index]);
    }

    /**
     * unset ruleIndicator
     *
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRuleIndicator($index)
    {
        unset($this->ruleIndicator[$index]);
    }

    /**
     * Gets as ruleIndicator
     *
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @return \Recranet\OTA\ETFareInfoType\RuleIndicatorAType[]
     */
    public function getRuleIndicator()
    {
        return $this->ruleIndicator;
    }

    /**
     * Sets a new ruleIndicator
     *
     * System generated data indicating the ticket fare is an ATPCO Category number fare.
     *
     * @param \Recranet\OTA\ETFareInfoType\RuleIndicatorAType[] $ruleIndicator
     * @return self
     */
    public function setRuleIndicator(array $ruleIndicator = null)
    {
        $this->ruleIndicator = $ruleIndicator;
        return $this;
    }
}

