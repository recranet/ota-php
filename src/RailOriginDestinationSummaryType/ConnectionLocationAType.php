<?php

namespace Recranet\OTA\RailOriginDestinationSummaryType;

/**
 * Class representing ConnectionLocationAType
 */
class ConnectionLocationAType
{
    /**
     * A code used to identify a location.
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @var bool $multiCityStationInd
     */
    private $multiCityStationInd = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @var \Recranet\OTA\CompanyNamePrefType[] $operatorPref
     */
    private $operatorPref = [
        
    ];

    /**
     * Gets as locationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * A code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @return bool
     */
    public function getMultiCityStationInd()
    {
        return $this->multiCityStationInd;
    }

    /**
     * Sets a new multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be considered.
     *
     * @param bool $multiCityStationInd
     * @return self
     */
    public function setMultiCityStationInd($multiCityStationInd)
    {
        $this->multiCityStationInd = $multiCityStationInd;
        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Adds as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNamePrefType $operatorPref
     */
    public function addToOperatorPref(\Recranet\OTA\CompanyNamePrefType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;
        return $this;
    }

    /**
     * isset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @return \Recranet\OTA\CompanyNamePrefType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param \Recranet\OTA\CompanyNamePrefType[] $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref = null)
    {
        $this->operatorPref = $operatorPref;
        return $this;
    }
}

