<?php

namespace Recranet\OTA;

/**
 * Class representing OTAHotelResRS
 *
 * This message could be used to respond to a OTA_HotelResRQ.xsd or the OTA_ReadRQ.xsd. The response to a booking request is either Yes or No based upon the availability. The hotel PMS or CRS system responds back attaching a confirmation number or additional information such as the reservation ID, etc. when the response is affirmative. Additional information, such as the count of Loyalty Program miles or points to be awarded for the hotel stay, can be added to the Reservation object in the return. Supplementary data for the reservation can be added later, once the reservation has been confirmed and the inventory held.
 */
class OTAHotelResRS extends HotelResResponseType
{
}

