<?php

namespace Recranet\OTA\HotelRoomListType\GuestsAType;

use Recranet\OTA\ContactPersonType;

/**
 * Class representing GuestAType
 */
class GuestAType extends ContactPersonType
{
    /**
     * This attributes indicates the change in status of the guest.
     *
     * @var string $guestAction
     */
    private $guestAction = null;

    /**
     * Indicates whether to send the printed confirmation.
     *
     * @var bool $printConfoInd
     */
    private $printConfoInd = null;

    /**
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @var \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[] $loyalty
     */
    private $loyalty = [
        
    ];

    /**
     * Guarantee or Payment information for an individual guest.
     *
     * @var \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[] $guaranteePayment
     */
    private $guaranteePayment = [
        
    ];

    /**
     * @var \Recranet\OTA\AdditionalDetailType[] $additionalDetails
     */
    private $additionalDetails = null;

    /**
     * Gets as guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @return string
     */
    public function getGuestAction()
    {
        return $this->guestAction;
    }

    /**
     * Sets a new guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @param string $guestAction
     * @return self
     */
    public function setGuestAction($guestAction)
    {
        $this->guestAction = $guestAction;
        return $this;
    }

    /**
     * Gets as printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @return bool
     */
    public function getPrintConfoInd()
    {
        return $this->printConfoInd;
    }

    /**
     * Sets a new printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @param bool $printConfoInd
     * @return self
     */
    public function setPrintConfoInd($printConfoInd)
    {
        $this->printConfoInd = $printConfoInd;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType $loyalty
     */
    public function addToLoyalty(\Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType $loyalty)
    {
        $this->loyalty[] = $loyalty;
        return $this;
    }

    /**
     * isset loyalty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[] $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty = null)
    {
        $this->loyalty = $loyalty;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToGuaranteePayment(\Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->guaranteePayment[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePayment($index)
    {
        return isset($this->guaranteePayment[$index]);
    }

    /**
     * unset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePayment($index)
    {
        unset($this->guaranteePayment[$index]);
    }

    /**
     * Gets as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[]
     */
    public function getGuaranteePayment()
    {
        return $this->guaranteePayment;
    }

    /**
     * Sets a new guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[] $guaranteePayment
     * @return self
     */
    public function setGuaranteePayment(array $guaranteePayment = null)
    {
        $this->guaranteePayment = $guaranteePayment;
        return $this;
    }

    /**
     * Adds as additionalDetail
     *
     * @return self
     * @param \Recranet\OTA\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetails(\Recranet\OTA\AdditionalDetailType $additionalDetail)
    {
        $this->additionalDetails[] = $additionalDetail;
        return $this;
    }

    /**
     * isset additionalDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDetails($index)
    {
        return isset($this->additionalDetails[$index]);
    }

    /**
     * unset additionalDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDetails($index)
    {
        unset($this->additionalDetails[$index]);
    }

    /**
     * Gets as additionalDetails
     *
     * @return \Recranet\OTA\AdditionalDetailType[]
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * Sets a new additionalDetails
     *
     * @param \Recranet\OTA\AdditionalDetailType[] $additionalDetails
     * @return self
     */
    public function setAdditionalDetails(array $additionalDetails = null)
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }
}

