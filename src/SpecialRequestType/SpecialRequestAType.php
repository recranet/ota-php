<?php

namespace Recranet\OTA\SpecialRequestType;

use Recranet\OTA\ParagraphType;

/**
 * Class representing SpecialRequestAType
 */
class SpecialRequestAType extends ParagraphType
{
    /**
     * This identifies a special request for this reservation and is typically hotel-specific.
     *
     * @var string $requestCode
     */
    private $requestCode = null;

    /**
     * Identifies the source authority for the RequestCode.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * Allows you to pass the number of units that the special request is for (e.g., if 4 rooms are booked you may want 3 with double/double beds and 1 with a king).
     *
     * @var int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Gets as requestCode
     *
     * This identifies a special request for this reservation and is typically hotel-specific.
     *
     * @return string
     */
    public function getRequestCode()
    {
        return $this->requestCode;
    }

    /**
     * Sets a new requestCode
     *
     * This identifies a special request for this reservation and is typically hotel-specific.
     *
     * @param string $requestCode
     * @return self
     */
    public function setRequestCode($requestCode)
    {
        $this->requestCode = $requestCode;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the RequestCode.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the RequestCode.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * Allows you to pass the number of units that the special request is for (e.g., if 4 rooms are booked you may want 3 with double/double beds and 1 with a king).
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * Allows you to pass the number of units that the special request is for (e.g., if 4 rooms are booked you may want 3 with double/double beds and 1 with a king).
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }
}

