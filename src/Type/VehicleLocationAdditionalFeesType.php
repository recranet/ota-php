<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleLocationAdditionalFeesType
 *
 * The Vehicle Location Additional Fees Type is used to define information on additional fees, taxes and surcharges that are included in the cost of a rental, when renting from this facility. Different facilities are required to impose different fees and surcharges based upon location and local laws.
 * XSD Type: VehicleLocationAdditionalFeesType
 */
class VehicleLocationAdditionalFeesType
{
    /**
     * Information on additional taxes that may apply to the rental.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\TaxesAType $taxes
     */
    private $taxes = null;

    /**
     * Information on additional fees that may apply to the rental.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\FeesAType $fees
     */
    private $fees = null;

    /**
     * Information on additional surcharges that may apply to the rental.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\SurchargesAType $surcharges
     */
    private $surcharges = null;

    /**
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType $miscellaneousCharges
     */
    private $miscellaneousCharges = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as taxes
     *
     * Information on additional taxes that may apply to the rental.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\TaxesAType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Information on additional taxes that may apply to the rental.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\TaxesAType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\Type\VehicleLocationAdditionalFeesType\TaxesAType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as fees
     *
     * Information on additional fees that may apply to the rental.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\FeesAType
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Information on additional fees that may apply to the rental.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\FeesAType $fees
     * @return self
     */
    public function setFees(?\Recranet\OTA\Type\VehicleLocationAdditionalFeesType\FeesAType $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as surcharges
     *
     * Information on additional surcharges that may apply to the rental.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\SurchargesAType
     */
    public function getSurcharges()
    {
        return $this->surcharges;
    }

    /**
     * Sets a new surcharges
     *
     * Information on additional surcharges that may apply to the rental.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\SurchargesAType $surcharges
     * @return self
     */
    public function setSurcharges(?\Recranet\OTA\Type\VehicleLocationAdditionalFeesType\SurchargesAType $surcharges = null)
    {
        $this->surcharges = $surcharges;
        return $this;
    }

    /**
     * Gets as miscellaneousCharges
     *
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType
     */
    public function getMiscellaneousCharges()
    {
        return $this->miscellaneousCharges;
    }

    /**
     * Sets a new miscellaneousCharges
     *
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType $miscellaneousCharges
     * @return self
     */
    public function setMiscellaneousCharges(?\Recranet\OTA\Type\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType $miscellaneousCharges = null)
    {
        $this->miscellaneousCharges = $miscellaneousCharges;
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

