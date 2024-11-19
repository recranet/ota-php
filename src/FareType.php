<?php

namespace Recranet\OTA;

/**
 * Class representing FareType
 *
 * Holds a base fare, tax, total and currency information on a price
 * XSD Type: FareType
 */
class FareType
{
    /**
     * If true, this is a negotiated fare.
     *
     * @var bool $negotiatedFareInd
     */
    private $negotiatedFareInd = null;

    /**
     * A code used to identify the negotiated fare.
     *
     * @var string $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * The ATPCO category code for this negotiated fare.
     *
     * @var string $aTPCONegCategoryCode
     */
    private $aTPCONegCategoryCode = null;

    /**
     * If true, this is a private fare.
     *
     * @var bool $privateFareInd
     */
    private $privateFareInd = null;

    /**
     * The code used to identify the private fare.
     *
     * @var string $privateFareCode
     */
    private $privateFareCode = null;

    /**
     * The ATPCO category for this private fare.
     *
     * @var string $aTPCOPrvCategoryCode
     */
    private $aTPCOPrvCategoryCode = null;

    /**
     * The ATPCO cargo tariff rule.
     *
     * @var string $aTPCOTariff
     */
    private $aTPCOTariff = null;

    /**
     * The ATPCO rule associated with the cargo tariff.
     *
     * @var string $aTPCORule
     */
    private $aTPCORule = null;

    /**
     * Specifies a discount code applicable to the fare.
     *
     * @var string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * Specifies a fare related designator.
     *
     * @var string $inputTicketDesigCode
     */
    private $inputTicketDesigCode = null;

    /**
     * The total number of trips in this itinerary.
     *
     * @var int $totalNbrTrips
     */
    private $totalNbrTrips = null;

    /**
     * The total number of passenger type codes in this priced itinerary.
     *
     * @var int $totalNbrPTC
     */
    private $totalNbrPTC = null;

    /**
     * Price of the inventory excluding taxes and fees.
     *
     * @var \Recranet\OTA\FareType\BaseFareAType $baseFare
     */
    private $baseFare = null;

    /**
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @var \Recranet\OTA\FareType\EquivFareAType[] $equivFare
     */
    private $equivFare = [
        
    ];

    /**
     * This is a collection of Taxes
     *
     * @var \Recranet\OTA\FareType\TaxesAType $taxes
     */
    private $taxes = null;

    /**
     * This is a collection of Fees.
     *
     * @var \Recranet\OTA\FareType\FeesAType $fees
     */
    private $fees = null;

    /**
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @var \Recranet\OTA\FareType\TotalFareAType $totalFare
     */
    private $totalFare = null;

    /**
     * Should not contain unstructured FareCalc data.
     *
     * @var \Recranet\OTA\FareType\FareConstructionAType $fareConstruction
     */
    private $fareConstruction = null;

    /**
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @var \Recranet\OTA\FareType\UnstructuredFareCalcAType $unstructuredFareCalc
     */
    private $unstructuredFareCalc = null;

    /**
     * Checked baggage allowance for the fare.
     *
     * @var \Recranet\OTA\FareType\FareBaggageAllowanceAType[] $fareBaggageAllowance
     */
    private $fareBaggageAllowance = [
        
    ];

    /**
     * The tour code associated with the fare.
     *
     * @var \Recranet\OTA\FareType\TourCodeAType $tourCode
     */
    private $tourCode = null;

    /**
     * Free flow remarks for the fare breakdown.
     *
     * @var string[] $remark
     */
    private $remark = [
        
    ];

    /**
     * The original ticket/document issue information.
     *
     * @var \Recranet\OTA\FareType\OriginalIssueInfoAType $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * Exchange ticket/document information.
     *
     * @var \Recranet\OTA\FareType\ExchangeInfoAType $exchangeInfo
     */
    private $exchangeInfo = null;

    /**
     * Collection for discounts.
     *
     * @var \Recranet\OTA\FareType\DiscountsAType\DiscountAType[] $discounts
     */
    private $discounts = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @return bool
     */
    public function getNegotiatedFareInd()
    {
        return $this->negotiatedFareInd;
    }

