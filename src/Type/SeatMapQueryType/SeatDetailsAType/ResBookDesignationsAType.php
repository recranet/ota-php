<?php

namespace Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType;

/**
 * Class representing ResBookDesignationsAType
 */
class ResBookDesignationsAType
{
    /**
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @var \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[] $resBookDesignation
     */
    private $resBookDesignation = [
        
    ];

    /**
     * Adds as resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @return self
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation
     */
    public function addToResBookDesignation(\Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation)
    {
        $this->resBookDesignation[] = $resBookDesignation;
        return $this;
    }

    /**
     * isset resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResBookDesignation($index)
    {
        return isset($this->resBookDesignation[$index]);
    }

    /**
     * unset resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResBookDesignation($index)
    {
        unset($this->resBookDesignation[$index]);
    }

    /**
     * Gets as resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @return \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     */
    public function getResBookDesignation()
    {
        return $this->resBookDesignation;
    }

    /**
     * Sets a new resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular booking designator code (booking class) lies then that booking class can be specified in this element.
     *
     * @param \Recranet\OTA\Type\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[] $resBookDesignation
     * @return self
     */
    public function setResBookDesignation(array $resBookDesignation)
    {
        $this->resBookDesignation = $resBookDesignation;
        return $this;
    }
}

