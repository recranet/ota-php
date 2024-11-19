<?php

namespace Recranet\OTA;

/**
 * Class representing VerificationType
 *
 * Collection of data used to ensure the correct reservation is canceled or modified (e.g. in the case of a hotel reservation modification, a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
 * XSD Type: VerificationType
 */
class VerificationType
{
    /**
     * Detailed name information.
     *
     * @var \Recranet\OTA\VerificationType\PersonNameAType $personName
     */
    private $personName = null;

    /**
     * Information on an email address.
     *
     * @var \Recranet\OTA\EmailType $email
     */
    private $email = null;

    /**
     * Information on a telephone number.
     *
     * @var \Recranet\OTA\VerificationType\TelephoneInfoAType $telephoneInfo
     */
    private $telephoneInfo = null;

    /**
     * Payment Card information.
     *
     * @var \Recranet\OTA\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Detailed information on an address.
     *
     * @var \Recranet\OTA\AddressInfoType $addressInfo
     */
    private $addressInfo = null;

    /**
     * Loyalty program information.
     *
     * @var \Recranet\OTA\VerificationType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Vendor or vendors associated with the reservation.
     *
     * @var \Recranet\OTA\CompanyNameType[] $vendor
     */
    private $vendor = [
        
    ];

    /**
     * The start and end date of the reservation.
     *
     * @var \Recranet\OTA\VerificationType\ReservationTimeSpanAType $reservationTimeSpan
     */
    private $reservationTimeSpan = null;

    /**
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @var \Recranet\OTA\VerificationType\AssociatedQuantityAType[] $associatedQuantity
     */
    private $associatedQuantity = [
        
    ];

    /**
     * Start location associated with the reservation.
     *
     * @var \Recranet\OTA\VerificationType\StartLocationAType $startLocation
     */
    private $startLocation = null;

    /**
     * End location associated with the reservation.
     *
     * @var \Recranet\OTA\VerificationType\EndLocationAType $endLocation
     */
    private $endLocation = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as personName
     *
     * Detailed name information.
     *
     * @return \Recranet\OTA\VerificationType\PersonNameAType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Detailed name information.
     *
     * @param \Recranet\OTA\VerificationType\PersonNameAType $personName
     * @return self
     */
    public function setPersonName(?\Recranet\OTA\VerificationType\PersonNameAType $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as email
     *
     * Information on an email address.
     *
     * @return \Recranet\OTA\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address.
     *
     * @param \Recranet\OTA\EmailType $email
     * @return self
     */
    public function setEmail(?\Recranet\OTA\EmailType $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number.
     *
     * @return \Recranet\OTA\VerificationType\TelephoneInfoAType
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number.
     *
     * @param \Recranet\OTA\VerificationType\TelephoneInfoAType $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(?\Recranet\OTA\VerificationType\TelephoneInfoAType $telephoneInfo = null)
    {
        $this->telephoneInfo = $telephoneInfo;
        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * Payment Card information.
     *
     * @return \Recranet\OTA\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * Payment Card information.
     *
     * @param \Recranet\OTA\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(?\Recranet\OTA\PaymentCardType $paymentCard = null)
    {
        $this->paymentCard = $paymentCard;
        return $this;
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address.
     *
     * @return \Recranet\OTA\AddressInfoType
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address.
     *
     * @param \Recranet\OTA\AddressInfoType $addressInfo
     * @return self
     */
    public function setAddressInfo(?\Recranet\OTA\AddressInfoType $addressInfo = null)
    {
        $this->addressInfo = $addressInfo;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Loyalty program information.
     *
     * @return self
     * @param \Recranet\OTA\VerificationType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Recranet\OTA\VerificationType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Loyalty program information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Loyalty program information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Loyalty program information.
     *
     * @return \Recranet\OTA\VerificationType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Loyalty program information.
     *
     * @param \Recranet\OTA\VerificationType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty = null)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Adds as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNameType $vendor
     */
    public function addToVendor(\Recranet\OTA\CompanyNameType $vendor)
    {
        $this->vendor[] = $vendor;
        return $this;
    }

    /**
     * isset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendor($index)
    {
        return isset($this->vendor[$index]);
    }

    /**
     * unset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendor($index)
    {
        unset($this->vendor[$index]);
    }

    /**
     * Gets as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return \Recranet\OTA\CompanyNameType[]
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param \Recranet\OTA\CompanyNameType[] $vendor
     * @return self
     */
    public function setVendor(array $vendor = null)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @return \Recranet\OTA\VerificationType\ReservationTimeSpanAType
     */
    public function getReservationTimeSpan()
    {
        return $this->reservationTimeSpan;
    }

    /**
     * Sets a new reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @param \Recranet\OTA\VerificationType\ReservationTimeSpanAType $reservationTimeSpan
     * @return self
     */
    public function setReservationTimeSpan(?\Recranet\OTA\VerificationType\ReservationTimeSpanAType $reservationTimeSpan = null)
    {
        $this->reservationTimeSpan = $reservationTimeSpan;
        return $this;
    }

    /**
     * Adds as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @return self
     * @param \Recranet\OTA\VerificationType\AssociatedQuantityAType $associatedQuantity
     */
    public function addToAssociatedQuantity(\Recranet\OTA\VerificationType\AssociatedQuantityAType $associatedQuantity)
    {
        $this->associatedQuantity[] = $associatedQuantity;
        return $this;
    }

    /**
     * isset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssociatedQuantity($index)
    {
        return isset($this->associatedQuantity[$index]);
    }

    /**
     * unset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssociatedQuantity($index)
    {
        unset($this->associatedQuantity[$index]);
    }

    /**
     * Gets as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @return \Recranet\OTA\VerificationType\AssociatedQuantityAType[]
     */
    public function getAssociatedQuantity()
    {
        return $this->associatedQuantity;
    }

    /**
     * Sets a new associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param \Recranet\OTA\VerificationType\AssociatedQuantityAType[] $associatedQuantity
     * @return self
     */
    public function setAssociatedQuantity(array $associatedQuantity = null)
    {
        $this->associatedQuantity = $associatedQuantity;
        return $this;
    }

    /**
     * Gets as startLocation
     *
     * Start location associated with the reservation.
     *
     * @return \Recranet\OTA\VerificationType\StartLocationAType
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    /**
     * Sets a new startLocation
     *
     * Start location associated with the reservation.
     *
     * @param \Recranet\OTA\VerificationType\StartLocationAType $startLocation
     * @return self
     */
    public function setStartLocation(?\Recranet\OTA\VerificationType\StartLocationAType $startLocation = null)
    {
        $this->startLocation = $startLocation;
        return $this;
    }

    /**
     * Gets as endLocation
     *
     * End location associated with the reservation.
     *
     * @return \Recranet\OTA\VerificationType\EndLocationAType
     */
    public function getEndLocation()
    {
        return $this->endLocation;
    }

    /**
     * Sets a new endLocation
     *
     * End location associated with the reservation.
     *
     * @param \Recranet\OTA\VerificationType\EndLocationAType $endLocation
     * @return self
     */
    public function setEndLocation(?\Recranet\OTA\VerificationType\EndLocationAType $endLocation = null)
    {
        $this->endLocation = $endLocation;
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

