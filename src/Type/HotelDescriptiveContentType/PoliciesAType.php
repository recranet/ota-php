<?php

namespace Recranet\OTA\Type\HotelDescriptiveContentType;

use Recranet\OTA\Type\PoliciesType;

/**
 * Class representing PoliciesAType
 */
class PoliciesAType extends PoliciesType
{
    /**
     * If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     *
     * @var bool $guaranteeRoomTypeViaGDS
     */
    private $guaranteeRoomTypeViaGDS = null;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     *
     * @var bool $guaranteeRoomTypeViaCRC
     */
    private $guaranteeRoomTypeViaCRC = null;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by the property.
     *
     * @var bool $guaranteeRoomTypeViaProperty
     */
    private $guaranteeRoomTypeViaProperty = null;

    /**
     * Gets as guaranteeRoomTypeViaGDS
     *
     * If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     *
     * @return bool
     */
    public function getGuaranteeRoomTypeViaGDS()
    {
        return $this->guaranteeRoomTypeViaGDS;
    }

    /**
     * Sets a new guaranteeRoomTypeViaGDS
     *
     * If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     *
     * @param bool $guaranteeRoomTypeViaGDS
     * @return self
     */
    public function setGuaranteeRoomTypeViaGDS($guaranteeRoomTypeViaGDS)
    {
        $this->guaranteeRoomTypeViaGDS = $guaranteeRoomTypeViaGDS;
        return $this;
    }

    /**
     * Gets as guaranteeRoomTypeViaCRC
     *
     * If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     *
     * @return bool
     */
    public function getGuaranteeRoomTypeViaCRC()
    {
        return $this->guaranteeRoomTypeViaCRC;
    }

    /**
     * Sets a new guaranteeRoomTypeViaCRC
     *
     * If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     *
     * @param bool $guaranteeRoomTypeViaCRC
     * @return self
     */
    public function setGuaranteeRoomTypeViaCRC($guaranteeRoomTypeViaCRC)
    {
        $this->guaranteeRoomTypeViaCRC = $guaranteeRoomTypeViaCRC;
        return $this;
    }

    /**
     * Gets as guaranteeRoomTypeViaProperty
     *
     * If true, indicates that room types can be guaranteed on reservations booked by the property.
     *
     * @return bool
     */
    public function getGuaranteeRoomTypeViaProperty()
    {
        return $this->guaranteeRoomTypeViaProperty;
    }

    /**
     * Sets a new guaranteeRoomTypeViaProperty
     *
     * If true, indicates that room types can be guaranteed on reservations booked by the property.
     *
     * @param bool $guaranteeRoomTypeViaProperty
     * @return self
     */
    public function setGuaranteeRoomTypeViaProperty($guaranteeRoomTypeViaProperty)
    {
        $this->guaranteeRoomTypeViaProperty = $guaranteeRoomTypeViaProperty;
        return $this;
    }
}

