<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FlightSegmentType
 *
 * FlightSegmentType extends FlightSegmentBaseType to provide additional functionality.
 * XSD Type: FlightSegmentType
 */
class FlightSegmentType extends FlightSegmentBaseType
{
    /**
     * The flight number of the flight. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @var string $flightNumber
     */
    private $flightNumber = null;

    /**
     * ID of a flight in the Tour Operator's inventory. This flight is not necessarily in the inventory of an airline. Rather, it is a code created by tour operators.
     *
     * @var string $tourOperatorFlightID
     */
    private $tourOperatorFlightID = null;

    /**
     * When true, indicates that the flight is subject to government approval.
     *
     * @var bool $governmentApprovalInd
     */
    private $governmentApprovalInd = null;

    /**
     * Provides additional information concerning the flight being subject to government approval.
     *
     * @var string $governmentApprovalText
     */
    private $governmentApprovalText = null;

    /**
     * The quantity of flown miles associated with this segment.
     *
     * @var int $flownMileageQty
     */
    private $flownMileageQty = null;

    /**
     * The fare basis code for this flight leg.
     *
     * @var string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Specific Booking Class for this segment.
     *
     * @var string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * The marketing airline. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @var \Recranet\OTA\Type\FlightSegmentType\MarketingAirlineAType $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Gets as flightNumber
     *
     * The flight number of the flight. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The flight number of the flight. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }

    /**
     * Gets as tourOperatorFlightID
     *
     * ID of a flight in the Tour Operator's inventory. This flight is not necessarily in the inventory of an airline. Rather, it is a code created by tour operators.
     *
     * @return string
     */
    public function getTourOperatorFlightID()
    {
        return $this->tourOperatorFlightID;
    }

    /**
     * Sets a new tourOperatorFlightID
     *
     * ID of a flight in the Tour Operator's inventory. This flight is not necessarily in the inventory of an airline. Rather, it is a code created by tour operators.
     *
     * @param string $tourOperatorFlightID
     * @return self
     */
    public function setTourOperatorFlightID($tourOperatorFlightID)
    {
        $this->tourOperatorFlightID = $tourOperatorFlightID;
        return $this;
    }

    /**
     * Gets as governmentApprovalInd
     *
     * When true, indicates that the flight is subject to government approval.
     *
     * @return bool
     */
    public function getGovernmentApprovalInd()
    {
        return $this->governmentApprovalInd;
    }

    /**
     * Sets a new governmentApprovalInd
     *
     * When true, indicates that the flight is subject to government approval.
     *
     * @param bool $governmentApprovalInd
     * @return self
     */
    public function setGovernmentApprovalInd($governmentApprovalInd)
    {
        $this->governmentApprovalInd = $governmentApprovalInd;
        return $this;
    }

    /**
     * Gets as governmentApprovalText
     *
     * Provides additional information concerning the flight being subject to government approval.
     *
     * @return string
     */
    public function getGovernmentApprovalText()
    {
        return $this->governmentApprovalText;
    }

    /**
     * Sets a new governmentApprovalText
     *
     * Provides additional information concerning the flight being subject to government approval.
     *
     * @param string $governmentApprovalText
     * @return self
     */
    public function setGovernmentApprovalText($governmentApprovalText)
    {
        $this->governmentApprovalText = $governmentApprovalText;
        return $this;
    }

    /**
     * Gets as flownMileageQty
     *
     * The quantity of flown miles associated with this segment.
     *
     * @return int
     */
    public function getFlownMileageQty()
    {
        return $this->flownMileageQty;
    }

    /**
     * Sets a new flownMileageQty
     *
     * The quantity of flown miles associated with this segment.
     *
     * @param int $flownMileageQty
     * @return self
     */
    public function setFlownMileageQty($flownMileageQty)
    {
        $this->flownMileageQty = $flownMileageQty;
        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * The fare basis code for this flight leg.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * The fare basis code for this flight leg.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;
        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Specific Booking Class for this segment.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * Specific Booking Class for this segment.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;
        return $this;
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @return \Recranet\OTA\Type\FlightSegmentType\MarketingAirlineAType
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     *
     * @param \Recranet\OTA\Type\FlightSegmentType\MarketingAirlineAType $marketingAirline
     * @return self
     */
    public function setMarketingAirline(?\Recranet\OTA\Type\FlightSegmentType\MarketingAirlineAType $marketingAirline = null)
    {
        $this->marketingAirline = $marketingAirline;
        return $this;
    }
}

