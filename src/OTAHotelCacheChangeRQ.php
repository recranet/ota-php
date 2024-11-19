<?php

namespace Recranet\OTA;

use Recranet\OTA\OTAHotelCacheChangeRQ\OTAHotelCacheChangeRQAType;

/**
 * Class representing OTAHotelCacheChangeRQ
 *
 * This message provides request functionality for querying a trading partners system for hotel inventory items that have availability and/or rate changes and therefore should be updated in a trading partner's cache. The information in the response message will indicate if an OTA_HotelAvailRQ is required to refresh the trading partner's data cache.
 */
class OTAHotelCacheChangeRQ extends OTAHotelCacheChangeRQAType
{
}

