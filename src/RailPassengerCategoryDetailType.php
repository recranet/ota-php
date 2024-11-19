<?php

namespace Recranet\OTA;

/**
 * Class representing RailPassengerCategoryDetailType
 *
 * Category of Passengers with detail information (including name, contact info, travel profile) for passengers make up of a category.
 * XSD Type: RailPassengerCategoryDetailType
 */
class RailPassengerCategoryDetailType extends RailPassengerCategoryType
{
    /**
     * A passenger reference.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * The quantity of passengers in a specific category passenger type.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @var \Recranet\OTA\RailPassengerDetailType[] $passengerDetail
     */
    private $passengerDetail = [
        
    ];

    /**
     * Gets as rPH
     *
     * A passenger reference.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A passenger reference.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of passengers in a specific category passenger type.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of passengers in a specific category passenger type.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as passengerDetail
     *
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @return self
     * @param \Recranet\OTA\RailPassengerDetailType $passengerDetail
     */
    public function addToPassengerDetail(\Recranet\OTA\RailPassengerDetailType $passengerDetail)
    {
        $this->passengerDetail[] = $passengerDetail;
        return $this;
    }

    /**
     * isset passengerDetail
     *
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerDetail($index)
    {
        return isset($this->passengerDetail[$index]);
    }

    /**
     * unset passengerDetail
     *
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerDetail($index)
    {
        unset($this->passengerDetail[$index]);
    }

    /**
     * Gets as passengerDetail
     *
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @return \Recranet\OTA\RailPassengerDetailType[]
     */
    public function getPassengerDetail()
    {
        return $this->passengerDetail;
    }

    /**
     * Sets a new passengerDetail
     *
     * Passenger details including loyalty program, personal identification and email address.
     *
     * @param \Recranet\OTA\RailPassengerDetailType[] $passengerDetail
     * @return self
     */
    public function setPassengerDetail(array $passengerDetail = null)
    {
        $this->passengerDetail = $passengerDetail;
        return $this;
    }
}

