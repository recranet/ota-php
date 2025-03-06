<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RatePlanInclusionsType
 *
 * Defines charges that are included in this rate plan.
 * XSD Type: RatePlanInclusionsType
 */
class RatePlanInclusionsType
{
    /**
     * Indicates that tax is included in the rate.
     *
     * @var bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * Indicates that service fees are included in the rate.
     *
     * @var bool $serviceFeeInclusive
     */
    private $serviceFeeInclusive = null;

    /**
     * Description of what is included in the rate plan.
     *
     * @var \Recranet\OTA\Type\ParagraphType $ratePlanInclusionDesciption
     */
    private $ratePlanInclusionDesciption = null;

    /**
     * Gets as taxInclusive
     *
     * Indicates that tax is included in the rate.
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
     * Indicates that tax is included in the rate.
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
     * Gets as serviceFeeInclusive
     *
     * Indicates that service fees are included in the rate.
     *
     * @return bool
     */
    public function getServiceFeeInclusive()
    {
        return $this->serviceFeeInclusive;
    }

    /**
     * Sets a new serviceFeeInclusive
     *
     * Indicates that service fees are included in the rate.
     *
     * @param bool $serviceFeeInclusive
     * @return self
     */
    public function setServiceFeeInclusive($serviceFeeInclusive)
    {
        $this->serviceFeeInclusive = $serviceFeeInclusive;
        return $this;
    }

    /**
     * Gets as ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getRatePlanInclusionDesciption()
    {
        return $this->ratePlanInclusionDesciption;
    }

    /**
     * Sets a new ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @param \Recranet\OTA\Type\ParagraphType $ratePlanInclusionDesciption
     * @return self
     */
    public function setRatePlanInclusionDesciption(?\Recranet\OTA\Type\ParagraphType $ratePlanInclusionDesciption = null)
    {
        $this->ratePlanInclusionDesciption = $ratePlanInclusionDesciption;
        return $this;
    }
}

