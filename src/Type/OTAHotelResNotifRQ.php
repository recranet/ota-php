<?php

namespace Recranet\OTA\Type;

use Recranet\OTA\Type\OTAHotelResNotifRQ\OTAHotelResNotifRQAType;

/**
 * Class representing OTAHotelResNotifRQ
 *
 * This message supports the functionality of updating other systems with reservation data. The message assumes a push model, with the originating system pushing the data to another system. The originating system would usually be a booking source, such as a Global Distribution System (GDS), a Central Reservation System (CRS) or some other agent of the hotel.
 */
class OTAHotelResNotifRQ extends OTAHotelResNotifRQAType
{
}

