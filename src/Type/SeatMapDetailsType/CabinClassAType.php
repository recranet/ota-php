<?php

namespace Recranet\OTA\Type\SeatMapDetailsType;

use Recranet\OTA\Type\CabinClassDetailType;

/**
 * Class representing CabinClassAType
 */
class CabinClassAType extends CabinClassDetailType
{
    /**
     * Specify the starting row number for this cabin class.
     *
     * @var string $startingRow
     */
    private $startingRow = null;

    /**
     * Specify the ending row number for this cabin class.
     *
     * @var string $endingRow
     */
    private $endingRow = null;

    /**
     * Gets as startingRow
     *
     * Specify the starting row number for this cabin class.
     *
     * @return string
     */
    public function getStartingRow()
    {
        return $this->startingRow;
    }

    /**
     * Sets a new startingRow
     *
     * Specify the starting row number for this cabin class.
     *
     * @param string $startingRow
     * @return self
     */
    public function setStartingRow($startingRow)
    {
        $this->startingRow = $startingRow;
        return $this;
    }

    /**
     * Gets as endingRow
     *
     * Specify the ending row number for this cabin class.
     *
     * @return string
     */
    public function getEndingRow()
    {
        return $this->endingRow;
    }

    /**
     * Sets a new endingRow
     *
     * Specify the ending row number for this cabin class.
     *
     * @param string $endingRow
     * @return self
     */
    public function setEndingRow($endingRow)
    {
        $this->endingRow = $endingRow;
        return $this;
    }
}

