<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType;

/**
 * Class representing PolicyInfoAType
 */
class PolicyInfoAType
{
    /**
     * The usual check-in time for the hotel.
     *
     * @var \DateTime $checkInTime
     */
    private $checkInTime = null;

    /**
     * The usual check-out time for the hotel.
     *
     * @var \DateTime $checkOutTime
     */
    private $checkOutTime = null;

    /**
     * The minimum guest age allowed for a guest at the hotel facility.
     *
     * @var int $minGuestAge
     */
    private $minGuestAge = null;

    /**
     * The minimum age recommended as a policy guideline for a guest at the hotel facility.
     *
     * @var int $minRecommendedGuestAge
     */
    private $minRecommendedGuestAge = null;

    /**
     * The usual age limit at which a child can stay free with an adult at the hotel facility. If this value is not set, then there is no cutoff limit.
     *
     * @var int $usualStayFreeCutoffAge
     */
    private $usualStayFreeCutoffAge = null;

    /**
     * The usual number of children meeting the UsualStayFreeCutoffAge allowed to stay free with an adult at the hotel. If this value is not set, then there is no cutoff limit.
     *
     * @var int $usualStayFreeChildPerAdult
     */
    private $usualStayFreeChildPerAdult = null;

    /**
     * The total guest count allowed in a room at the hotel.
     *
     * @var int $totalGuestCount
     */
    private $totalGuestCount = null;

    /**
     * Defines whether tax and service charge are included, by default, with this hotel's rates.
     *
     * @var bool $defaultTaxServiceInclusive
     */
    private $defaultTaxServiceInclusive = null;

    /**
     * If true there is no charge for children.
     *
     * @var bool $kidsStayFree
     */
    private $kidsStayFree = null;

    /**
     * The maximum age for a child price.
     *
     * @var int $maxChildAge
     */
    private $maxChildAge = null;

    /**
     * When true, a guarantee is required for an Internet booking. When false, a guarantee is not required for an Internet booking.
     *
     * @var bool $internetGuaranteeRequiredInd
     */
    private $internetGuaranteeRequiredInd = null;

    /**
     * The types of guests accepted.
     *
     * @var string $acceptedGuestType
     */
    private $acceptedGuestType = null;

    /**
     * If true, the hotel guarantees the room for late arrival.
     *
     * @var bool $roomGuaranteeLateArrvInd
     */
    private $roomGuaranteeLateArrvInd = null;

    /**
     * Provides additional information regarding policy information.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as checkInTime
     *
     * The usual check-in time for the hotel.
     *
     * @return \DateTime
     */
    public function getCheckInTime()
    {
        return $this->checkInTime;
    }

    /**
     * Sets a new checkInTime
     *
     * The usual check-in time for the hotel.
     *
     * @param \DateTime $checkInTime
     * @return self
     */
    public function setCheckInTime(\DateTime $checkInTime)
    {
        $this->checkInTime = $checkInTime;
        return $this;
    }

    /**
     * Gets as checkOutTime
     *
     * The usual check-out time for the hotel.
     *
     * @return \DateTime
     */
    public function getCheckOutTime()
    {
        return $this->checkOutTime;
    }

    /**
     * Sets a new checkOutTime
     *
     * The usual check-out time for the hotel.
     *
     * @param \DateTime $checkOutTime
     * @return self
     */
    public function setCheckOutTime(\DateTime $checkOutTime)
    {
        $this->checkOutTime = $checkOutTime;
        return $this;
    }

    /**
     * Gets as minGuestAge
     *
     * The minimum guest age allowed for a guest at the hotel facility.
     *
     * @return int
     */
    public function getMinGuestAge()
    {
        return $this->minGuestAge;
    }

    /**
     * Sets a new minGuestAge
     *
     * The minimum guest age allowed for a guest at the hotel facility.
     *
     * @param int $minGuestAge
     * @return self
     */
    public function setMinGuestAge($minGuestAge)
    {
        $this->minGuestAge = $minGuestAge;
        return $this;
    }

    /**
     * Gets as minRecommendedGuestAge
     *
     * The minimum age recommended as a policy guideline for a guest at the hotel facility.
     *
     * @return int
     */
    public function getMinRecommendedGuestAge()
    {
        return $this->minRecommendedGuestAge;
    }

    /**
     * Sets a new minRecommendedGuestAge
     *
     * The minimum age recommended as a policy guideline for a guest at the hotel facility.
     *
     * @param int $minRecommendedGuestAge
     * @return self
     */
    public function setMinRecommendedGuestAge($minRecommendedGuestAge)
    {
        $this->minRecommendedGuestAge = $minRecommendedGuestAge;
        return $this;
    }

    /**
     * Gets as usualStayFreeCutoffAge
     *
     * The usual age limit at which a child can stay free with an adult at the hotel facility. If this value is not set, then there is no cutoff limit.
     *
     * @return int
     */
    public function getUsualStayFreeCutoffAge()
    {
        return $this->usualStayFreeCutoffAge;
    }

    /**
     * Sets a new usualStayFreeCutoffAge
     *
     * The usual age limit at which a child can stay free with an adult at the hotel facility. If this value is not set, then there is no cutoff limit.
     *
     * @param int $usualStayFreeCutoffAge
     * @return self
     */
    public function setUsualStayFreeCutoffAge($usualStayFreeCutoffAge)
    {
        $this->usualStayFreeCutoffAge = $usualStayFreeCutoffAge;
        return $this;
    }

