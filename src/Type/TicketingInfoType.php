<?php

namespace Recranet\OTA\Type;

/**
 * Class representing TicketingInfoType
 *
 * Minimum information about ticketing required to complete the booking transaction.
 * XSD Type: TicketingInfoType
 */
class TicketingInfoType
{
    /**
     * TicketTimeLimit - Indicates the ticketing arrangement, and allows for the requirement that an itinerary must be ticketed by a certain date and time.
     *
     * @var \DateTime $ticketTimeLimit
     */
    private $ticketTimeLimit = null;

    /**
     * When true, unticketed bookings should be cancelled when the TicketTimeLimit has expired.
     *
     * @var bool $cancelOnExpiryInd
     */
    private $cancelOnExpiryInd = null;

    /**
     * TicketType - Indicates the type of ticket (Paper, eTicket).
     *
     * @var string $ticketType
     */
    private $ticketType = null;

    /**
     * Code for setting and displaying detailed ticketing information. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @var string $ticketingStatus
     */
    private $ticketingStatus = null;

    /**
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @var string[] $flightSegmentRefNumber
     */
    private $flightSegmentRefNumber = null;

    /**
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @var string[] $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * Applies a reverse sequence of the outbound travel to the inbound travel.
     *
     * @var bool $reverseTktgSegmentsInd
     */
    private $reverseTktgSegmentsInd = null;

    /**
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @var string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * The date on which ticketing should occur.
     *
     * @var \DateTime $requestedTicketingDate
     */
    private $requestedTicketingDate = null;

    /**
     * The number of minutes until the ticket must be issued for the itinerary.
     *
     * @var int $timeLimitMinutes
     */
    private $timeLimitMinutes = null;

    /**
     * Indicates that the booking has changed since this ticket was issued and the two are no longer in sync and identifies what has changed in the booking.
     *
     * @var string $bookingChangeType
     */
    private $bookingChangeType = null;

    /**
     * The ticket document number including the airline code, the form code, and the serial number.
     *
     * @var string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Code used to indicate the ticketing-relevant type of traveler that has been quoted (e.g., MIL, CHD, INF, SEN).
     *
     * @var string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @var string[] $miscTicketingCode
     */
    private $miscTicketingCode = null;

    /**
     * Open text field available for additional ticket information.
     *
     * @var \Recranet\OTA\Type\TicketingInfoType\TicketAdvisoryAType[] $ticketAdvisory
     */
    private $ticketAdvisory = [
        
    ];

    /**
     * The vendor that issues or services the ticket.
     *
     * @var \Recranet\OTA\Type\TicketingInfoType\TicketingVendorAType $ticketingVendor
     */
    private $ticketingVendor = null;

    /**
     * The system that priced the itinerary for this ticket.
     *
     * @var \Recranet\OTA\Type\TicketingInfoType\PricingSystemAType $pricingSystem
     */
    private $pricingSystem = null;

    /**
     * The total price paid for this ticket.
     *
     * @var \Recranet\OTA\Type\TicketingInfoType\TotalFareAType $totalFare
     */
    private $totalFare = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as ticketTimeLimit
     *
     * TicketTimeLimit - Indicates the ticketing arrangement, and allows for the requirement that an itinerary must be ticketed by a certain date and time.
     *
     * @return \DateTime
     */
    public function getTicketTimeLimit()
    {
        return $this->ticketTimeLimit;
    }

    /**
     * Sets a new ticketTimeLimit
     *
     * TicketTimeLimit - Indicates the ticketing arrangement, and allows for the requirement that an itinerary must be ticketed by a certain date and time.
     *
     * @param \DateTime $ticketTimeLimit
     * @return self
     */
    public function setTicketTimeLimit(\DateTime $ticketTimeLimit)
    {
        $this->ticketTimeLimit = $ticketTimeLimit;
        return $this;
    }

    /**
     * Gets as cancelOnExpiryInd
     *
     * When true, unticketed bookings should be cancelled when the TicketTimeLimit has expired.
     *
     * @return bool
     */
    public function getCancelOnExpiryInd()
    {
        return $this->cancelOnExpiryInd;
    }

    /**
     * Sets a new cancelOnExpiryInd
     *
     * When true, unticketed bookings should be cancelled when the TicketTimeLimit has expired.
     *
     * @param bool $cancelOnExpiryInd
     * @return self
     */
    public function setCancelOnExpiryInd($cancelOnExpiryInd)
    {
        $this->cancelOnExpiryInd = $cancelOnExpiryInd;
        return $this;
    }

