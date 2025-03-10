<?php

namespace Recranet\OTA\Type\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing AccountAType
 */
class AccountAType
{
    /**
     * If true, return only the fares for the specified account code.
     *
     * @var bool $codeOnlyFaresInd
     */
    private $codeOnlyFaresInd = null;

    /**
     * The account code for which fares are requested.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as codeOnlyFaresInd
     *
     * If true, return only the fares for the specified account code.
     *
     * @return bool
     */
    public function getCodeOnlyFaresInd()
    {
        return $this->codeOnlyFaresInd;
    }

    /**
     * Sets a new codeOnlyFaresInd
     *
     * If true, return only the fares for the specified account code.
     *
     * @param bool $codeOnlyFaresInd
     * @return self
     */
    public function setCodeOnlyFaresInd($codeOnlyFaresInd)
    {
        $this->codeOnlyFaresInd = $codeOnlyFaresInd;
        return $this;
    }

    /**
     * Gets as code
     *
     * The account code for which fares are requested.
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
     * The account code for which fares are requested.
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

