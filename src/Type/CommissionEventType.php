<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CommissionEventType
 *
 * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
 * XSD Type: CommissionEventType
 */
class CommissionEventType
{
    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * @var string $confirmationID
     */
    private $confirmationID = null;

    /**
     * @var string $confirmationOriginatorCode
     */
    private $confirmationOriginatorCode = null;

    /**
     * @var string $commissionOriginatorCode
     */
    private $commissionOriginatorCode = null;

    /**
     * @var string $reservationID
     */
    private $reservationID = null;

    /**
     * @var \DateTime $originalBookingDate
     */
    private $originalBookingDate = null;

    /**
     * Indicates the preferred currency of the commission to be paid.
     *
     * @var string $preferredPaymentCurrency
     */
    private $preferredPaymentCurrency = null;

    /**
     * @var string $marketCode
     */
    private $marketCode = null;

    /**
     * @var string $bookingSource
     */
    private $bookingSource = null;

    /**
     * @var int $numberOfRooms
     */
    private $numberOfRooms = null;

    /**
     * @var string $roomInventoryCode
     */
    private $roomInventoryCode = null;

    /**
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The ProfileCertification element identifies the travel agency to be paid by providing the IATA number or ARC certifying number. (Implementation note: This attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @var \Recranet\OTA\Type\ProfileCertificationType $profileCertification
     */
    private $profileCertification = null;

    /**
     * A collection of profiles.
     *
     * @var \Recranet\OTA\Type\ProfileType[] $profiles
     */
    private $profiles = null;

    /**
     * @var \Recranet\OTA\Type\PersonNameType $payee
     */
    private $payee = null;

    /**
     * @var \Recranet\OTA\Type\AddressType $payeeAddress
     */
    private $payeeAddress = null;

    /**
     * A collection of Commission elements.
     *
     * @var \Recranet\OTA\Type\CommissionType[] $commissions
     */
    private $commissions = null;

    /**
     * A collection of guest names.
     *
     * @var \Recranet\OTA\Type\PersonNameType[] $guestNames
     */
    private $guestNames = null;

    /**
     * The hotel reference identifies the specific hotel for which the commission applies.
     *
     * @var \Recranet\OTA\Type\CommissionEventType\HotelReferenceAType $hotelReference
     */
    private $hotelReference = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as confirmationID
     *
     * @return string
     */
    public function getConfirmationID()
    {
        return $this->confirmationID;
    }

    /**
     * Sets a new confirmationID
     *
     * @param string $confirmationID
     * @return self
     */
    public function setConfirmationID($confirmationID)
    {
        $this->confirmationID = $confirmationID;
        return $this;
    }

    /**
     * Gets as confirmationOriginatorCode
     *
     * @return string
     */
    public function getConfirmationOriginatorCode()
    {
        return $this->confirmationOriginatorCode;
    }

    /**
     * Sets a new confirmationOriginatorCode
     *
     * @param string $confirmationOriginatorCode
     * @return self
     */
    public function setConfirmationOriginatorCode($confirmationOriginatorCode)
    {
        $this->confirmationOriginatorCode = $confirmationOriginatorCode;
        return $this;
    }

    /**
     * Gets as commissionOriginatorCode
     *
     * @return string
     */
    public function getCommissionOriginatorCode()
    {
        return $this->commissionOriginatorCode;
    }

    /**
     * Sets a new commissionOriginatorCode
     *
     * @param string $commissionOriginatorCode
     * @return self
     */
    public function setCommissionOriginatorCode($commissionOriginatorCode)
    {
        $this->commissionOriginatorCode = $commissionOriginatorCode;
        return $this;
    }

