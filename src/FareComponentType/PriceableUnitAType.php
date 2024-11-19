<?php

namespace Recranet\OTA\FareComponentType;

/**
 * Class representing PriceableUnitAType
 */
class PriceableUnitAType
{
    /**
     * A sequential number representing the priceable unit in which the fare component resides.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @var \Recranet\OTA\FareComponentType\PriceableUnitAType\FareComponentDetailAType[] $fareComponentDetail
     */
    private $fareComponentDetail = [
        
    ];

    /**
     * Gets as number
     *
     * A sequential number representing the priceable unit in which the fare component resides.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A sequential number representing the priceable unit in which the fare component resides.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Adds as fareComponentDetail
     *
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @return self
     * @param \Recranet\OTA\FareComponentType\PriceableUnitAType\FareComponentDetailAType $fareComponentDetail
     */
    public function addToFareComponentDetail(\Recranet\OTA\FareComponentType\PriceableUnitAType\FareComponentDetailAType $fareComponentDetail)
    {
        $this->fareComponentDetail[] = $fareComponentDetail;
        return $this;
    }

    /**
     * isset fareComponentDetail
     *
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareComponentDetail($index)
    {
        return isset($this->fareComponentDetail[$index]);
    }

    /**
     * unset fareComponentDetail
     *
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareComponentDetail($index)
    {
        unset($this->fareComponentDetail[$index]);
    }

    /**
     * Gets as fareComponentDetail
     *
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @return \Recranet\OTA\FareComponentType\PriceableUnitAType\FareComponentDetailAType[]
     */
    public function getFareComponentDetail()
    {
        return $this->fareComponentDetail;
    }

    /**
     * Sets a new fareComponentDetail
     *
     * Component number, tariff number, rule number, fare owner, waiver code, PTC, rule code, fare basis code, ticket designator. ticket designator qualifier, and agreement code.
     *
     * @param \Recranet\OTA\FareComponentType\PriceableUnitAType\FareComponentDetailAType[] $fareComponentDetail
     * @return self
     */
    public function setFareComponentDetail(array $fareComponentDetail)
    {
        $this->fareComponentDetail = $fareComponentDetail;
        return $this;
    }
}

