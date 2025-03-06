<?php

namespace Recranet\OTA\Type\AirPricedOfferType;

/**
 * Class representing TripInsuranceAType
 */
class TripInsuranceAType
{
    /**
     * The third-party insurance product code.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * The internal airline selling component code.
     *
     * @var string $sellingComponentCode
     */
    private $sellingComponentCode = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Traveler information with individual insurance coverage details.
     *
     * @var \Recranet\OTA\Type\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[] $coveredTraveler
     */
    private $coveredTraveler = [
        
    ];

    /**
     * Coverage limitations, including deductible and policy limit.
     *
     * @var \Recranet\OTA\Type\CoverageLimitType $coverageLimit
     */
    private $coverageLimit = null;

    /**
     * Plan costs.
     *
     * @var \Recranet\OTA\Type\PlanCostType $planCost
     */
    private $planCost = null;

    /**
     * Gets as code
     *
     * The third-party insurance product code.
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
     * The third-party insurance product code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as sellingComponentCode
     *
     * The internal airline selling component code.
     *
     * @return string
     */
    public function getSellingComponentCode()
    {
        return $this->sellingComponentCode;
    }

    /**
     * Sets a new sellingComponentCode
     *
     * The internal airline selling component code.
     *
     * @param string $sellingComponentCode
     * @return self
     */
    public function setSellingComponentCode($sellingComponentCode)
    {
        $this->sellingComponentCode = $sellingComponentCode;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType $coveredTraveler
     */
    public function addToCoveredTraveler(\Recranet\OTA\Type\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType $coveredTraveler)
    {
        $this->coveredTraveler[] = $coveredTraveler;
        return $this;
    }

    /**
     * isset coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoveredTraveler($index)
    {
        return isset($this->coveredTraveler[$index]);
    }

    /**
     * unset coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoveredTraveler($index)
    {
        unset($this->coveredTraveler[$index]);
    }

    /**
     * Gets as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return \Recranet\OTA\Type\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[]
     */
    public function getCoveredTraveler()
    {
        return $this->coveredTraveler;
    }

    /**
     * Sets a new coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param \Recranet\OTA\Type\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[] $coveredTraveler
     * @return self
     */
    public function setCoveredTraveler(array $coveredTraveler = null)
    {
        $this->coveredTraveler = $coveredTraveler;
        return $this;
    }

    /**
     * Gets as coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @return \Recranet\OTA\Type\CoverageLimitType
     */
    public function getCoverageLimit()
    {
        return $this->coverageLimit;
    }

    /**
     * Sets a new coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @param \Recranet\OTA\Type\CoverageLimitType $coverageLimit
     * @return self
     */
    public function setCoverageLimit(?\Recranet\OTA\Type\CoverageLimitType $coverageLimit = null)
    {
        $this->coverageLimit = $coverageLimit;
        return $this;
    }

    /**
     * Gets as planCost
     *
     * Plan costs.
     *
     * @return \Recranet\OTA\Type\PlanCostType
     */
    public function getPlanCost()
    {
        return $this->planCost;
    }

    /**
     * Sets a new planCost
     *
     * Plan costs.
     *
     * @param \Recranet\OTA\Type\PlanCostType $planCost
     * @return self
     */
    public function setPlanCost(?\Recranet\OTA\Type\PlanCostType $planCost = null)
    {
        $this->planCost = $planCost;
        return $this;
    }
}

