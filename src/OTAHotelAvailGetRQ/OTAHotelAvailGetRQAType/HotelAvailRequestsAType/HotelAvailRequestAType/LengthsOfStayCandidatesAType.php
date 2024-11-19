<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing LengthsOfStayCandidatesAType
 */
class LengthsOfStayCandidatesAType
{
    /**
     * Boolean Flag indicating if all lengths of stay types should be sent or only the ones requested in LengthOfStayCandidate.
     *
     * @var bool $sendAllLengthsOfStay
     */
    private $sendAllLengthsOfStay = null;

    /**
     * The number of elements in the requested fixed pattern length of stay (FPLOS) array.
     *
     * @var int $fixedPatternLength
     */
    private $fixedPatternLength = null;

    /**
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @var \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[] $lengthOfStayCandidate
     */
    private $lengthOfStayCandidate = [
        
    ];

    /**
     * Gets as sendAllLengthsOfStay
     *
     * Boolean Flag indicating if all lengths of stay types should be sent or only the ones requested in LengthOfStayCandidate.
     *
     * @return bool
     */
    public function getSendAllLengthsOfStay()
    {
        return $this->sendAllLengthsOfStay;
    }

    /**
     * Sets a new sendAllLengthsOfStay
     *
     * Boolean Flag indicating if all lengths of stay types should be sent or only the ones requested in LengthOfStayCandidate.
     *
     * @param bool $sendAllLengthsOfStay
     * @return self
     */
    public function setSendAllLengthsOfStay($sendAllLengthsOfStay)
    {
        $this->sendAllLengthsOfStay = $sendAllLengthsOfStay;
        return $this;
    }

    /**
     * Gets as fixedPatternLength
     *
     * The number of elements in the requested fixed pattern length of stay (FPLOS) array.
     *
     * @return int
     */
    public function getFixedPatternLength()
    {
        return $this->fixedPatternLength;
    }

    /**
     * Sets a new fixedPatternLength
     *
     * The number of elements in the requested fixed pattern length of stay (FPLOS) array.
     *
     * @param int $fixedPatternLength
     * @return self
     */
    public function setFixedPatternLength($fixedPatternLength)
    {
        $this->fixedPatternLength = $fixedPatternLength;
        return $this;
    }

    /**
     * Adds as lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType $lengthOfStayCandidate
     */
    public function addToLengthOfStayCandidate(\Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType $lengthOfStayCandidate)
    {
        $this->lengthOfStayCandidate[] = $lengthOfStayCandidate;
        return $this;
    }

    /**
     * isset lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLengthOfStayCandidate($index)
    {
        return isset($this->lengthOfStayCandidate[$index]);
    }

    /**
     * unset lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLengthOfStayCandidate($index)
    {
        unset($this->lengthOfStayCandidate[$index]);
    }

    /**
     * Gets as lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[]
     */
    public function getLengthOfStayCandidate()
    {
        return $this->lengthOfStayCandidate;
    }

    /**
     * Sets a new lengthOfStayCandidate
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param \Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType\LengthOfStayCandidateAType[] $lengthOfStayCandidate
     * @return self
     */
    public function setLengthOfStayCandidate(array $lengthOfStayCandidate = null)
    {
        $this->lengthOfStayCandidate = $lengthOfStayCandidate;
        return $this;
    }
}

