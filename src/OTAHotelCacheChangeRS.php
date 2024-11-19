<?php

namespace Recranet\OTA;

use Recranet\OTA\OTAHotelCacheChangeRS\OTAHotelCacheChangeRSAType;

/**
 * Class representing OTAHotelCacheChangeRS
 *
 * This message provides response functionality from a query of a trading partners system for hotel inventory items that have availability and/or rate changes and therefore should be updated in a trading partner's cache. The information in this response message will indicate if an OTA_HotelAvailRQ is required to refresh the trading partner's data cache.
 */
class OTAHotelCacheChangeRS extends OTAHotelCacheChangeRSAType
{
}