    /**
     * Gets as usualStayFreeChildPerAdult
     *
     * The usual number of children meeting the UsualStayFreeCutoffAge allowed to stay free with an adult at the hotel. If this value is not set, then there is no cutoff limit.
     *
     * @return int
     */
    public function getUsualStayFreeChildPerAdult()
    {
        return $this->usualStayFreeChildPerAdult;
    }

    /**
     * Sets a new usualStayFreeChildPerAdult
     *
     * The usual number of children meeting the UsualStayFreeCutoffAge allowed to stay free with an adult at the hotel. If this value is not set, then there is no cutoff limit.
     *
     * @param int $usualStayFreeChildPerAdult
     * @return self
     */
    public function setUsualStayFreeChildPerAdult($usualStayFreeChildPerAdult)
    {
        $this->usualStayFreeChildPerAdult = $usualStayFreeChildPerAdult;
        return $this;
    }

    /**
     * Gets as totalGuestCount
     *
     * The total guest count allowed in a room at the hotel.
     *
     * @return int
     */
    public function getTotalGuestCount()
    {
        return $this->totalGuestCount;
    }

    /**
     * Sets a new totalGuestCount
     *
     * The total guest count allowed in a room at the hotel.
     *
     * @param int $totalGuestCount
     * @return self
     */
    public function setTotalGuestCount($totalGuestCount)
    {
        $this->totalGuestCount = $totalGuestCount;
        return $this;
    }

    /**
     * Gets as defaultTaxServiceInclusive
     *
     * Defines whether tax and service charge are included, by default, with this hotel's rates.
     *
     * @return bool
     */
    public function getDefaultTaxServiceInclusive()
    {
        return $this->defaultTaxServiceInclusive;
    }

    /**
     * Sets a new defaultTaxServiceInclusive
     *
     * Defines whether tax and service charge are included, by default, with this hotel's rates.
     *
     * @param bool $defaultTaxServiceInclusive
     * @return self
     */
    public function setDefaultTaxServiceInclusive($defaultTaxServiceInclusive)
    {
        $this->defaultTaxServiceInclusive = $defaultTaxServiceInclusive;
        return $this;
    }

    /**
     * Gets as kidsStayFree
     *
     * If true there is no charge for children.
     *
     * @return bool
     */
    public function getKidsStayFree()
    {
        return $this->kidsStayFree;
    }

    /**
     * Sets a new kidsStayFree
     *
     * If true there is no charge for children.
     *
     * @param bool $kidsStayFree
     * @return self
     */
    public function setKidsStayFree($kidsStayFree)
    {
        $this->kidsStayFree = $kidsStayFree;
        return $this;
    }

    /**
     * Gets as maxChildAge
     *
     * The maximum age for a child price.
     *
     * @return int
     */
    public function getMaxChildAge()
    {
        return $this->maxChildAge;
    }

    /**
     * Sets a new maxChildAge
     *
     * The maximum age for a child price.
     *
     * @param int $maxChildAge
     * @return self
     */
    public function setMaxChildAge($maxChildAge)
    {
        $this->maxChildAge = $maxChildAge;
        return $this;
    }

    /**
     * Gets as internetGuaranteeRequiredInd
     *
     * When true, a guarantee is required for an Internet booking. When false, a guarantee is not required for an Internet booking.
     *
     * @return bool
     */
    public function getInternetGuaranteeRequiredInd()
    {
        return $this->internetGuaranteeRequiredInd;
    }

    /**
     * Sets a new internetGuaranteeRequiredInd
     *
     * When true, a guarantee is required for an Internet booking. When false, a guarantee is not required for an Internet booking.
     *
     * @param bool $internetGuaranteeRequiredInd
     * @return self
     */
    public function setInternetGuaranteeRequiredInd($internetGuaranteeRequiredInd)
    {
        $this->internetGuaranteeRequiredInd = $internetGuaranteeRequiredInd;
        return $this;
    }

    /**
     * Gets as acceptedGuestType
     *
     * The types of guests accepted.
     *
     * @return string
     */
    public function getAcceptedGuestType()
    {
        return $this->acceptedGuestType;
    }

    /**
     * Sets a new acceptedGuestType
     *
     * The types of guests accepted.
     *
     * @param string $acceptedGuestType
     * @return self
     */
    public function setAcceptedGuestType($acceptedGuestType)
    {
        $this->acceptedGuestType = $acceptedGuestType;
        return $this;
    }

    /**
     * Gets as roomGuaranteeLateArrvInd
     *
     * If true, the hotel guarantees the room for late arrival.
     *
     * @return bool
     */
    public function getRoomGuaranteeLateArrvInd()
    {
        return $this->roomGuaranteeLateArrvInd;
    }

    /**
     * Sets a new roomGuaranteeLateArrvInd
     *
     * If true, the hotel guarantees the room for late arrival.
     *
     * @param bool $roomGuaranteeLateArrvInd
     * @return self
     */
    public function setRoomGuaranteeLateArrvInd($roomGuaranteeLateArrvInd)
    {
        $this->roomGuaranteeLateArrvInd = $roomGuaranteeLateArrvInd;
        return $this;
    }

    /**
     * Gets as description
     *
     * Provides additional information regarding policy information.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Provides additional information regarding policy information.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

