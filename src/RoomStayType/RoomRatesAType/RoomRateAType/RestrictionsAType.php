<?php

namespace Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{
    /**
     * Information on the restriction associated with the RoomRate element.
     *
     * @var \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[] $restriction
     */
    private $restriction = [
        
    ];

    /**
     * Adds as restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @return self
     * @param \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction
     */
    public function addToRestriction(\Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction)
    {
        $this->restriction[] = $restriction;
        return $this;
    }

    /**
     * isset restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @return \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param \Recranet\OTA\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[] $restriction
     * @return self
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }
}

