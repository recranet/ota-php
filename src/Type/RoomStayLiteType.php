<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomStayLiteType
 *
 * Summary version of the RoomStayType, initially created for the Travel Itinerary Message set.
 * XSD Type: RoomStayLiteType
 */
class RoomStayLiteType
{
    /**
     * Room type for reservation.
     *
     * @var \Recranet\OTA\Type\RoomTypeLiteType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * Rate Plan info.
     *
     * @var \Recranet\OTA\Type\RatePlanLiteType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * Reservation rate(s).
     *
     * @var \Recranet\OTA\Type\RoomRateLiteType[] $roomRates
     */
    private $roomRates = null;

    /**
     * Number of guests associated with this reservation.
     *
     * @var \Recranet\OTA\Type\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * Date and time of check-in and check-out.
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType $timeSpan
     */
    private $timeSpan = null;

    /**
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @var \Recranet\OTA\Type\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @var \Recranet\OTA\Type\RequiredPaymentLiteType[] $depositPayment
     */
    private $depositPayment = [
        
    ];

    /**
     * Basic hotel property information.
     *
     * @var \Recranet\OTA\Type\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Adds as roomType
     *
     * Room type for reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomTypeLiteType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\Type\RoomTypeLiteType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * Room type for reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * Room type for reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * Room type for reservation.
     *
     * @return \Recranet\OTA\Type\RoomTypeLiteType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * Room type for reservation.
     *
     * @param \Recranet\OTA\Type\RoomTypeLiteType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * Rate Plan info.
     *
     * @return self
     * @param \Recranet\OTA\Type\RatePlanLiteType $ratePlan
     */
    public function addToRatePlans(\Recranet\OTA\Type\RatePlanLiteType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlans
     *
     * Rate Plan info.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * Rate Plan info.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * Rate Plan info.
     *
     * @return \Recranet\OTA\Type\RatePlanLiteType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * Rate Plan info.
     *
     * @param \Recranet\OTA\Type\RatePlanLiteType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Adds as roomRate
     *
     * Reservation rate(s).
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomRateLiteType $roomRate
     */
    public function addToRoomRates(\Recranet\OTA\Type\RoomRateLiteType $roomRate)
    {
        $this->roomRates[] = $roomRate;
        return $this;
    }

    /**
     * isset roomRates
     *
     * Reservation rate(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRates($index)
    {
        return isset($this->roomRates[$index]);
    }

    /**
     * unset roomRates
     *
     * Reservation rate(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRates($index)
    {
        unset($this->roomRates[$index]);
    }

    /**
     * Gets as roomRates
     *
     * Reservation rate(s).
     *
     * @return \Recranet\OTA\Type\RoomRateLiteType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * Reservation rate(s).
     *
     * @param \Recranet\OTA\Type\RoomRateLiteType[] $roomRates
     * @return self
     */
    public function setRoomRates(array $roomRates = null)
    {
        $this->roomRates = $roomRates;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @return \Recranet\OTA\Type\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @param \Recranet\OTA\Type\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(?\Recranet\OTA\Type\GuestCountType $guestCounts = null)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType $timeSpan
     * @return self
     */
    public function setTimeSpan(?\Recranet\OTA\Type\DateTimeSpanType $timeSpan = null)
    {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
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
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
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
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
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
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
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
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
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
     * Adds as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Recranet\OTA\Type\RequiredPaymentLiteType $depositPayment
     */
    public function addToDepositPayment(\Recranet\OTA\Type\RequiredPaymentLiteType $depositPayment)
    {
        $this->depositPayment[] = $depositPayment;
        return $this;
    }

    /**
     * isset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayment($index)
    {
        return isset($this->depositPayment[$index]);
    }

    /**
     * unset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayment($index)
    {
        unset($this->depositPayment[$index]);
    }

    /**
     * Gets as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Recranet\OTA\Type\RequiredPaymentLiteType[]
     */
    public function getDepositPayment()
    {
        return $this->depositPayment;
    }

    /**
     * Sets a new depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Recranet\OTA\Type\RequiredPaymentLiteType[] $depositPayment
     * @return self
     */
    public function setDepositPayment(array $depositPayment = null)
    {
        $this->depositPayment = $depositPayment;
        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @return \Recranet\OTA\Type\RoomStayLiteType\BasicPropertyInfoAType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @param \Recranet\OTA\Type\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(?\Recranet\OTA\Type\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo = null)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
}

