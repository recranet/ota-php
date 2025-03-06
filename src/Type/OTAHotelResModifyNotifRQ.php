<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OTAHotelResModifyNotifRQ
 *
 * This is a notification request message (push message) for reservations that were modified. It is used for a full overlay of the reservation. When changing data that requires an availability check, this message assumes the availability is known (if availability is not known an availability check containing the reservation ID may be useful).
 */
class OTAHotelResModifyNotifRQ extends HotelResModifyRequestType
{
}

