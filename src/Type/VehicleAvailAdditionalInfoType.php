<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAvailAdditionalInfoType
 *
 * The VehicleAvailAdditionalInfoType complex type identifies the data that describes supplemental information made available as part of describing the availability and rate of one or more vehicles.
 * XSD Type: VehicleAvailAdditionalInfoType
 */
class VehicleAvailAdditionalInfoType
{
    /**
     * Chargeable period.
     *
     * @var \DateInterval $chargeablePeriod
     */
    private $chargeablePeriod = null;

    /**
     * A collection of coverages, along with associated price and details.
     *
     * @var \Recranet\OTA\Type\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @var \Recranet\OTA\Type\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as chargeablePeriod
     *
     * Chargeable period.
     *
     * @return \DateInterval
     */
    public function getChargeablePeriod()
    {
        return $this->chargeablePeriod;
    }

    /**
     * Sets a new chargeablePeriod
     *
     * Chargeable period.
     *
     * @param \DateInterval $chargeablePeriod
     * @return self
     */
    public function setChargeablePeriod(\DateInterval $chargeablePeriod)
    {
        $this->chargeablePeriod = $chargeablePeriod;
        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return self
     * @param \Recranet\OTA\Type\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Recranet\OTA\Type\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;
        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return \Recranet\OTA\Type\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param \Recranet\OTA\Type\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages = null)
    {
        $this->pricedCoverages = $pricedCoverages;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @return self
     * @param \Recranet\OTA\Type\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Recranet\OTA\Type\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @return \Recranet\OTA\Type\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @param \Recranet\OTA\Type\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules = null)
    {
        $this->paymentRules = $paymentRules;
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

