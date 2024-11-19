<?php

namespace Recranet\OTA;

/**
 * Class representing BusIdentificationType
 *
 * Defines bus identification information.
 * XSD Type: BusIdentificationType
 */
class BusIdentificationType
{
    /**
     * The bus type. Use a string value or a value from an OpenTravel code list (to be defined in 2011B specification.)
     *
     * @var string $busTypeCode
     */
    private $busTypeCode = null;

    /**
     * The unique number that identifies the bus.
     *
     * @var string $busNumber
     */
    private $busNumber = null;

    /**
     * The network code of a bus operator.
     *
     * @var \Recranet\OTA\NetworkCodeType $networkCode
     */
    private $networkCode = null;

    /**
     * Gets as busTypeCode
     *
     * The bus type. Use a string value or a value from an OpenTravel code list (to be defined in 2011B specification.)
     *
     * @return string
     */
    public function getBusTypeCode()
    {
        return $this->busTypeCode;
    }

    /**
     * Sets a new busTypeCode
     *
     * The bus type. Use a string value or a value from an OpenTravel code list (to be defined in 2011B specification.)
     *
     * @param string $busTypeCode
     * @return self
     */
    public function setBusTypeCode($busTypeCode)
    {
        $this->busTypeCode = $busTypeCode;
        return $this;
    }

    /**
     * Gets as busNumber
     *
     * The unique number that identifies the bus.
     *
     * @return string
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * Sets a new busNumber
     *
     * The unique number that identifies the bus.
     *
     * @param string $busNumber
     * @return self
     */
    public function setBusNumber($busNumber)
    {
        $this->busNumber = $busNumber;
        return $this;
    }

    /**
     * Gets as networkCode
     *
     * The network code of a bus operator.
     *
     * @return \Recranet\OTA\NetworkCodeType
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Sets a new networkCode
     *
     * The network code of a bus operator.
     *
     * @param \Recranet\OTA\NetworkCodeType $networkCode
     * @return self
     */
    public function setNetworkCode(\Recranet\OTA\NetworkCodeType $networkCode)
    {
        $this->networkCode = $networkCode;
        return $this;
    }
}

