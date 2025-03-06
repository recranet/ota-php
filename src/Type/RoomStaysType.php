<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomStaysType
 *
 * A collection of RoomStay objects. Room stays associated with this reservation.
 * XSD Type: RoomStaysType
 */
class RoomStaysType
{
    /**
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @var \Recranet\OTA\Type\RoomStaysType\RoomStayAType[] $roomStay
     */
    private $roomStay = [
        
    ];

    /**
     * Adds as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomStaysType\RoomStayAType $roomStay
     */
    public function addToRoomStay(\Recranet\OTA\Type\RoomStaysType\RoomStayAType $roomStay)
    {
        $this->roomStay[] = $roomStay;
        return $this;
    }

    /**
     * isset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @return \Recranet\OTA\Type\RoomStaysType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *  A collection of reference place holders. This is a reference placeholder, used as an index for the reservation guests.
     * A collection of Hotel Service reference placeholders.
     *
     * @param \Recranet\OTA\Type\RoomStaysType\RoomStayAType[] $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay)
    {
        $this->roomStay = $roomStay;
        return $this;
    }
}

