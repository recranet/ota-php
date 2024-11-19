<?php

namespace Recranet\OTA\AirlinePrefType;

/**
 * Class representing TourCodePrefAType
 */
class TourCodePrefAType
{
    /**
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @var string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @var string[] $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @var string $transferAction
     */
    private $transferAction = null;

    /**
     * Provides the tour code.
     *
     * @var \Recranet\OTA\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType $tourCodeInfo
     */
    private $tourCodeInfo = null;

    /**
     * Provides a tour code for airline staff.
     *
     * @var \Recranet\OTA\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType $staffTourCodeInfo
     */
    private $staffTourCodeInfo = null;

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;
        return $this;
    }

    /**
     * Adds as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @return self
     * @param string $airlineVendorPrefRPH
     */
    public function addToAirlineVendorPrefRPH($airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH[] = $airlineVendorPrefRPH;
        return $this;
    }

    /**
     * isset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirlineVendorPrefRPH($index)
    {
        return isset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * unset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirlineVendorPrefRPH($index)
    {
        unset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * Gets as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @return string[]
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->airlineVendorPrefRPH;
    }

    /**
     * Sets a new airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param string $airlineVendorPrefRPH
     * @return self
     */
    public function setAirlineVendorPrefRPH(array $airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;
        return $this;
    }

    /**
     * Gets as tourCodeInfo
     *
     * Provides the tour code.
     *
     * @return \Recranet\OTA\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType
     */
    public function getTourCodeInfo()
    {
        return $this->tourCodeInfo;
    }

    /**
     * Sets a new tourCodeInfo
     *
     * Provides the tour code.
     *
     * @param \Recranet\OTA\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType $tourCodeInfo
     * @return self
     */
    public function setTourCodeInfo(?\Recranet\OTA\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType $tourCodeInfo = null)
    {
        $this->tourCodeInfo = $tourCodeInfo;
        return $this;
    }

    /**
     * Gets as staffTourCodeInfo
     *
     * Provides a tour code for airline staff.
     *
     * @return \Recranet\OTA\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType
     */
    public function getStaffTourCodeInfo()
    {
        return $this->staffTourCodeInfo;
    }

    /**
     * Sets a new staffTourCodeInfo
     *
     * Provides a tour code for airline staff.
     *
     * @param \Recranet\OTA\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType $staffTourCodeInfo
     * @return self
     */
    public function setStaffTourCodeInfo(?\Recranet\OTA\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType $staffTourCodeInfo = null)
    {
        $this->staffTourCodeInfo = $staffTourCodeInfo;
        return $this;
    }
}

