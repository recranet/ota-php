<?php

namespace Recranet\OTA;

use Recranet\OTA\OTAHotelGetMsgRQ\OTAHotelGetMsgRQAType;

/**
 * Class representing OTAHotelGetMsgRQ
 *
 * Sends a request to another system to permit a system that normally receives notifications to ask for a re-transmission of a message. The business model assumes that the requesting system either receives messages that are numbered sequentially, and may ask for a message to be re-sent. In the event that the receiving system receives a message that is not in contiguous numerical sequence, this message set can be used to retrieve missing messages, or to ask for a retransmission of data that for some reason was not cleanly received.
 */
class OTAHotelGetMsgRQ extends OTAHotelGetMsgRQAType
{
}