    /**
     * Gets as ticketType
     *
     * TicketType - Indicates the type of ticket (Paper, eTicket).
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Sets a new ticketType
     *
     * TicketType - Indicates the type of ticket (Paper, eTicket).
     *
     * @param string $ticketType
     * @return self
     */
    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;
        return $this;
    }

    /**
     * Gets as ticketingStatus
     *
     * Code for setting and displaying detailed ticketing information. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @return string
     */
    public function getTicketingStatus()
    {
        return $this->ticketingStatus;
    }

    /**
     * Sets a new ticketingStatus
     *
     * Code for setting and displaying detailed ticketing information. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @param string $ticketingStatus
     * @return self
     */
    public function setTicketingStatus($ticketingStatus)
    {
        $this->ticketingStatus = $ticketingStatus;
        return $this;
    }

    /**
     * Adds as flightSegmentRefNumber
     *
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @return self
     * @param string $flightSegmentRefNumber
     */
    public function addToFlightSegmentRefNumber($flightSegmentRefNumber)
    {
        $this->flightSegmentRefNumber[] = $flightSegmentRefNumber;
        return $this;
    }

    /**
     * isset flightSegmentRefNumber
     *
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightSegmentRefNumber($index)
    {
        return isset($this->flightSegmentRefNumber[$index]);
    }

    /**
     * unset flightSegmentRefNumber
     *
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightSegmentRefNumber($index)
    {
        unset($this->flightSegmentRefNumber[$index]);
    }

    /**
     * Gets as flightSegmentRefNumber
     *
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @return string[]
     */
    public function getFlightSegmentRefNumber()
    {
        return $this->flightSegmentRefNumber;
    }

    /**
     * Sets a new flightSegmentRefNumber
     *
     * Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     *
     * @param string $flightSegmentRefNumber
     * @return self
     */
    public function setFlightSegmentRefNumber(array $flightSegmentRefNumber)
    {
        $this->flightSegmentRefNumber = $flightSegmentRefNumber;
        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @return self
     * @param string $travelerRefNumber
     */
    public function addToTravelerRefNumber($travelerRefNumber)
    {
        $this->travelerRefNumber[] = $travelerRefNumber;
        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @return string[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     *
     * @param string $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Gets as reverseTktgSegmentsInd
     *
     * Applies a reverse sequence of the outbound travel to the inbound travel.
     *
     * @return bool
     */
    public function getReverseTktgSegmentsInd()
    {
        return $this->reverseTktgSegmentsInd;
    }

    /**
     * Sets a new reverseTktgSegmentsInd
     *
     * Applies a reverse sequence of the outbound travel to the inbound travel.
     *
     * @param bool $reverseTktgSegmentsInd
     * @return self
     */
    public function setReverseTktgSegmentsInd($reverseTktgSegmentsInd)
    {
        $this->reverseTktgSegmentsInd = $reverseTktgSegmentsInd;
        return $this;
    }

    /**
     * Gets as pseudoCityCode
     *
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->pseudoCityCode;
    }

    /**
     * Sets a new pseudoCityCode
     *
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @param string $pseudoCityCode
     * @return self
     */
    public function setPseudoCityCode($pseudoCityCode)
    {
        $this->pseudoCityCode = $pseudoCityCode;
        return $this;
    }

    /**
     * Gets as requestedTicketingDate
     *
     * The date on which ticketing should occur.
     *
     * @return \DateTime
     */
    public function getRequestedTicketingDate()
    {
        return $this->requestedTicketingDate;
    }

    /**
     * Sets a new requestedTicketingDate
     *
     * The date on which ticketing should occur.
     *
     * @param \DateTime $requestedTicketingDate
     * @return self
     */
    public function setRequestedTicketingDate(\DateTime $requestedTicketingDate)
    {
        $this->requestedTicketingDate = $requestedTicketingDate;
        return $this;
    }

    /**
     * Gets as timeLimitMinutes
     *
     * The number of minutes until the ticket must be issued for the itinerary.
     *
     * @return int
     */
    public function getTimeLimitMinutes()
    {
        return $this->timeLimitMinutes;
    }

    /**
     * Sets a new timeLimitMinutes
     *
     * The number of minutes until the ticket must be issued for the itinerary.
     *
     * @param int $timeLimitMinutes
     * @return self
     */
    public function setTimeLimitMinutes($timeLimitMinutes)
    {
        $this->timeLimitMinutes = $timeLimitMinutes;
        return $this;
    }

    /**
     * Gets as bookingChangeType
     *
     * Indicates that the booking has changed since this ticket was issued and the two are no longer in sync and identifies what has changed in the booking.
     *
     * @return string
     */
    public function getBookingChangeType()
    {
        return $this->bookingChangeType;
    }

    /**
     * Sets a new bookingChangeType
     *
     * Indicates that the booking has changed since this ticket was issued and the two are no longer in sync and identifies what has changed in the booking.
     *
     * @param string $bookingChangeType
     * @return self
     */
    public function setBookingChangeType($bookingChangeType)
    {
        $this->bookingChangeType = $bookingChangeType;
        return $this;
    }

    /**
     * Gets as ticketDocumentNbr
     *
     * The ticket document number including the airline code, the form code, and the serial number.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * The ticket document number including the airline code, the form code, and the serial number.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the ticketing-relevant type of traveler that has been quoted (e.g., MIL, CHD, INF, SEN).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Code used to indicate the ticketing-relevant type of traveler that has been quoted (e.g., MIL, CHD, INF, SEN).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as miscTicketingCode
     *
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @return self
     * @param string $miscTicketingCode
     */
    public function addToMiscTicketingCode($miscTicketingCode)
    {
        $this->miscTicketingCode[] = $miscTicketingCode;
        return $this;
    }

    /**
     * isset miscTicketingCode
     *
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMiscTicketingCode($index)
    {
        return isset($this->miscTicketingCode[$index]);
    }

    /**
     * unset miscTicketingCode
     *
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMiscTicketingCode($index)
    {
        unset($this->miscTicketingCode[$index]);
    }

    /**
     * Gets as miscTicketingCode
     *
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @return string[]
     */
    public function getMiscTicketingCode()
    {
        return $this->miscTicketingCode;
    }

    /**
     * Sets a new miscTicketingCode
     *
     * Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     *
     * @param string $miscTicketingCode
     * @return self
     */
    public function setMiscTicketingCode(array $miscTicketingCode)
    {
        $this->miscTicketingCode = $miscTicketingCode;
        return $this;
    }

    /**
     * Adds as ticketAdvisory
     *
     * Open text field available for additional ticket information.
     *
     * @return self
     * @param \Recranet\OTA\Type\TicketingInfoType\TicketAdvisoryAType $ticketAdvisory
     */
    public function addToTicketAdvisory(\Recranet\OTA\Type\TicketingInfoType\TicketAdvisoryAType $ticketAdvisory)
    {
        $this->ticketAdvisory[] = $ticketAdvisory;
        return $this;
    }

    /**
     * isset ticketAdvisory
     *
     * Open text field available for additional ticket information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketAdvisory($index)
    {
        return isset($this->ticketAdvisory[$index]);
    }

    /**
     * unset ticketAdvisory
     *
     * Open text field available for additional ticket information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketAdvisory($index)
    {
        unset($this->ticketAdvisory[$index]);
    }

    /**
     * Gets as ticketAdvisory
     *
     * Open text field available for additional ticket information.
     *
     * @return \Recranet\OTA\Type\TicketingInfoType\TicketAdvisoryAType[]
     */
    public function getTicketAdvisory()
    {
        return $this->ticketAdvisory;
    }

    /**
     * Sets a new ticketAdvisory
     *
     * Open text field available for additional ticket information.
     *
     * @param \Recranet\OTA\Type\TicketingInfoType\TicketAdvisoryAType[] $ticketAdvisory
     * @return self
     */
    public function setTicketAdvisory(array $ticketAdvisory = null)
    {
        $this->ticketAdvisory = $ticketAdvisory;
        return $this;
    }

    /**
     * Gets as ticketingVendor
     *
     * The vendor that issues or services the ticket.
     *
     * @return \Recranet\OTA\Type\TicketingInfoType\TicketingVendorAType
     */
    public function getTicketingVendor()
    {
        return $this->ticketingVendor;
    }

    /**
     * Sets a new ticketingVendor
     *
     * The vendor that issues or services the ticket.
     *
     * @param \Recranet\OTA\Type\TicketingInfoType\TicketingVendorAType $ticketingVendor
     * @return self
     */
    public function setTicketingVendor(?\Recranet\OTA\Type\TicketingInfoType\TicketingVendorAType $ticketingVendor = null)
    {
        $this->ticketingVendor = $ticketingVendor;
        return $this;
    }

    /**
     * Gets as pricingSystem
     *
     * The system that priced the itinerary for this ticket.
     *
     * @return \Recranet\OTA\Type\TicketingInfoType\PricingSystemAType
     */
    public function getPricingSystem()
    {
        return $this->pricingSystem;
    }

    /**
     * Sets a new pricingSystem
     *
     * The system that priced the itinerary for this ticket.
     *
     * @param \Recranet\OTA\Type\TicketingInfoType\PricingSystemAType $pricingSystem
     * @return self
     */
    public function setPricingSystem(?\Recranet\OTA\Type\TicketingInfoType\PricingSystemAType $pricingSystem = null)
    {
        $this->pricingSystem = $pricingSystem;
        return $this;
    }

    /**
     * Gets as totalFare
     *
     * The total price paid for this ticket.
     *
     * @return \Recranet\OTA\Type\TicketingInfoType\TotalFareAType
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * The total price paid for this ticket.
     *
     * @param \Recranet\OTA\Type\TicketingInfoType\TotalFareAType $totalFare
     * @return self
     */
    public function setTotalFare(?\Recranet\OTA\Type\TicketingInfoType\TotalFareAType $totalFare = null)
    {
        $this->totalFare = $totalFare;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

