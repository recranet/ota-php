<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RatePlanCandidatesType
 *
 *
 * XSD Type: RatePlanCandidatesType
 */
class RatePlanCandidatesType
{
    /**
     * Element used to identify available products and rates.
     *
     * @var \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidate
     */
    private $ratePlanCandidate = [
        
    ];

    /**
     * Adds as ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
     */
    public function addToRatePlanCandidate(\Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate)
    {
        $this->ratePlanCandidate[] = $ratePlanCandidate;
        return $this;
    }

    /**
     * isset ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanCandidate($index)
    {
        return isset($this->ratePlanCandidate[$index]);
    }

    /**
     * unset ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanCandidate($index)
    {
        unset($this->ratePlanCandidate[$index]);
    }

    /**
     * Gets as ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @return \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidate()
    {
        return $this->ratePlanCandidate;
    }

    /**
     * Sets a new ratePlanCandidate
     *
     * Element used to identify available products and rates.
     *
     * @param \Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidate
     * @return self
     */
    public function setRatePlanCandidate(array $ratePlanCandidate)
    {
        $this->ratePlanCandidate = $ratePlanCandidate;
        return $this;
    }
}

