<?php

namespace Recranet\OTA\Type;

use Recranet\OTA\Type\OTAHotelCacheChangeNotifRQ\OTAHotelCacheChangeNotifRQAType;

/**
 * Class representing OTAHotelCacheChangeNotifRQ
 *
 * The OpenTravel Hotel Cache Change Notification message set allows a hotel supplier to push their changed hotel rates and availability information to a trading partner that caches their hotel rates and availability information and have the trading partner send an acknowledgement message that they received the information.
 *
 * Note that this message set is designed to allow the trading partner to receive the changed rates and availability information from the supplier so the trading partner can create a subsequent targeted Hotel Availability Request message that only requests the specific supplier data that has changed and needs to be updated in the trading partner cache.
 *
 * Hotel Cache Change Notification Request information includes:
 *
 * -Point of sale information for the requestor
 * -Unique identifier information that allows trading partners to uniquely identify each Hotel Cache Change Notification Request message for transaction tracing purposes
 * -Destination system information that specifies a receiving system for the message information
 * -Cache change information-which specifies what hotel supplier data has changed and should be updated in the trading partners system via a subsequent OTA_HotelAvailRQ message-including:
 * ----Chain, brand and hotel codes
 * ----The start and end date of information that should be updated in the cache for the associated @HotelCode and an optional "change date mask" that indicates if there are changes in all or a portion of the returned date range; including Length of stay that indicates how many days of availability from start date should be shopped; and Full Pattern Length Of Stay to indicate which days from start date should be shopped
 * ----Other changed product details, including rate plan and promotion details
 */
class OTAHotelCacheChangeNotifRQ extends OTAHotelCacheChangeNotifRQAType
{
}

