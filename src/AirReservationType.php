<?php

namespace Recranet\OTA;

/**
 * Class representing AirReservationType
 *
 * Contains all booking response information pertaining to a completed reservation.
 * XSD Type: AirReservationType
 */
class AirReservationType
{
    /**
     * Specifies the date the reservation was last modified.
     *
     * @var \DateTime $lastModified
     */
    private $lastModified = null;

    /**
     * A collection of all flight segments requested for booking.
     *
     * @var \Recranet\OTA\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @var \Recranet\OTA\BookingPriceInfoType $priceInfo
     */
    private $priceInfo = null;

    /**
     * All traveler information relevant to a booking request.
     *
     * @var \Recranet\OTA\TravelerInfoType $travelerInfo
     */
    private $travelerInfo = null;

    /**
     * All customer information relevant to a booking request. Note a customer is defined as a person or entity associated with an air trip who will not be traveling. This is generally used to describe an individual or company paying for a ticket or making the travel plans.
     *
     * @var \Recranet\OTA\AirArrangerType $arrangerInfo
     */
    private $arrangerInfo = null;

    /**
     * All payment information relevant to a booking request.
     *
     * @var \Recranet\OTA\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @var \Recranet\OTA\TicketingInfoType[] $ticketing
     */
    private $ticketing = [
        
    ];

    /**
     * A container for queue information.
     *
     * @var \Recranet\OTA\AirReservationType\QueuesAType\QueueAType[] $queues
     */
    private $queues = null;

    /**
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @var \Recranet\OTA\AirReservationType\BookingReferenceIDAType[] $bookingReferenceID
     */
    private $bookingReferenceID = [
        
    ];

    /**
     * Textual information for the reservation.
     *
     * @var \Recranet\OTA\FormattedTextTextType $comment
     */
    private $comment = null;

    /**
     * Information applicable to the pricing of the reservation.
     *
     * @var \Recranet\OTA\AirReservationType\PricingOverviewAType $pricingOverview
     */
    private $pricingOverview = null;

    /**
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @var \Recranet\OTA\EMDType[] $eMDInfo
     */
    private $eMDInfo = [
        
    ];