    /**
     * Gets as reservationID
     *
     * @return string
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * @param string $reservationID
     * @return self
     */
    public function setReservationID($reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as originalBookingDate
     *
     * @return \DateTime
     */
    public function getOriginalBookingDate()
    {
        return $this->originalBookingDate;
    }

    /**
     * Sets a new originalBookingDate
     *
     * @param \DateTime $originalBookingDate
     * @return self
     */
    public function setOriginalBookingDate(\DateTime $originalBookingDate)
    {
        $this->originalBookingDate = $originalBookingDate;
        return $this;
    }

    /**
     * Gets as preferredPaymentCurrency
     *
     * Indicates the preferred currency of the commission to be paid.
     *
     * @return string
     */
    public function getPreferredPaymentCurrency()
    {
        return $this->preferredPaymentCurrency;
    }

    /**
     * Sets a new preferredPaymentCurrency
     *
     * Indicates the preferred currency of the commission to be paid.
     *
     * @param string $preferredPaymentCurrency
     * @return self
     */
    public function setPreferredPaymentCurrency($preferredPaymentCurrency)
    {
        $this->preferredPaymentCurrency = $preferredPaymentCurrency;
        return $this;
    }

    /**
     * Gets as marketCode
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * @param string $marketCode
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;
        return $this;
    }

    /**
     * Gets as bookingSource
     *
     * @return string
     */
    public function getBookingSource()
    {
        return $this->bookingSource;
    }

    /**
     * Sets a new bookingSource
     *
     * @param string $bookingSource
     * @return self
     */
    public function setBookingSource($bookingSource)
    {
        $this->bookingSource = $bookingSource;
        return $this;
    }

    /**
     * Gets as numberOfRooms
     *
     * @return int
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * Sets a new numberOfRooms
     *
     * @param int $numberOfRooms
     * @return self
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
        return $this;
    }

    /**
     * Gets as roomInventoryCode
     *
     * @return string
     */
    public function getRoomInventoryCode()
    {
        return $this->roomInventoryCode;
    }

    /**
     * Sets a new roomInventoryCode
     *
     * @param string $roomInventoryCode
     * @return self
     */
    public function setRoomInventoryCode($roomInventoryCode)
    {
        $this->roomInventoryCode = $roomInventoryCode;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as profileCertification
     *
     * The ProfileCertification element identifies the travel agency to be paid by providing the IATA number or ARC certifying number. (Implementation note: This attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @return \Recranet\OTA\Type\ProfileCertificationType
     */
    public function getProfileCertification()
    {
        return $this->profileCertification;
    }

    /**
     * Sets a new profileCertification
     *
     * The ProfileCertification element identifies the travel agency to be paid by providing the IATA number or ARC certifying number. (Implementation note: This attribute is optional, but if it is not set, the Profile attribute must be set.)
     *
     * @param \Recranet\OTA\Type\ProfileCertificationType $profileCertification
     * @return self
     */
    public function setProfileCertification(?\Recranet\OTA\Type\ProfileCertificationType $profileCertification = null)
    {
        $this->profileCertification = $profileCertification;
        return $this;
    }

    /**
     * Adds as profile
     *
     * A collection of profiles.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfileType $profile
     */
    public function addToProfiles(\Recranet\OTA\Type\ProfileType $profile)
    {
        $this->profiles[] = $profile;
        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profiles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * A collection of profiles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * A collection of profiles.
     *
     * @return \Recranet\OTA\Type\ProfileType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profiles.
     *
     * @param \Recranet\OTA\Type\ProfileType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Gets as payee
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * @param \Recranet\OTA\Type\PersonNameType $payee
     * @return self
     */
    public function setPayee(?\Recranet\OTA\Type\PersonNameType $payee = null)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as payeeAddress
     *
     * @return \Recranet\OTA\Type\AddressType
     */
    public function getPayeeAddress()
    {
        return $this->payeeAddress;
    }

    /**
     * Sets a new payeeAddress
     *
     * @param \Recranet\OTA\Type\AddressType $payeeAddress
     * @return self
     */
    public function setPayeeAddress(?\Recranet\OTA\Type\AddressType $payeeAddress = null)
    {
        $this->payeeAddress = $payeeAddress;
        return $this;
    }

    /**
     * Adds as commission
     *
     * A collection of Commission elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\CommissionType $commission
     */
    public function addToCommissions(\Recranet\OTA\Type\CommissionType $commission)
    {
        $this->commissions[] = $commission;
        return $this;
    }

    /**
     * isset commissions
     *
     * A collection of Commission elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommissions($index)
    {
        return isset($this->commissions[$index]);
    }

    /**
     * unset commissions
     *
     * A collection of Commission elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommissions($index)
    {
        unset($this->commissions[$index]);
    }

    /**
     * Gets as commissions
     *
     * A collection of Commission elements.
     *
     * @return \Recranet\OTA\Type\CommissionType[]
     */
    public function getCommissions()
    {
        return $this->commissions;
    }

    /**
     * Sets a new commissions
     *
     * A collection of Commission elements.
     *
     * @param \Recranet\OTA\Type\CommissionType[] $commissions
     * @return self
     */
    public function setCommissions(array $commissions = null)
    {
        $this->commissions = $commissions;
        return $this;
    }

    /**
     * Adds as guestName
     *
     * A collection of guest names.
     *
     * @return self
     * @param \Recranet\OTA\Type\PersonNameType $guestName
     */
    public function addToGuestNames(\Recranet\OTA\Type\PersonNameType $guestName)
    {
        $this->guestNames[] = $guestName;
        return $this;
    }

    /**
     * isset guestNames
     *
     * A collection of guest names.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestNames($index)
    {
        return isset($this->guestNames[$index]);
    }

    /**
     * unset guestNames
     *
     * A collection of guest names.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestNames($index)
    {
        unset($this->guestNames[$index]);
    }

    /**
     * Gets as guestNames
     *
     * A collection of guest names.
     *
     * @return \Recranet\OTA\Type\PersonNameType[]
     */
    public function getGuestNames()
    {
        return $this->guestNames;
    }

    /**
     * Sets a new guestNames
     *
     * A collection of guest names.
     *
     * @param \Recranet\OTA\Type\PersonNameType[] $guestNames
     * @return self
     */
    public function setGuestNames(array $guestNames = null)
    {
        $this->guestNames = $guestNames;
        return $this;
    }

    /**
     * Gets as hotelReference
     *
     * The hotel reference identifies the specific hotel for which the commission applies.
     *
     * @return \Recranet\OTA\Type\CommissionEventType\HotelReferenceAType
     */
    public function getHotelReference()
    {
        return $this->hotelReference;
    }

    /**
     * Sets a new hotelReference
     *
     * The hotel reference identifies the specific hotel for which the commission applies.
     *
     * @param \Recranet\OTA\Type\CommissionEventType\HotelReferenceAType $hotelReference
     * @return self
     */
    public function setHotelReference(?\Recranet\OTA\Type\CommissionEventType\HotelReferenceAType $hotelReference = null)
    {
        $this->hotelReference = $hotelReference;
        return $this;
    }
}

