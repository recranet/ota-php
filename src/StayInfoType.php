<?php

namespace Recranet\OTA;

/**
 * Class representing StayInfoType
 *
 * The StayInfo class contains the guest revenue and stay data to be sent to the central server.
 * XSD Type: StayInfoType
 */
class StayInfoType
{
    /**
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * @var int $roomStayRPH
     */
    private $roomStayRPH = null;

    /**
     * A collection of loyalty points accruals.
     *
     * @var \Recranet\OTA\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $loyaltyPointsAccruals
     */
    private $loyaltyPointsAccruals = null;

    /**
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @var \Recranet\OTA\RevenueCategoryType[] $revenueCategories
     */
    private $revenueCategories = null;

    /**
     * The confirmation number of the reservation associated with the stay.
     *
     * @var \Recranet\OTA\UniqueIDType $reservationID
     */
    private $reservationID = null;

    /**
     * Contains the reservation details associated with the stay information.
     *
     * @var \Recranet\OTA\HotelReservationType $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * Gets as sequenceNumber
     *
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as roomStayRPH
     *
     * @return int
     */
    public function getRoomStayRPH()
    {
        return $this->roomStayRPH;
    }

    /**
     * Sets a new roomStayRPH
     *
     * @param int $roomStayRPH
     * @return self
     */
    public function setRoomStayRPH($roomStayRPH)
    {
        $this->roomStayRPH = $roomStayRPH;
        return $this;
    }

    /**
     * Adds as selectedLoyalty
     *
     * A collection of loyalty points accruals.
     *
     * @return self
     * @param \Recranet\OTA\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty
     */
    public function addToLoyaltyPointsAccruals(\Recranet\OTA\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty)
    {
        $this->loyaltyPointsAccruals[] = $selectedLoyalty;
        return $this;
    }

    /**
     * isset loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPointsAccruals($index)
    {
        return isset($this->loyaltyPointsAccruals[$index]);
    }

    /**
     * unset loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPointsAccruals($index)
    {
        unset($this->loyaltyPointsAccruals[$index]);
    }

    /**
     * Gets as loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @return \Recranet\OTA\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[]
     */
    public function getLoyaltyPointsAccruals()
    {
        return $this->loyaltyPointsAccruals;
    }

    /**
     * Sets a new loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param \Recranet\OTA\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $loyaltyPointsAccruals
     * @return self
     */
    public function setLoyaltyPointsAccruals(array $loyaltyPointsAccruals = null)
    {
        $this->loyaltyPointsAccruals = $loyaltyPointsAccruals;
        return $this;
    }

    /**
     * Adds as revenueCategory
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @return self
     * @param \Recranet\OTA\RevenueCategoryType $revenueCategory
     */
    public function addToRevenueCategories(\Recranet\OTA\RevenueCategoryType $revenueCategory)
    {
        $this->revenueCategories[] = $revenueCategory;
        return $this;
    }

    /**
     * isset revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueCategories($index)
    {
        return isset($this->revenueCategories[$index]);
    }

    /**
     * unset revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueCategories($index)
    {
        unset($this->revenueCategories[$index]);
    }

    /**
     * Gets as revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @return \Recranet\OTA\RevenueCategoryType[]
     */
    public function getRevenueCategories()
    {
        return $this->revenueCategories;
    }

    /**
     * Sets a new revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param \Recranet\OTA\RevenueCategoryType[] $revenueCategories
     * @return self
     */
    public function setRevenueCategories(array $revenueCategories = null)
    {
        $this->revenueCategories = $revenueCategories;
        return $this;
    }

    /**
     * Gets as reservationID
     *
     * The confirmation number of the reservation associated with the stay.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * The confirmation number of the reservation associated with the stay.
     *
     * @param \Recranet\OTA\UniqueIDType $reservationID
     * @return self
     */
    public function setReservationID(?\Recranet\OTA\UniqueIDType $reservationID = null)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as hotelReservation
     *
     * Contains the reservation details associated with the stay information.
     *
     * @return \Recranet\OTA\HotelReservationType
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * Contains the reservation details associated with the stay information.
     *
     * @param \Recranet\OTA\HotelReservationType $hotelReservation
     * @return self
     */
    public function setHotelReservation(?\Recranet\OTA\HotelReservationType $hotelReservation = null)
    {
        $this->hotelReservation = $hotelReservation;
        return $this;
    }
}

