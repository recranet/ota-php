<?php

namespace Recranet\OTA;

use Recranet\OTA\OTAHotelCacheChangeNotifRS\OTAHotelCacheChangeNotifRSAType;

/**
 * Class representing OTAHotelCacheChangeNotifRS
 *
 * The Hotel Cache Change Notification Response message may return:
 *
 * -A success indicator (indicating that the message was successfully received and processed)
 * -A business warning (indicating that some portion of the message processing generated a business condition)
 * -An error response that may indicate why the message could not be processed)
 */
class OTAHotelCacheChangeNotifRS extends OTAHotelCacheChangeNotifRSAType
{
}

