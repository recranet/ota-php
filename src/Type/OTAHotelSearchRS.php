<?php

namespace Recranet\OTA\Type;

use Recranet\OTA\Type\OTAHotelSearchRS\OTAHotelSearchRSAType;

/**
 * Class representing OTAHotelSearchRS
 *
 * This message returns a list of hotel properties that meet the requested criteria and/or Warnings, or Errors if the request did not succeed.
 * Standard way to indicate successful processing of an OpenTravel message
 * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated
 * Standard way to indicate that an error occurred during the processing of an OpenTravel message
 */
class OTAHotelSearchRS extends OTAHotelSearchRSAType
{
}