    /**
     * Sets a new negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @param bool $negotiatedFareInd
     * @return self
     */
    public function setNegotiatedFareInd($negotiatedFareInd)
    {
        $this->negotiatedFareInd = $negotiatedFareInd;
        return $this;
    }

    /**
     * Gets as negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @return string
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @param string $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode($negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;
        return $this;
    }

    /**
     * Gets as aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @return string
     */
    public function getATPCONegCategoryCode()
    {
        return $this->aTPCONegCategoryCode;
    }

    /**
     * Sets a new aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @param string $aTPCONegCategoryCode
     * @return self
     */
    public function setATPCONegCategoryCode($aTPCONegCategoryCode)
    {
        $this->aTPCONegCategoryCode = $aTPCONegCategoryCode;
        return $this;
    }

    /**
     * Gets as privateFareInd
     *
     * If true, this is a private fare.
     *
     * @return bool
     */
    public function getPrivateFareInd()
    {
        return $this->privateFareInd;
    }

    /**
     * Sets a new privateFareInd
     *
     * If true, this is a private fare.
     *
     * @param bool $privateFareInd
     * @return self
     */
    public function setPrivateFareInd($privateFareInd)
    {
        $this->privateFareInd = $privateFareInd;
        return $this;
    }

    /**
     * Gets as privateFareCode
     *
     * The code used to identify the private fare.
     *
     * @return string
     */
    public function getPrivateFareCode()
    {
        return $this->privateFareCode;
    }

    /**
     * Sets a new privateFareCode
     *
     * The code used to identify the private fare.
     *
     * @param string $privateFareCode
     * @return self
     */
    public function setPrivateFareCode($privateFareCode)
    {
        $this->privateFareCode = $privateFareCode;
        return $this;
    }

    /**
     * Gets as aTPCOPrvCategoryCode
     *
     * The ATPCO category for this private fare.
     *
     * @return string
     */
    public function getATPCOPrvCategoryCode()
    {
        return $this->aTPCOPrvCategoryCode;
    }

    /**
     * Sets a new aTPCOPrvCategoryCode
     *
     * The ATPCO category for this private fare.
     *
     * @param string $aTPCOPrvCategoryCode
     * @return self
     */
    public function setATPCOPrvCategoryCode($aTPCOPrvCategoryCode)
    {
        $this->aTPCOPrvCategoryCode = $aTPCOPrvCategoryCode;
        return $this;
    }

    /**
     * Gets as aTPCOTariff
     *
     * The ATPCO cargo tariff rule.
     *
     * @return string
     */
    public function getATPCOTariff()
    {
        return $this->aTPCOTariff;
    }

    /**
     * Sets a new aTPCOTariff
     *
     * The ATPCO cargo tariff rule.
     *
     * @param string $aTPCOTariff
     * @return self
     */
    public function setATPCOTariff($aTPCOTariff)
    {
        $this->aTPCOTariff = $aTPCOTariff;
        return $this;
    }

    /**
     * Gets as aTPCORule
     *
     * The ATPCO rule associated with the cargo tariff.
     *
     * @return string
     */
    public function getATPCORule()
    {
        return $this->aTPCORule;
    }

