<?php

namespace Recranet\OTA;

use Recranet\OTA\OTAHotelResRQ\OTAHotelResRQAType;

/**
 * Class representing OTAHotelResRQ
 *
 * This message sends a request for a reservation to another system.There is no requirement to determine availability prior to sending a reservation request. Travel agencies, or individual guests may send a request to book a reservation from an internet site if all the information required for booking is known. The OTA_HotelResRQ message can initiate the first message in the sequence of booking a reservation.
 */
class OTAHotelResRQ extends OTAHotelResRQAType
{
}

