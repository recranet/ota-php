<?php

namespace Recranet\OTA\Type;

use Recranet\OTA\Type\OTAHotelGetMsgRS\OTAHotelGetMsgRSAType;

/**
 * Class representing OTAHotelGetMsgRS
 *
 * Returns acknowledgement that the request has been successfully received, or includes Warnings from business processing rules or errors if the request did not succeed. It will additionally include the re-submission of the requested data as it was sent in its original form. Since the request could be for any original message, the response data is included in MessageContent.
 */
class OTAHotelGetMsgRS extends OTAHotelGetMsgRSAType
{
}

