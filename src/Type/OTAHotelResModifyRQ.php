<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OTAHotelResModifyRQ
 *
 * This is a request message for modifying a reservation. It is used for a full overlay of the reservation. When changing data that requires an availability check, this message assumes the availability is known (if availability is not known an availability check containing the reservation ID may be useful).
 */
class OTAHotelResModifyRQ extends HotelResModifyRequestType
{
}

