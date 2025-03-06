<?php

namespace Recranet\OTA\Type;

use Recranet\OTA\Type\OTAHotelDescriptiveContentNotifRQ\OTAHotelDescriptiveContentNotifRQAType;

/**
 * Class representing OTAHotelDescriptiveContentNotifRQ
 *
 * The Hotel Descriptive Content Notification is a broadcast message used to publicize detailed descriptive information about a hotel property by standardized data categories. Likewise, static information about a hotel property can be obtained by using the Hotel Search Request and/or Hotel Availability Request to search for static information by category, using codes agreed upon between trading partners to request more detail about a hotel. The Hotel Descriptive Content interface enables accessing hotel data in both a push and pull format in order to avoid storing the data at multiple locations. In most cases, the hotel property is the owner of the data and is in charge of updating it, and sends out a broadcast message as a full overlay replacing previous information or a partial update message modification to make changes or portions of the data.
 */
class OTAHotelDescriptiveContentNotifRQ extends OTAHotelDescriptiveContentNotifRQAType
{
}

