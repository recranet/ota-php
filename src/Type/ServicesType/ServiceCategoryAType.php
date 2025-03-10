<?php

namespace Recranet\OTA\Type\ServicesType;

/**
 * Class representing ServiceCategoryAType
 */
class ServiceCategoryAType
{
    /**
     * The representation of the specific service category for the service being reserved.
     *
     * @var string $serviceCatetoryCode
     */
    private $serviceCatetoryCode = null;

    /**
     * When true, a service from the service category is required and/or mandatory.
     * Example: true
     *
     * @var bool $requiredInd
     */
    private $requiredInd = null;

    /**
     * Gets as serviceCatetoryCode
     *
     * The representation of the specific service category for the service being reserved.
     *
     * @return string
     */
    public function getServiceCatetoryCode()
    {
        return $this->serviceCatetoryCode;
    }

    /**
     * Sets a new serviceCatetoryCode
     *
     * The representation of the specific service category for the service being reserved.
     *
     * @param string $serviceCatetoryCode
     * @return self
     */
    public function setServiceCatetoryCode($serviceCatetoryCode)
    {
        $this->serviceCatetoryCode = $serviceCatetoryCode;
        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * When true, a service from the service category is required and/or mandatory.
     * Example: true
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
     * When true, a service from the service category is required and/or mandatory.
     * Example: true
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

