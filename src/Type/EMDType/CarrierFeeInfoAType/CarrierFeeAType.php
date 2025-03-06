<?php

namespace Recranet\OTA\Type\EMDType\CarrierFeeInfoAType;

/**
 * Class representing CarrierFeeAType
 */
class CarrierFeeAType
{
    /**
     * The type of carrier fee, i.e., related to booking or ticketing or service. Refer to OpenTravel Code List "EMD Carrier Fee Type."
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A sequential number representing the order of the fare comonents within the fare component calculation.
     *
     * @var int $number
     */
    private $number = null;

    /**
     * The tariff number where the fare data is filed.
     *
     * @var string $tariffNumber
     */
    private $tariffNumber = null;

    /**
     * The rule number within the tariff where the fare data is filed.
     *
     * @var string $ruleNumber
     */
    private $ruleNumber = null;

    /**
     * System generated data indicating the ticketed fare is from a specific rule filed fare sent by the issuing system.
     *
     * @var string $ruleCode
     */
    private $ruleCode = null;

    /**
     * Used to provide the company common name.
     *
     * @var string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @var string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.
     * Example: us
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * The fare class code that must be used when matching alternate cateory data as specifed by the carrier fee fare rule code, carrier fee rule number, and carrier fee tariff number fields.
     *
     * @var string $fareClassCode
     */
    private $fareClassCode = null;

    /**
     * The identifier reflecting the method of pricing for the carrier fee.
     *
     * @var string $reportingCode
     */
    private $reportingCode = null;

    /**
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @var \Recranet\OTA\Type\EMDType\CarrierFeeInfoAType\CarrierFeeAType\FeeAmountAType[] $feeAmount
     */
    private $feeAmount = [
        
    ];

    /**
     * Gets as type
     *
     * The type of carrier fee, i.e., related to booking or ticketing or service. Refer to OpenTravel Code List "EMD Carrier Fee Type."
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of carrier fee, i.e., related to booking or ticketing or service. Refer to OpenTravel Code List "EMD Carrier Fee Type."
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as number
     *
     * A sequential number representing the order of the fare comonents within the fare component calculation.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A sequential number representing the order of the fare comonents within the fare component calculation.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as tariffNumber
     *
     * The tariff number where the fare data is filed.
     *
     * @return string
     */
    public function getTariffNumber()
    {
        return $this->tariffNumber;
    }

    /**
     * Sets a new tariffNumber
     *
     * The tariff number where the fare data is filed.
     *
     * @param string $tariffNumber
     * @return self
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;
        return $this;
    }

    /**
     * Gets as ruleNumber
     *
     * The rule number within the tariff where the fare data is filed.
     *
     * @return string
     */
    public function getRuleNumber()
    {
        return $this->ruleNumber;
    }

    /**
     * Sets a new ruleNumber
     *
     * The rule number within the tariff where the fare data is filed.
     *
     * @param string $ruleNumber
     * @return self
     */
    public function setRuleNumber($ruleNumber)
    {
        $this->ruleNumber = $ruleNumber;
        return $this;
    }

    /**
     * Gets as ruleCode
     *
     * System generated data indicating the ticketed fare is from a specific rule filed fare sent by the issuing system.
     *
     * @return string
     */
    public function getRuleCode()
    {
        return $this->ruleCode;
    }

    /**
     * Sets a new ruleCode
     *
     * System generated data indicating the ticketed fare is from a specific rule filed fare sent by the issuing system.
     *
     * @param string $ruleCode
     * @return self
     */
    public function setRuleCode($ruleCode)
    {
        $this->ruleCode = $ruleCode;
        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;
        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;
        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a company by the company code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
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
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
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
     * Gets as countryCode
     *
     * The country location of the company headquarters.
     * Example: us
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
     * The country location of the company headquarters.
     * Example: us
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
     * Gets as fareClassCode
     *
     * The fare class code that must be used when matching alternate cateory data as specifed by the carrier fee fare rule code, carrier fee rule number, and carrier fee tariff number fields.
     *
     * @return string
     */
    public function getFareClassCode()
    {
        return $this->fareClassCode;
    }

    /**
     * Sets a new fareClassCode
     *
     * The fare class code that must be used when matching alternate cateory data as specifed by the carrier fee fare rule code, carrier fee rule number, and carrier fee tariff number fields.
     *
     * @param string $fareClassCode
     * @return self
     */
    public function setFareClassCode($fareClassCode)
    {
        $this->fareClassCode = $fareClassCode;
        return $this;
    }

    /**
     * Gets as reportingCode
     *
     * The identifier reflecting the method of pricing for the carrier fee.
     *
     * @return string
     */
    public function getReportingCode()
    {
        return $this->reportingCode;
    }

    /**
     * Sets a new reportingCode
     *
     * The identifier reflecting the method of pricing for the carrier fee.
     *
     * @param string $reportingCode
     * @return self
     */
    public function setReportingCode($reportingCode)
    {
        $this->reportingCode = $reportingCode;
        return $this;
    }

    /**
     * Adds as feeAmount
     *
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @return self
     * @param \Recranet\OTA\Type\EMDType\CarrierFeeInfoAType\CarrierFeeAType\FeeAmountAType $feeAmount
     */
    public function addToFeeAmount(\Recranet\OTA\Type\EMDType\CarrierFeeInfoAType\CarrierFeeAType\FeeAmountAType $feeAmount)
    {
        $this->feeAmount[] = $feeAmount;
        return $this;
    }

    /**
     * isset feeAmount
     *
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeAmount($index)
    {
        return isset($this->feeAmount[$index]);
    }

    /**
     * unset feeAmount
     *
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeAmount($index)
    {
        unset($this->feeAmount[$index]);
    }

    /**
     * Gets as feeAmount
     *
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @return \Recranet\OTA\Type\EMDType\CarrierFeeInfoAType\CarrierFeeAType\FeeAmountAType[]
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * The type of fee being imposed by a carrier, the amount and other related information.
     *
     * @param \Recranet\OTA\Type\EMDType\CarrierFeeInfoAType\CarrierFeeAType\FeeAmountAType[] $feeAmount
     * @return self
     */
    public function setFeeAmount(array $feeAmount)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }
}

