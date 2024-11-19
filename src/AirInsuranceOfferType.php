<?php

namespace Recranet\OTA;

/**
 * Class representing AirInsuranceOfferType
 *
 * Information required to request third party trip insurance.
 * XSD Type: AirInsuranceOfferType
 */
class AirInsuranceOfferType
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
     * A unique ID for this trip insurance product that may be referenced elsewhere in this message.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Identifies the company providing the insurance product.
     *
     * @var \Recranet\OTA\CompanyNameType $providerCompany
     */
    private $providerCompany = null;

    /**
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @var \Recranet\OTA\AirInsuranceOfferType\TotalTripCostAType $totalTripCost
     */
    private $totalTripCost = null;

    /**
     * Traveler information with individual insurance coverage details.
     *
     * @var \Recranet\OTA\SearchTravelerType[] $coveredTraveler
     */
    private $coveredTraveler = [
        
    ];

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
     * Gets as rPH
     *
     * A unique ID for this trip insurance product that may be referenced elsewhere in this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this trip insurance product that may be referenced elsewhere in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as providerCompany
     *
     * Identifies the company providing the insurance product.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getProviderCompany()
    {
        return $this->providerCompany;
    }

    /**
     * Sets a new providerCompany
     *
     * Identifies the company providing the insurance product.
     *
     * @param \Recranet\OTA\CompanyNameType $providerCompany
     * @return self
     */
    public function setProviderCompany(?\Recranet\OTA\CompanyNameType $providerCompany = null)
    {
        $this->providerCompany = $providerCompany;
        return $this;
    }

    /**
     * Gets as totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @return \Recranet\OTA\AirInsuranceOfferType\TotalTripCostAType
     */
    public function getTotalTripCost()
    {
        return $this->totalTripCost;
    }

    /**
     * Sets a new totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @param \Recranet\OTA\AirInsuranceOfferType\TotalTripCostAType $totalTripCost
     * @return self
     */
    public function setTotalTripCost(?\Recranet\OTA\AirInsuranceOfferType\TotalTripCostAType $totalTripCost = null)
    {
        $this->totalTripCost = $totalTripCost;
        return $this;
    }

    /**
     * Adds as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return self
     * @param \Recranet\OTA\SearchTravelerType $coveredTraveler
     */
    public function addToCoveredTraveler(\Recranet\OTA\SearchTravelerType $coveredTraveler)
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
     * @return \Recranet\OTA\SearchTravelerType[]
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
     * @param \Recranet\OTA\SearchTravelerType[] $coveredTraveler
     * @return self
     */
    public function setCoveredTraveler(array $coveredTraveler = null)
    {
        $this->coveredTraveler = $coveredTraveler;
        return $this;
    }
}

