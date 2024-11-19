<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleChargePurposeType
 *
 * The VehicleChargePurposeType complex type defines information on a specific charge associated with the rental of a vehicle along with the purpose of the charge.
 * XSD Type: VehicleChargePurposeType
 */
class VehicleChargePurposeType extends VehicleChargeType
{
    /**
     * Refer to OpenTravel Code List Vehicle Charge Purpose Type (VCP).
     *
     * @var string $purpose
     */
    private $purpose = null;

    /**
     * When true, this surcharge or tax is required in the vehicle reservation. When false, it is at the renters discretion.
     *
     * @var bool $requiredInd
     */
    private $requiredInd = null;

    /**
     * Gets as purpose
     *
     * Refer to OpenTravel Code List Vehicle Charge Purpose Type (VCP).
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Refer to OpenTravel Code List Vehicle Charge Purpose Type (VCP).
     *
     * @param string $purpose
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * When true, this surcharge or tax is required in the vehicle reservation. When false, it is at the renters discretion.
     *
     * @return bool
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * When true, this surcharge or tax is required in the vehicle reservation. When false, it is at the renters discretion.
     *
     * @param bool $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;
        return $this;
    }
}

