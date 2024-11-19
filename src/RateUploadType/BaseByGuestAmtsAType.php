<?php

namespace Recranet\OTA\RateUploadType;

/**
 * Class representing BaseByGuestAmtsAType
 */
class BaseByGuestAmtsAType
{
    /**
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @var \Recranet\OTA\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[] $baseByGuestAmt
     */
    private $baseByGuestAmt = [
        
    ];

    /**
     * Adds as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return self
     * @param \Recranet\OTA\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt
     */
    public function addToBaseByGuestAmt(\Recranet\OTA\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt)
    {
        $this->baseByGuestAmt[] = $baseByGuestAmt;
        return $this;
    }

    /**
     * isset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBaseByGuestAmt($index)
    {
        return isset($this->baseByGuestAmt[$index]);
    }

    /**
     * unset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBaseByGuestAmt($index)
    {
        unset($this->baseByGuestAmt[$index]);
    }

    /**
     * Gets as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return \Recranet\OTA\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     */
    public function getBaseByGuestAmt()
    {
        return $this->baseByGuestAmt;
    }

    /**
     * Sets a new baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param \Recranet\OTA\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[] $baseByGuestAmt
     * @return self
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt)
    {
        $this->baseByGuestAmt = $baseByGuestAmt;
        return $this;
    }
}

