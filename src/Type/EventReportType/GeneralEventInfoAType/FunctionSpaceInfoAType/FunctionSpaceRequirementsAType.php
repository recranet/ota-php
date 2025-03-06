<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType;

/**
 * Class representing FunctionSpaceRequirementsAType
 */
class FunctionSpaceRequirementsAType
{
    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Defines a particular function space need. Used in conjunction with quantity to define the number of the item(s) needed.
     *
     * @var string $requirement
     */
    private $requirement = null;

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as requirement
     *
     * Defines a particular function space need. Used in conjunction with quantity to define the number of the item(s) needed.
     *
     * @return string
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * Defines a particular function space need. Used in conjunction with quantity to define the number of the item(s) needed.
     *
     * @param string $requirement
     * @return self
     */
    public function setRequirement($requirement)
    {
        $this->requirement = $requirement;
        return $this;
    }
}

