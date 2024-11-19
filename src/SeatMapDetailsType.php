<?php

namespace Recranet\OTA;

/**
 * Class representing SeatMapDetailsType
 *
 * Details of a seat map for a particular aircraft
 * XSD Type: SeatMapDetailsType
 */
class SeatMapDetailsType
{
    /**
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @var string[] $travelerRefNumberRPHs
     */
    private $travelerRefNumberRPHs = null;

    /**
     * Describes the Cabin details in a seat map.
     *
     * @var \Recranet\OTA\SeatMapDetailsType\CabinClassAType[] $cabinClass
     */
    private $cabinClass = [
        
    ];

    /**
     * Adds as travelerRefNumberRPHs
     *
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @return self
     * @param string $travelerRefNumberRPHs
     */
    public function addToTravelerRefNumberRPHs($travelerRefNumberRPHs)
    {
        $this->travelerRefNumberRPHs[] = $travelerRefNumberRPHs;
        return $this;
    }

    /**
     * isset travelerRefNumberRPHs
     *
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumberRPHs($index)
    {
        return isset($this->travelerRefNumberRPHs[$index]);
    }

    /**
     * unset travelerRefNumberRPHs
     *
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumberRPHs($index)
    {
        unset($this->travelerRefNumberRPHs[$index]);
    }

    /**
     * Gets as travelerRefNumberRPHs
     *
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @return string[]
     */
    public function getTravelerRefNumberRPHs()
    {
        return $this->travelerRefNumberRPHs;
    }

    /**
     * Sets a new travelerRefNumberRPHs
     *
     * The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     *
     * @param string $travelerRefNumberRPHs
     * @return self
     */
    public function setTravelerRefNumberRPHs(array $travelerRefNumberRPHs)
    {
        $this->travelerRefNumberRPHs = $travelerRefNumberRPHs;
        return $this;
    }

    /**
     * Adds as cabinClass
     *
     * Describes the Cabin details in a seat map.
     *
     * @return self
     * @param \Recranet\OTA\SeatMapDetailsType\CabinClassAType $cabinClass
     */
    public function addToCabinClass(\Recranet\OTA\SeatMapDetailsType\CabinClassAType $cabinClass)
    {
        $this->cabinClass[] = $cabinClass;
        return $this;
    }

    /**
     * isset cabinClass
     *
     * Describes the Cabin details in a seat map.
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
     * Describes the Cabin details in a seat map.
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
     * Describes the Cabin details in a seat map.
     *
     * @return \Recranet\OTA\SeatMapDetailsType\CabinClassAType[]
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
    }

    /**
     * Sets a new cabinClass
     *
     * Describes the Cabin details in a seat map.
     *
     * @param \Recranet\OTA\SeatMapDetailsType\CabinClassAType[] $cabinClass
     * @return self
     */
    public function setCabinClass(array $cabinClass)
    {
        $this->cabinClass = $cabinClass;
        return $this;
    }
}

