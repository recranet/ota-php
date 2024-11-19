<?php

namespace Recranet\OTA\SourceType;

/**
 * Class representing BookingChannelAType
 */
class BookingChannelAType
{
    /**
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative Distribution System (ADS), Sales and Catering System (SCS), Property Management System (PMS), Central Reservation System (CRS), Tour Operator System (TOS), Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @var bool $primary
     */
    private $primary = null;

    /**
     * Identifies the company that is associated with the booking channel.
     *
     * @var \Recranet\OTA\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as type
     *
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative Distribution System (ADS), Sales and Catering System (SCS), Property Management System (PMS), Central Reservation System (CRS), Tour Operator System (TOS), Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative Distribution System (ADS), Sales and Catering System (SCS), Property Management System (PMS), Central Reservation System (CRS), Tour Operator System (TOS), Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as primary
     *
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @param bool $primary
     * @return self
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Identifies the company that is associated with the booking channel.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies the company that is associated with the booking channel.
     *
     * @param \Recranet\OTA\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\CompanyNameType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

