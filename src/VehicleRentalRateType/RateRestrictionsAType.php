<?php

namespace Recranet\OTA\VehicleRentalRateType;

/**
 * Class representing RateRestrictionsAType
 */
class RateRestrictionsAType
{
    /**
     * Indicates if this rate is only available to those customers who are flying to the vehicle rental location.
     *
     *  false
     *
     * @var bool $arriveByFlight
     */
    private $arriveByFlight = null;

    /**
     * When true, there is a minimum day requirement.
     *
     * @var bool $minimumDayInd
     */
    private $minimumDayInd = null;

    /**
     * When true, there is a maximum day requirement restriction.
     *
     * @var bool $maximumDayInd
     */
    private $maximumDayInd = null;

    /**
     * When true, this rate requires advanced booking.
     *
     * @var bool $advancedBookingInd
     */
    private $advancedBookingInd = null;

    /**
     * When true, the mileage is restricted.
     *
     * @var bool $restrictedMileageInd
     */
    private $restrictedMileageInd = null;

    /**
     * When true, this is a negotiated corporate rate.
     *
     * @var bool $corporateRateInd
     */
    private $corporateRateInd = null;

    /**
     * When true, a guarantee is required.
     *
     * @var bool $guaranteeReqInd
     */
    private $guaranteeReqInd = null;

    /**
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @var int $maximumVehiclesAllowed
     */
    private $maximumVehiclesAllowed = null;

    /**
     * When true, an overnight rental is required.
     *
     * @var bool $overnightInd
     */
    private $overnightInd = null;

    /**
     * Specifies the one way rental policy for the pick-up location.
     *
     * @var string $oneWayPolicy
     */
    private $oneWayPolicy = null;

    /**
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @var bool $cancellationPenaltyInd
     */
    private $cancellationPenaltyInd = null;

    /**
     * When true indicates a fee applies if a modification is requested.
     *
     * @var bool $modificationPenaltyInd
     */
    private $modificationPenaltyInd = null;

    /**
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @var int $minimumAge
     */
    private $minimumAge = null;

    /**
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @var int $maximumAge
     */
    private $maximumAge = null;

    /**
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @var bool $noShowFeeInd
     */
    private $noShowFeeInd = null;

    /**
     * Gets as arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to the vehicle rental location.
     *
     *  false
     *
     * @return bool
     */
    public function getArriveByFlight()
    {
        return $this->arriveByFlight;
    }

    /**
     * Sets a new arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to the vehicle rental location.
     *
     *  false
     *
     * @param bool $arriveByFlight
     * @return self
     */
    public function setArriveByFlight($arriveByFlight)
    {
        $this->arriveByFlight = $arriveByFlight;
        return $this;
    }

    /**
     * Gets as minimumDayInd
     *
     * When true, there is a minimum day requirement.
     *
     * @return bool
     */
    public function getMinimumDayInd()
    {
        return $this->minimumDayInd;
    }

    /**
     * Sets a new minimumDayInd
     *
     * When true, there is a minimum day requirement.
     *
     * @param bool $minimumDayInd
     * @return self
     */
    public function setMinimumDayInd($minimumDayInd)
    {
        $this->minimumDayInd = $minimumDayInd;
        return $this;
    }

    /**
     * Gets as maximumDayInd
     *
     * When true, there is a maximum day requirement restriction.
     *
     * @return bool
     */
    public function getMaximumDayInd()
    {
        return $this->maximumDayInd;
    }

    /**
     * Sets a new maximumDayInd
     *
     * When true, there is a maximum day requirement restriction.
     *
     * @param bool $maximumDayInd
     * @return self
     */
    public function setMaximumDayInd($maximumDayInd)
    {
        $this->maximumDayInd = $maximumDayInd;
        return $this;
    }

    /**
     * Gets as advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @return bool
     */
    public function getAdvancedBookingInd()
    {
        return $this->advancedBookingInd;
    }

    /**
     * Sets a new advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @param bool $advancedBookingInd
     * @return self
     */
    public function setAdvancedBookingInd($advancedBookingInd)
    {
        $this->advancedBookingInd = $advancedBookingInd;
        return $this;
    }

