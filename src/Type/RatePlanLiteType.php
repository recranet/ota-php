<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RatePlanLiteType
 *
 * Summary version of the RoomPlanType, initially created for the Travel Itinerary Message set.
 * XSD Type: RatePlanLiteType
 */
class RatePlanLiteType
{
    /**
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Information pertaining to the availability of the rate plan.
     *
     * @var string $rateIndicator
     */
    private $rateIndicator = null;

    /**
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @var string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @var string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @var \Recranet\OTA\Type\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * Describes the rate plan.
     *
     * @var \Recranet\OTA\Type\ParagraphType $ratePlanDescription
     */
    private $ratePlanDescription = null;

    /**
     * Gets as ratePlanCode
     *
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as rateIndicator
     *
     * Information pertaining to the availability of the rate plan.
     *
     * @return string
     */
    public function getRateIndicator()
    {
        return $this->rateIndicator;
    }

    /**
     * Sets a new rateIndicator
     *
     * Information pertaining to the availability of the rate plan.
     *
     * @param string $rateIndicator
     * @return self
     */
    public function setRateIndicator($rateIndicator)
    {
        $this->rateIndicator = $rateIndicator;
        return $this;
    }

    /**
     * Gets as ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;
        return $this;
    }

    /**
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuaranteeType $guarantee
     */
    public function addToGuarantee(\Recranet\OTA\Type\GuaranteeType $guarantee)
    {
        $this->guarantee[] = $guarantee;
        return $this;
    }

    /**
     * isset guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Recranet\OTA\Type\GuaranteeType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Recranet\OTA\Type\GuaranteeType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee = null)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Gets as ratePlanDescription
     *
     * Describes the rate plan.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getRatePlanDescription()
    {
        return $this->ratePlanDescription;
    }

    /**
     * Sets a new ratePlanDescription
     *
     * Describes the rate plan.
     *
     * @param \Recranet\OTA\Type\ParagraphType $ratePlanDescription
     * @return self
     */
    public function setRatePlanDescription(?\Recranet\OTA\Type\ParagraphType $ratePlanDescription = null)
    {
        $this->ratePlanDescription = $ratePlanDescription;
        return $this;
    }
}

