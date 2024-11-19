<?php

namespace Recranet\OTA\ViewershipsType\ViewershipAType\LocationCodesAType;

/**
 * Class representing LocationCodeAType
 */
class LocationCodeAType
{
    /**
     * @var string $cityCode
     */
    private $cityCode = null;

    /**
     * @var string $stateProvinceCode
     */
    private $stateProvinceCode = null;

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as cityCode
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Sets a new cityCode
     *
     * @param string $cityCode
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Gets as stateProvinceCode
     *
     * @return string
     */
    public function getStateProvinceCode()
    {
        return $this->stateProvinceCode;
    }

    /**
     * Sets a new stateProvinceCode
     *
     * @param string $stateProvinceCode
     * @return self
     */
    public function setStateProvinceCode($stateProvinceCode)
    {
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }

    /**
     * Gets as countryCode
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
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}

