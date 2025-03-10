<?php

namespace Recranet\OTA\Type\HotelSearchCriterionType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{
    /**
     * Used to identify a specific business service. Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @var string $businessServiceCode
     */
    private $businessServiceCode = null;

    /**
     * The representation of the specific service being reserved.
     *
     * @var string $serviceInventoryCode
     */
    private $serviceInventoryCode = null;

    /**
     * The number of services (e.g., tickets, rounds of golf).
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Gets as businessServiceCode
     *
     * Used to identify a specific business service. Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @return string
     */
    public function getBusinessServiceCode()
    {
        return $this->businessServiceCode;
    }

    /**
     * Sets a new businessServiceCode
     *
     * Used to identify a specific business service. Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @param string $businessServiceCode
     * @return self
     */
    public function setBusinessServiceCode($businessServiceCode)
    {
        $this->businessServiceCode = $businessServiceCode;
        return $this;
    }

    /**
     * Gets as serviceInventoryCode
     *
     * The representation of the specific service being reserved.
     *
     * @return string
     */
    public function getServiceInventoryCode()
    {
        return $this->serviceInventoryCode;
    }

    /**
     * Sets a new serviceInventoryCode
     *
     * The representation of the specific service being reserved.
     *
     * @param string $serviceInventoryCode
     * @return self
     */
    public function setServiceInventoryCode($serviceInventoryCode)
    {
        $this->serviceInventoryCode = $serviceInventoryCode;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of services (e.g., tickets, rounds of golf).
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of services (e.g., tickets, rounds of golf).
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}

