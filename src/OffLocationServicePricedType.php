<?php

namespace Recranet\OTA;

/**
 * Class representing OffLocationServicePricedType
 *
 * The OffLocationServicePricedType complex type describes the data that is used to describe a priced off-location service, that is, an off-location service and the corresponding charge.
 * XSD Type: OffLocationServicePricedType
 */
class OffLocationServicePricedType
{
    /**
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @var \Recranet\OTA\OffLocationServiceType $offLocService
     */
    private $offLocService = null;

    /**
     * Charge information associated with this specific off-airport service.
     *
     * @var \Recranet\OTA\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @return \Recranet\OTA\OffLocationServiceType
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @param \Recranet\OTA\OffLocationServiceType $offLocService
     * @return self
     */
    public function setOffLocService(\Recranet\OTA\OffLocationServiceType $offLocService)
    {
        $this->offLocService = $offLocService;
        return $this;
    }

    /**
     * Gets as charge
     *
     * Charge information associated with this specific off-airport service.
     *
     * @return \Recranet\OTA\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Charge information associated with this specific off-airport service.
     *
     * @param \Recranet\OTA\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(?\Recranet\OTA\VehicleChargeType $charge = null)
    {
        $this->charge = $charge;
        return $this;
    }
}
