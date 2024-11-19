<?php

namespace Recranet\OTA;

/**
 * Class representing DiscountType
 *
 * Identifies and provides details about the discount.
 * XSD Type: DiscountType
 */
class DiscountType extends TotalType
{
    /**
     * @var bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * @var float $percent
     */
    private $percent = null;

    /**
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount spent).
     *
     * @var string $discountCode
     */
    private $discountCode = null;

    /**
     * When true, used to indicate the discount should not be displayed. When false, indicates the discount may be displayed.
     *
     * @var bool $restrictedDisplayIndicator
     */
    private $restrictedDisplayIndicator = null;

    /**
     * @var \Recranet\OTA\ParagraphType $discountReason
     */
    private $discountReason = null;

    /**
     * Gets as taxInclusive
     *
     * @return bool
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * @param bool $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
        return $this;
    }

    /**
     * Gets as percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as discountCode
     *
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount spent).
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount spent).
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    /**
     * Gets as restrictedDisplayIndicator
     *
     * When true, used to indicate the discount should not be displayed. When false, indicates the discount may be displayed.
     *
     * @return bool
     */
    public function getRestrictedDisplayIndicator()
    {
        return $this->restrictedDisplayIndicator;
    }

    /**
     * Sets a new restrictedDisplayIndicator
     *
     * When true, used to indicate the discount should not be displayed. When false, indicates the discount may be displayed.
     *
     * @param bool $restrictedDisplayIndicator
     * @return self
     */
    public function setRestrictedDisplayIndicator($restrictedDisplayIndicator)
    {
        $this->restrictedDisplayIndicator = $restrictedDisplayIndicator;
        return $this;
    }

    /**
     * Gets as discountReason
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getDiscountReason()
    {
        return $this->discountReason;
    }

    /**
     * Sets a new discountReason
     *
     * @param \Recranet\OTA\ParagraphType $discountReason
     * @return self
     */
    public function setDiscountReason(\Recranet\OTA\ParagraphType $discountReason)
    {
        $this->discountReason = $discountReason;
        return $this;
    }
}