    /**
     * Sets a new aTPCORule
     *
     * The ATPCO rule associated with the cargo tariff.
     *
     * @param string $aTPCORule
     * @return self
     */
    public function setATPCORule($aTPCORule)
    {
        $this->aTPCORule = $aTPCORule;
        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;
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
     * Gets as totalNbrTrips
     *
     * The total number of trips in this itinerary.
     *
     * @return int
     */
    public function getTotalNbrTrips()
    {
        return $this->totalNbrTrips;
    }

    /**
     * Sets a new totalNbrTrips
     *
     * The total number of trips in this itinerary.
     *
     * @param int $totalNbrTrips
     * @return self
     */
    public function setTotalNbrTrips($totalNbrTrips)
    {
        $this->totalNbrTrips = $totalNbrTrips;
        return $this;
    }

    /**
     * Gets as totalNbrPTC
     *
     * The total number of passenger type codes in this priced itinerary.
     *
     * @return int
     */
    public function getTotalNbrPTC()
    {
        return $this->totalNbrPTC;
    }

    /**
     * Sets a new totalNbrPTC
     *
     * The total number of passenger type codes in this priced itinerary.
     *
     * @param int $totalNbrPTC
     * @return self
     */
    public function setTotalNbrPTC($totalNbrPTC)
    {
        $this->totalNbrPTC = $totalNbrPTC;
        return $this;
    }

    /**
     * Gets as baseFare
     *
     * Price of the inventory excluding taxes and fees.
     *
     * @return \Recranet\OTA\FareType\BaseFareAType
     */
    public function getBaseFare()
    {
        return $this->baseFare;
    }

    /**
     * Sets a new baseFare
     *
     * Price of the inventory excluding taxes and fees.
     *
     * @param \Recranet\OTA\FareType\BaseFareAType $baseFare
     * @return self
     */
    public function setBaseFare(?\Recranet\OTA\FareType\BaseFareAType $baseFare = null)
    {
        $this->baseFare = $baseFare;
        return $this;
    }

    /**
     * Adds as equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @return self
     * @param \Recranet\OTA\FareType\EquivFareAType $equivFare
     */
    public function addToEquivFare(\Recranet\OTA\FareType\EquivFareAType $equivFare)
    {
        $this->equivFare[] = $equivFare;
        return $this;
    }

    /**
     * isset equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquivFare($index)
    {
        return isset($this->equivFare[$index]);
    }

    /**
     * unset equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquivFare($index)
    {
        unset($this->equivFare[$index]);
    }

    /**
     * Gets as equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @return \Recranet\OTA\FareType\EquivFareAType[]
     */
    public function getEquivFare()
    {
        return $this->equivFare;
    }

    /**
     * Sets a new equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param \Recranet\OTA\FareType\EquivFareAType[] $equivFare
     * @return self
     */
    public function setEquivFare(array $equivFare = null)
    {
        $this->equivFare = $equivFare;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * This is a collection of Taxes
     *
     * @return \Recranet\OTA\FareType\TaxesAType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * This is a collection of Taxes
     *
     * @param \Recranet\OTA\FareType\TaxesAType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\FareType\TaxesAType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as fees
     *
     * This is a collection of Fees.
     *
     * @return \Recranet\OTA\FareType\FeesAType
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * This is a collection of Fees.
     *
     * @param \Recranet\OTA\FareType\FeesAType $fees
     * @return self
     */
    public function setFees(?\Recranet\OTA\FareType\FeesAType $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as totalFare
     *
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @return \Recranet\OTA\FareType\TotalFareAType
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @param \Recranet\OTA\FareType\TotalFareAType $totalFare
     * @return self
     */
    public function setTotalFare(?\Recranet\OTA\FareType\TotalFareAType $totalFare = null)
    {
        $this->totalFare = $totalFare;
        return $this;
    }

    /**
     * Gets as fareConstruction
     *
     * Should not contain unstructured FareCalc data.
     *
     * @return \Recranet\OTA\FareType\FareConstructionAType
     */
    public function getFareConstruction()
    {
        return $this->fareConstruction;
    }

    /**
     * Sets a new fareConstruction
     *
     * Should not contain unstructured FareCalc data.
     *
     * @param \Recranet\OTA\FareType\FareConstructionAType $fareConstruction
     * @return self
     */
    public function setFareConstruction(?\Recranet\OTA\FareType\FareConstructionAType $fareConstruction = null)
    {
        $this->fareConstruction = $fareConstruction;
        return $this;
    }

    /**
     * Gets as unstructuredFareCalc
     *
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @return \Recranet\OTA\FareType\UnstructuredFareCalcAType
     */
    public function getUnstructuredFareCalc()
    {
        return $this->unstructuredFareCalc;
    }

    /**
     * Sets a new unstructuredFareCalc
     *
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @param \Recranet\OTA\FareType\UnstructuredFareCalcAType $unstructuredFareCalc
     * @return self
     */
    public function setUnstructuredFareCalc(?\Recranet\OTA\FareType\UnstructuredFareCalcAType $unstructuredFareCalc = null)
    {
        $this->unstructuredFareCalc = $unstructuredFareCalc;
        return $this;
    }

    /**
     * Adds as fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @return self
     * @param \Recranet\OTA\FareType\FareBaggageAllowanceAType $fareBaggageAllowance
     */
    public function addToFareBaggageAllowance(\Recranet\OTA\FareType\FareBaggageAllowanceAType $fareBaggageAllowance)
    {
        $this->fareBaggageAllowance[] = $fareBaggageAllowance;
        return $this;
    }

    /**
     * isset fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareBaggageAllowance($index)
    {
        return isset($this->fareBaggageAllowance[$index]);
    }

    /**
     * unset fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareBaggageAllowance($index)
    {
        unset($this->fareBaggageAllowance[$index]);
    }

    /**
     * Gets as fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @return \Recranet\OTA\FareType\FareBaggageAllowanceAType[]
     */
    public function getFareBaggageAllowance()
    {
        return $this->fareBaggageAllowance;
    }

    /**
     * Sets a new fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param \Recranet\OTA\FareType\FareBaggageAllowanceAType[] $fareBaggageAllowance
     * @return self
     */
    public function setFareBaggageAllowance(array $fareBaggageAllowance = null)
    {
        $this->fareBaggageAllowance = $fareBaggageAllowance;
        return $this;
    }

    /**
     * Gets as tourCode
     *
     * The tour code associated with the fare.
     *
     * @return \Recranet\OTA\FareType\TourCodeAType
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * The tour code associated with the fare.
     *
     * @param \Recranet\OTA\FareType\TourCodeAType $tourCode
     * @return self
     */
    public function setTourCode(?\Recranet\OTA\FareType\TourCodeAType $tourCode = null)
    {
        $this->tourCode = $tourCode;
        return $this;
    }

    /**
     * Adds as remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @return self
     * @param string $remark
     */
    public function addToRemark($remark)
    {
        $this->remark[] = $remark;
        return $this;
    }

    /**
     * isset remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @return string[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark(array $remark = null)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Recranet\OTA\FareType\OriginalIssueInfoAType
     */
    public function getOriginalIssueInfo()
    {
        return $this->originalIssueInfo;
    }

    /**
     * Sets a new originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @param \Recranet\OTA\FareType\OriginalIssueInfoAType $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(?\Recranet\OTA\FareType\OriginalIssueInfoAType $originalIssueInfo = null)
    {
        $this->originalIssueInfo = $originalIssueInfo;
        return $this;
    }

    /**
     * Gets as exchangeInfo
     *
     * Exchange ticket/document information.
     *
     * @return \Recranet\OTA\FareType\ExchangeInfoAType
     */
    public function getExchangeInfo()
    {
        return $this->exchangeInfo;
    }

    /**
     * Sets a new exchangeInfo
     *
     * Exchange ticket/document information.
     *
     * @param \Recranet\OTA\FareType\ExchangeInfoAType $exchangeInfo
     * @return self
     */
    public function setExchangeInfo(?\Recranet\OTA\FareType\ExchangeInfoAType $exchangeInfo = null)
    {
        $this->exchangeInfo = $exchangeInfo;
        return $this;
    }

    /**
     * Adds as discount
     *
     * Collection for discounts.
     *
     * @return self
     * @param \Recranet\OTA\FareType\DiscountsAType\DiscountAType $discount
     */
    public function addToDiscounts(\Recranet\OTA\FareType\DiscountsAType\DiscountAType $discount)
    {
        $this->discounts[] = $discount;
        return $this;
    }

    /**
     * isset discounts
     *
     * Collection for discounts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts
     *
     * Collection for discounts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscounts($index)
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts
     *
     * Collection for discounts.
     *
     * @return \Recranet\OTA\FareType\DiscountsAType\DiscountAType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * Collection for discounts.
     *
     * @param \Recranet\OTA\FareType\DiscountsAType\DiscountAType[] $discounts
     * @return self
     */
    public function setDiscounts(array $discounts = null)
    {
        $this->discounts = $discounts;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