    /**
     * Gets as lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @param \DateTime $lastModified
     * @return self
     */
    public function setLastModified(\DateTime $lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @return \Recranet\OTA\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @param \Recranet\OTA\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(?\Recranet\OTA\AirItineraryType $airItinerary = null)
    {
        $this->airItinerary = $airItinerary;
        return $this;
    }

    /**
     * Gets as priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @return \Recranet\OTA\BookingPriceInfoType
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @param \Recranet\OTA\BookingPriceInfoType $priceInfo
     * @return self
     */
    public function setPriceInfo(?\Recranet\OTA\BookingPriceInfoType $priceInfo = null)
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * Gets as travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @return \Recranet\OTA\TravelerInfoType
     */
    public function getTravelerInfo()
    {
        return $this->travelerInfo;
    }

    /**
     * Sets a new travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @param \Recranet\OTA\TravelerInfoType $travelerInfo
     * @return self
     */
    public function setTravelerInfo(?\Recranet\OTA\TravelerInfoType $travelerInfo = null)
    {
        $this->travelerInfo = $travelerInfo;
        return $this;
    }

    /**
     * Gets as arrangerInfo
     *
     * All customer information relevant to a booking request. Note a customer is defined as a person or entity associated with an air trip who will not be traveling. This is generally used to describe an individual or company paying for a ticket or making the travel plans.
     *
     * @return \Recranet\OTA\AirArrangerType
     */
    public function getArrangerInfo()
    {
        return $this->arrangerInfo;
    }

    /**
     * Sets a new arrangerInfo
     *
     * All customer information relevant to a booking request. Note a customer is defined as a person or entity associated with an air trip who will not be traveling. This is generally used to describe an individual or company paying for a ticket or making the travel plans.
     *
     * @param \Recranet\OTA\AirArrangerType $arrangerInfo
     * @return self
     */
    public function setArrangerInfo(?\Recranet\OTA\AirArrangerType $arrangerInfo = null)
    {
        $this->arrangerInfo = $arrangerInfo;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @return \Recranet\OTA\FulfillmentType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @param \Recranet\OTA\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(?\Recranet\OTA\FulfillmentType $fulfillment = null)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * Adds as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @return self
     * @param \Recranet\OTA\TicketingInfoType $ticketing
     */
    public function addToTicketing(\Recranet\OTA\TicketingInfoType $ticketing)
    {
        $this->ticketing[] = $ticketing;
        return $this;
    }

    /**
     * isset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketing($index)
    {
        return isset($this->ticketing[$index]);
    }

    /**
     * unset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketing($index)
    {
        unset($this->ticketing[$index]);
    }

    /**
     * Gets as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @return \Recranet\OTA\TicketingInfoType[]
     */
    public function getTicketing()
    {
        return $this->ticketing;
    }

    /**
     * Sets a new ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param \Recranet\OTA\TicketingInfoType[] $ticketing
     * @return self
     */
    public function setTicketing(array $ticketing = null)
    {
        $this->ticketing = $ticketing;
        return $this;
    }

    /**
     * Adds as queue
     *
     * A container for queue information.
     *
     * @return self
     * @param \Recranet\OTA\AirReservationType\QueuesAType\QueueAType $queue
     */
    public function addToQueues(\Recranet\OTA\AirReservationType\QueuesAType\QueueAType $queue)
    {
        $this->queues[] = $queue;
        return $this;
    }

    /**
     * isset queues
     *
     * A container for queue information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQueues($index)
    {
        return isset($this->queues[$index]);
    }

    /**
     * unset queues
     *
     * A container for queue information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQueues($index)
    {
        unset($this->queues[$index]);
    }

    /**
     * Gets as queues
     *
     * A container for queue information.
     *
     * @return \Recranet\OTA\AirReservationType\QueuesAType\QueueAType[]
     */
    public function getQueues()
    {
        return $this->queues;
    }

    /**
     * Sets a new queues
     *
     * A container for queue information.
     *
     * @param \Recranet\OTA\AirReservationType\QueuesAType\QueueAType[] $queues
     * @return self
     */
    public function setQueues(array $queues = null)
    {
        $this->queues = $queues;
        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @return self
     * @param \Recranet\OTA\AirReservationType\BookingReferenceIDAType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Recranet\OTA\AirReservationType\BookingReferenceIDAType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;
        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @return \Recranet\OTA\AirReservationType\BookingReferenceIDAType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param \Recranet\OTA\AirReservationType\BookingReferenceIDAType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID = null)
    {
        $this->bookingReferenceID = $bookingReferenceID;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Textual information for the reservation.
     *
     * @return \Recranet\OTA\FormattedTextTextType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Textual information for the reservation.
     *
     * @param \Recranet\OTA\FormattedTextTextType $comment
     * @return self
     */
    public function setComment(?\Recranet\OTA\FormattedTextTextType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @return \Recranet\OTA\AirReservationType\PricingOverviewAType
     */
    public function getPricingOverview()
    {
        return $this->pricingOverview;
    }

    /**
     * Sets a new pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @param \Recranet\OTA\AirReservationType\PricingOverviewAType $pricingOverview
     * @return self
     */
    public function setPricingOverview(?\Recranet\OTA\AirReservationType\PricingOverviewAType $pricingOverview = null)
    {
        $this->pricingOverview = $pricingOverview;
        return $this;
    }

    /**
     * Adds as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @return self
     * @param \Recranet\OTA\EMDType $eMDInfo
     */
    public function addToEMDInfo(\Recranet\OTA\EMDType $eMDInfo)
    {
        $this->eMDInfo[] = $eMDInfo;
        return $this;
    }

    /**
     * isset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEMDInfo($index)
    {
        return isset($this->eMDInfo[$index]);
    }

    /**
     * unset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEMDInfo($index)
    {
        unset($this->eMDInfo[$index]);
    }

    /**
     * Gets as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @return \Recranet\OTA\EMDType[]
     */
    public function getEMDInfo()
    {
        return $this->eMDInfo;
    }

    /**
     * Sets a new eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously issued EMD.
     *
     * @param \Recranet\OTA\EMDType[] $eMDInfo
     * @return self
     */
    public function setEMDInfo(array $eMDInfo = null)
    {
        $this->eMDInfo = $eMDInfo;
        return $this;
    }
}

