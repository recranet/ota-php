<?php

namespace Recranet\OTA\Type\SeatMapQueryType;

/**
 * Class representing SeatDetailsAType
 */
class SeatDetailsAType
{
    /**
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and the seat map response expected is after the upgrade, if applicable.
     *
     *  false
     *
     * @var bool $seatUpgradeInd
     */
    private $seatUpgradeInd = null;

    /**
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @var \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\CabinClassAType[] $cabinClass
     */
    private $cabinClass = [
        
    ];

    /**
     * A collection of ResBookDesignations.
     *
     * @var \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[] $resBookDesignations
     */
    private $resBookDesignations = null;

    /**
     * Fare basis code associated with the seat that may be associated with a flight segment.
     *
     * @var \Recranet\OTA\Type\FareBasisCodeType $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Gets as seatUpgradeInd
     *
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and the seat map response expected is after the upgrade, if applicable.
     *
     *  false
     *
     * @return bool
     */
    public function getSeatUpgradeInd()
    {
        return $this->seatUpgradeInd;
    }

    /**
     * Sets a new seatUpgradeInd
     *
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and the seat map response expected is after the upgrade, if applicable.
     *
     *  false
     *
     * @param bool $seatUpgradeInd
     * @return self
     */
    public function setSeatUpgradeInd($seatUpgradeInd)
    {
        $this->seatUpgradeInd = $seatUpgradeInd;
        return $this;
    }

    /**
     * Adds as cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @return self
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\CabinClassAType $cabinClass
     */
    public function addToCabinClass(\Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\CabinClassAType $cabinClass)
    {
        $this->cabinClass[] = $cabinClass;
        return $this;
    }

    /**
     * isset cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCabinClass($index)
    {
        return isset($this->cabinClass[$index]);
    }

    /**
     * unset cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCabinClass($index)
    {
        unset($this->cabinClass[$index]);
    }

    /**
     * Gets as cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @return \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\CabinClassAType[]
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
    }

    /**
     * Sets a new cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin class can be specified in this element.
     *
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\CabinClassAType[] $cabinClass
     * @return self
     */
    public function setCabinClass(array $cabinClass = null)
    {
        $this->cabinClass = $cabinClass;
        return $this;
    }

    /**
     * Adds as resBookDesignation
     *
     * A collection of ResBookDesignations.
     *
     * @return self
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation
     */
    public function addToResBookDesignations(\Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation)
    {
        $this->resBookDesignations[] = $resBookDesignation;
        return $this;
    }

    /**
     * isset resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResBookDesignations($index)
    {
        return isset($this->resBookDesignations[$index]);
    }

    /**
     * unset resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResBookDesignations($index)
    {
        unset($this->resBookDesignations[$index]);
    }

    /**
     * Gets as resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @return \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     */
    public function getResBookDesignations()
    {
        return $this->resBookDesignations;
    }

    /**
     * Sets a new resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[] $resBookDesignations
     * @return self
     */
    public function setResBookDesignations(array $resBookDesignations = null)
    {
        $this->resBookDesignations = $resBookDesignations;
        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight segment.
     *
     * @return \Recranet\OTA\Type\FareBasisCodeType
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight segment.
     *
     * @param \Recranet\OTA\Type\FareBasisCodeType $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(?\Recranet\OTA\Type\FareBasisCodeType $fareBasisCode = null)
    {
        $this->fareBasisCode = $fareBasisCode;
        return $this;
    }
}

