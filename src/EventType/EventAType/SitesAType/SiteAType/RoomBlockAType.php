<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType\SiteAType;

/**
 * Class representing RoomBlockAType
 */
class RoomBlockAType
{
    /**
     * Total number of room nights needed.
     *
     * @var int $totalRoomNightQuantity
     */
    private $totalRoomNightQuantity = null;

    /**
     * Total number of rooms needed on the peak night.
     *
     * @var int $peakRoomNightQuantity
     */
    private $peakRoomNightQuantity = null;

    /**
     * When true, indicates that a rebate, assessment or commission exists. When false, rebates, assessments or commissions do not exist.
     *
     * @var bool $concessionsIndicator
     */
    private $concessionsIndicator = null;

    /**
     * A third party housing providor name.
     *
     * @var string $housingProviderName
     */
    private $housingProviderName = null;

    /**
     * Information regarding the reservation method.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\ReservationMethodAType[] $reservationMethod
     */
    private $reservationMethod = [
        
    ];

    /**
     * A collection of stay days.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType $stayDays
     */
    private $stayDays = null;

    /**
     * Gets as totalRoomNightQuantity
     *
     * Total number of room nights needed.
     *
     * @return int
     */
    public function getTotalRoomNightQuantity()
    {
        return $this->totalRoomNightQuantity;
    }

    /**
     * Sets a new totalRoomNightQuantity
     *
     * Total number of room nights needed.
     *
     * @param int $totalRoomNightQuantity
     * @return self
     */
    public function setTotalRoomNightQuantity($totalRoomNightQuantity)
    {
        $this->totalRoomNightQuantity = $totalRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night.
     *
     * @return int
     */
    public function getPeakRoomNightQuantity()
    {
        return $this->peakRoomNightQuantity;
    }

    /**
     * Sets a new peakRoomNightQuantity
     *
     * Total number of rooms needed on the peak night.
     *
     * @param int $peakRoomNightQuantity
     * @return self
     */
    public function setPeakRoomNightQuantity($peakRoomNightQuantity)
    {
        $this->peakRoomNightQuantity = $peakRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as concessionsIndicator
     *
     * When true, indicates that a rebate, assessment or commission exists. When false, rebates, assessments or commissions do not exist.
     *
     * @return bool
     */
    public function getConcessionsIndicator()
    {
        return $this->concessionsIndicator;
    }

    /**
     * Sets a new concessionsIndicator
     *
     * When true, indicates that a rebate, assessment or commission exists. When false, rebates, assessments or commissions do not exist.
     *
     * @param bool $concessionsIndicator
     * @return self
     */
    public function setConcessionsIndicator($concessionsIndicator)
    {
        $this->concessionsIndicator = $concessionsIndicator;
        return $this;
    }

    /**
     * Gets as housingProviderName
     *
     * A third party housing providor name.
     *
     * @return string
     */
    public function getHousingProviderName()
    {
        return $this->housingProviderName;
    }

    /**
     * Sets a new housingProviderName
     *
     * A third party housing providor name.
     *
     * @param string $housingProviderName
     * @return self
     */
    public function setHousingProviderName($housingProviderName)
    {
        $this->housingProviderName = $housingProviderName;
        return $this;
    }

    /**
     * Adds as reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\ReservationMethodAType $reservationMethod
     */
    public function addToReservationMethod(\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\ReservationMethodAType $reservationMethod)
    {
        $this->reservationMethod[] = $reservationMethod;
        return $this;
    }

    /**
     * isset reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReservationMethod($index)
    {
        return isset($this->reservationMethod[$index]);
    }

    /**
     * unset reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReservationMethod($index)
    {
        unset($this->reservationMethod[$index]);
    }

    /**
     * Gets as reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\ReservationMethodAType[]
     */
    public function getReservationMethod()
    {
        return $this->reservationMethod;
    }

    /**
     * Sets a new reservationMethod
     *
     * Information regarding the reservation method.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\ReservationMethodAType[] $reservationMethod
     * @return self
     */
    public function setReservationMethod(array $reservationMethod = null)
    {
        $this->reservationMethod = $reservationMethod;
        return $this;
    }

    /**
     * Gets as stayDays
     *
     * A collection of stay days.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType
     */
    public function getStayDays()
    {
        return $this->stayDays;
    }

    /**
     * Sets a new stayDays
     *
     * A collection of stay days.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType $stayDays
     * @return self
     */
    public function setStayDays(?\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType $stayDays = null)
    {
        $this->stayDays = $stayDays;
        return $this;
    }
}

