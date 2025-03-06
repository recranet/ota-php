<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RailPassengerShopTypeDEPRECATEType
 *
 * Classification of passenger demographics and rate qualifying information with passenger category quantity and reference place holder.
 * XSD Type: RailPassengerShopType_DEPRECATE
 */
class RailPassengerShopTypeDEPRECATEType
{
    /**
     * If TRUE, an infant is accompanying a passenger.
     *
     * @var bool $accompaniedByInfantInd
     */
    private $accompaniedByInfantInd = null;

    /**
     * Identifies the gender.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * The passenger occupation.
     *
     * @var \Recranet\OTA\Type\RailPassengerOccupationType $occupation
     */
    private $occupation = null;

    /**
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @var \Recranet\OTA\Type\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[] $passengerQualifyingInfo
     */
    private $passengerQualifyingInfo = [
        
    ];

    /**
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @var string[] $aDARequirement
     */
    private $aDARequirement = [
        
    ];

    /**
     * Gets as accompaniedByInfantInd
     *
     * If TRUE, an infant is accompanying a passenger.
     *
     * @return bool
     */
    public function getAccompaniedByInfantInd()
    {
        return $this->accompaniedByInfantInd;
    }

    /**
     * Sets a new accompaniedByInfantInd
     *
     * If TRUE, an infant is accompanying a passenger.
     *
     * @param bool $accompaniedByInfantInd
     * @return self
     */
    public function setAccompaniedByInfantInd($accompaniedByInfantInd)
    {
        $this->accompaniedByInfantInd = $accompaniedByInfantInd;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as occupation
     *
     * The passenger occupation.
     *
     * @return \Recranet\OTA\Type\RailPassengerOccupationType
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Sets a new occupation
     *
     * The passenger occupation.
     *
     * @param \Recranet\OTA\Type\RailPassengerOccupationType $occupation
     * @return self
     */
    public function setOccupation(?\Recranet\OTA\Type\RailPassengerOccupationType $occupation = null)
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * Adds as passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @return self
     * @param \Recranet\OTA\Type\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType $passengerQualifyingInfo
     */
    public function addToPassengerQualifyingInfo(\Recranet\OTA\Type\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType $passengerQualifyingInfo)
    {
        $this->passengerQualifyingInfo[] = $passengerQualifyingInfo;
        return $this;
    }

    /**
     * isset passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerQualifyingInfo($index)
    {
        return isset($this->passengerQualifyingInfo[$index]);
    }

    /**
     * unset passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerQualifyingInfo($index)
    {
        unset($this->passengerQualifyingInfo[$index]);
    }

    /**
     * Gets as passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @return \Recranet\OTA\Type\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[]
     */
    public function getPassengerQualifyingInfo()
    {
        return $this->passengerQualifyingInfo;
    }

    /**
     * Sets a new passengerQualifyingInfo
     *
     * Age qualifying information for the passenger. Refer to OpenTravel code list Rail Passenger Type Code (PXC).
     *
     * @param \Recranet\OTA\Type\RailPassengerShopTypeDEPRECATEType\PassengerQualifyingInfoAType[] $passengerQualifyingInfo
     * @return self
     */
    public function setPassengerQualifyingInfo(array $passengerQualifyingInfo = null)
    {
        $this->passengerQualifyingInfo = $passengerQualifyingInfo;
        return $this;
    }

    /**
     * Adds as aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @return self
     * @param string $aDARequirement
     */
    public function addToADARequirement($aDARequirement)
    {
        $this->aDARequirement[] = $aDARequirement;
        return $this;
    }

    /**
     * isset aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetADARequirement($index)
    {
        return isset($this->aDARequirement[$index]);
    }

    /**
     * unset aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetADARequirement($index)
    {
        unset($this->aDARequirement[$index]);
    }

    /**
     * Gets as aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @return string[]
     */
    public function getADARequirement()
    {
        return $this->aDARequirement;
    }

    /**
     * Sets a new aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY) code list.
     *
     * @param string $aDARequirement
     * @return self
     */
    public function setADARequirement(array $aDARequirement = null)
    {
        $this->aDARequirement = $aDARequirement;
        return $this;
    }
}