    /**
     * Gets as restrictedMileageInd
     *
     * When true, the mileage is restricted.
     *
     * @return bool
     */
    public function getRestrictedMileageInd()
    {
        return $this->restrictedMileageInd;
    }

    /**
     * Sets a new restrictedMileageInd
     *
     * When true, the mileage is restricted.
     *
     * @param bool $restrictedMileageInd
     * @return self
     */
    public function setRestrictedMileageInd($restrictedMileageInd)
    {
        $this->restrictedMileageInd = $restrictedMileageInd;
        return $this;
    }

    /**
     * Gets as corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @return bool
     */
    public function getCorporateRateInd()
    {
        return $this->corporateRateInd;
    }

    /**
     * Sets a new corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @param bool $corporateRateInd
     * @return self
     */
    public function setCorporateRateInd($corporateRateInd)
    {
        $this->corporateRateInd = $corporateRateInd;
        return $this;
    }

    /**
     * Gets as guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @return bool
     */
    public function getGuaranteeReqInd()
    {
        return $this->guaranteeReqInd;
    }

    /**
     * Sets a new guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @param bool $guaranteeReqInd
     * @return self
     */
    public function setGuaranteeReqInd($guaranteeReqInd)
    {
        $this->guaranteeReqInd = $guaranteeReqInd;
        return $this;
    }

    /**
     * Gets as maximumVehiclesAllowed
     *
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @return int
     */
    public function getMaximumVehiclesAllowed()
    {
        return $this->maximumVehiclesAllowed;
    }

    /**
     * Sets a new maximumVehiclesAllowed
     *
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @param int $maximumVehiclesAllowed
     * @return self
     */
    public function setMaximumVehiclesAllowed($maximumVehiclesAllowed)
    {
        $this->maximumVehiclesAllowed = $maximumVehiclesAllowed;
        return $this;
    }

    /**
     * Gets as overnightInd
     *
     * When true, an overnight rental is required.
     *
     * @return bool
     */
    public function getOvernightInd()
    {
        return $this->overnightInd;
    }

    /**
     * Sets a new overnightInd
     *
     * When true, an overnight rental is required.
     *
     * @param bool $overnightInd
     * @return self
     */
    public function setOvernightInd($overnightInd)
    {
        $this->overnightInd = $overnightInd;
        return $this;
    }

    /**
     * Gets as oneWayPolicy
     *
     * Specifies the one way rental policy for the pick-up location.
     *
     * @return string
     */
    public function getOneWayPolicy()
    {
        return $this->oneWayPolicy;
    }

    /**
     * Sets a new oneWayPolicy
     *
     * Specifies the one way rental policy for the pick-up location.
     *
     * @param string $oneWayPolicy
     * @return self
     */
    public function setOneWayPolicy($oneWayPolicy)
    {
        $this->oneWayPolicy = $oneWayPolicy;
        return $this;
    }

    /**
     * Gets as cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @return bool
     */
    public function getCancellationPenaltyInd()
    {
        return $this->cancellationPenaltyInd;
    }

    /**
     * Sets a new cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @param bool $cancellationPenaltyInd
     * @return self
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd)
    {
        $this->cancellationPenaltyInd = $cancellationPenaltyInd;
        return $this;
    }

    /**
     * Gets as modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @return bool
     */
    public function getModificationPenaltyInd()
    {
        return $this->modificationPenaltyInd;
    }

    /**
     * Sets a new modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @param bool $modificationPenaltyInd
     * @return self
     */
    public function setModificationPenaltyInd($modificationPenaltyInd)
    {
        $this->modificationPenaltyInd = $modificationPenaltyInd;
        return $this;
    }

    /**
     * Gets as minimumAge
     *
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @return int
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @param int $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;
        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @return int
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @param int $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;
        return $this;
    }

    /**
     * Gets as noShowFeeInd
     *
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @return bool
     */
    public function getNoShowFeeInd()
    {
        return $this->noShowFeeInd;
    }

    /**
     * Sets a new noShowFeeInd
     *
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @param bool $noShowFeeInd
     * @return self
     */
    public function setNoShowFeeInd($noShowFeeInd)
    {
        $this->noShowFeeInd = $noShowFeeInd;
        return $this;
    }
}

