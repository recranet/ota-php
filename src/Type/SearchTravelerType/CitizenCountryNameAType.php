<?php

namespace Recranet\OTA\Type\SearchTravelerType;

/**
 * Class representing CitizenCountryNameAType
 */
class CitizenCountryNameAType
{
    /**
     * When true, indicates a default value should be used.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * A 2 character country code as defined in ISO3166.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

    /**
     * Gets as code
     *
     * A 2 character country code as defined in ISO3166.
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
     * A 2 character country code as defined in ISO3166.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

