<?php

namespace Recranet\OTA\Type;

/**
 * Class representing InvBlockType
 *
 * Used to define the details of an inventory block.
 * XSD Type: InvBlockType
 */
class InvBlockType
{
    /**
     * Provides information as to whether the rooms are available for booking.
     *
     * @var string $bookingStatus
     */
    private $bookingStatus = null;

    /**
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @var string $invBlockTypeCode
     */
    private $invBlockTypeCode = null;

    /**
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @var string $invBlockGroupingCode
     */
    private $invBlockGroupingCode = null;

    /**
     * This is the short name of the Inventory Block.
     *
     * @var string $invBlockName
     */
    private $invBlockName = null;

    /**
     * This is the full name of the Inventory Block.
     *
     * @var string $invBlockLongName
     */
    private $invBlockLongName = null;

    /**
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @var string $invBlockStatusCode
     */
    private $invBlockStatusCode = null;

    /**
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @var string $pMSInvBlockID
     */
    private $pMSInvBlockID = null;

    /**
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @var string $opportunityID
     */
    private $opportunityID = null;

    /**
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @var string $invBlockCompanyID
     */
    private $invBlockCompanyID = null;

    /**
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @var string[] $restrictedBookingCodeList
     */
    private $restrictedBookingCodeList = null;

    /**
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @var string[] $restrictedViewingCodeList
     */
    private $restrictedViewingCodeList = null;

    /**
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @var string $transactionAction
     */
    private $transactionAction = null;

    /**
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @var string $transactionDetail
     */
    private $transactionDetail = null;

    /**
     * This identifies a specific quote for an inventory block.
     *
     * @var string $quoteID
     */
    private $quoteID = null;

    /**
     * This is used to identify the hotel to which the block applies.
     *
     * @var \Recranet\OTA\Type\InvBlockType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * This is used to indicate the date or date range applicable to this inventory block.
     *
     * @var \Recranet\OTA\Type\InvBlockType\InvBlockDatesAType $invBlockDates
     */
    private $invBlockDates = null;

    /**
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @var \Recranet\OTA\Type\InvBlockRoomType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * This is used to indicate the reservation and billing methods for a single inventory block.
     *
     * @var \Recranet\OTA\Type\InvBlockType\MethodInfoAType $methodInfo
     */
    private $methodInfo = null;

    /**
     * Collection of free form information about the inventory block.
     *
     * @var \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescriptions
     */
    private $blockDescriptions = null;

    /**
     * A collection of contacts.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @var string[] $destinationSystemCodes
     */
    private $destinationSystemCodes = null;

    /**
     * Tax information for the entire group.
     *
     * @var \Recranet\OTA\Type\InvBlockType\TaxInformationAType $taxInformation
     */
    private $taxInformation = null;

    /**
     * Gets as bookingStatus
     *
     * Provides information as to whether the rooms are available for booking.
     *
     * @return string
     */
    public function getBookingStatus()
    {
        return $this->bookingStatus;
    }

    /**
     * Sets a new bookingStatus
     *
     * Provides information as to whether the rooms are available for booking.
     *
     * @param string $bookingStatus
     * @return self
     */
    public function setBookingStatus($bookingStatus)
    {
        $this->bookingStatus = $bookingStatus;
        return $this;
    }

    /**
     * Gets as invBlockTypeCode
     *
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @return string
     */
    public function getInvBlockTypeCode()
    {
        return $this->invBlockTypeCode;
    }

    /**
     * Sets a new invBlockTypeCode
     *
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @param string $invBlockTypeCode
     * @return self
     */
    public function setInvBlockTypeCode($invBlockTypeCode)
    {
        $this->invBlockTypeCode = $invBlockTypeCode;
        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;
        return $this;
    }

    /**
     * Gets as invBlockGroupingCode
     *
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @return string
     */
    public function getInvBlockGroupingCode()
    {
        return $this->invBlockGroupingCode;
    }

    /**
     * Sets a new invBlockGroupingCode
     *
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @param string $invBlockGroupingCode
     * @return self
     */
    public function setInvBlockGroupingCode($invBlockGroupingCode)
    {
        $this->invBlockGroupingCode = $invBlockGroupingCode;
        return $this;
    }

    /**
     * Gets as invBlockName
     *
     * This is the short name of the Inventory Block.
     *
     * @return string
     */
    public function getInvBlockName()
    {
        return $this->invBlockName;
    }

    /**
     * Sets a new invBlockName
     *
     * This is the short name of the Inventory Block.
     *
     * @param string $invBlockName
     * @return self
     */
    public function setInvBlockName($invBlockName)
    {
        $this->invBlockName = $invBlockName;
        return $this;
    }

    /**
     * Gets as invBlockLongName
     *
     * This is the full name of the Inventory Block.
     *
     * @return string
     */
    public function getInvBlockLongName()
    {
        return $this->invBlockLongName;
    }

    /**
     * Sets a new invBlockLongName
     *
     * This is the full name of the Inventory Block.
     *
     * @param string $invBlockLongName
     * @return self
     */
    public function setInvBlockLongName($invBlockLongName)
    {
        $this->invBlockLongName = $invBlockLongName;
        return $this;
    }

    /**
     * Gets as invBlockStatusCode
     *
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @return string
     */
    public function getInvBlockStatusCode()
    {
        return $this->invBlockStatusCode;
    }

    /**
     * Sets a new invBlockStatusCode
     *
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @param string $invBlockStatusCode
     * @return self
     */
    public function setInvBlockStatusCode($invBlockStatusCode)
    {
        $this->invBlockStatusCode = $invBlockStatusCode;
        return $this;
    }

    /**
     * Gets as pMSInvBlockID
     *
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @return string
     */
    public function getPMSInvBlockID()
    {
        return $this->pMSInvBlockID;
    }

    /**
     * Sets a new pMSInvBlockID
     *
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @param string $pMSInvBlockID
     * @return self
     */
    public function setPMSInvBlockID($pMSInvBlockID)
    {
        $this->pMSInvBlockID = $pMSInvBlockID;
        return $this;
    }

    /**
     * Gets as opportunityID
     *
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @return string
     */
    public function getOpportunityID()
    {
        return $this->opportunityID;
    }

    /**
     * Sets a new opportunityID
     *
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @param string $opportunityID
     * @return self
     */
    public function setOpportunityID($opportunityID)
    {
        $this->opportunityID = $opportunityID;
        return $this;
    }

    /**
     * Gets as invBlockCompanyID
     *
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @return string
     */
    public function getInvBlockCompanyID()
    {
        return $this->invBlockCompanyID;
    }

    /**
     * Sets a new invBlockCompanyID
     *
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @param string $invBlockCompanyID
     * @return self
     */
    public function setInvBlockCompanyID($invBlockCompanyID)
    {
        $this->invBlockCompanyID = $invBlockCompanyID;
        return $this;
    }

    /**
     * Adds as restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @return self
     * @param string $restrictedBookingCodeList
     */
    public function addToRestrictedBookingCodeList($restrictedBookingCodeList)
    {
        $this->restrictedBookingCodeList[] = $restrictedBookingCodeList;
        return $this;
    }

    /**
     * isset restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictedBookingCodeList($index)
    {
        return isset($this->restrictedBookingCodeList[$index]);
    }

    /**
     * unset restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictedBookingCodeList($index)
    {
        unset($this->restrictedBookingCodeList[$index]);
    }

    /**
     * Gets as restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @return string[]
     */
    public function getRestrictedBookingCodeList()
    {
        return $this->restrictedBookingCodeList;
    }

    /**
     * Sets a new restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param string $restrictedBookingCodeList
     * @return self
     */
    public function setRestrictedBookingCodeList(array $restrictedBookingCodeList)
    {
        $this->restrictedBookingCodeList = $restrictedBookingCodeList;
        return $this;
    }

    /**
     * Adds as restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @return self
     * @param string $restrictedViewingCodeList
     */
    public function addToRestrictedViewingCodeList($restrictedViewingCodeList)
    {
        $this->restrictedViewingCodeList[] = $restrictedViewingCodeList;
        return $this;
    }

    /**
     * isset restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictedViewingCodeList($index)
    {
        return isset($this->restrictedViewingCodeList[$index]);
    }

    /**
     * unset restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictedViewingCodeList($index)
    {
        unset($this->restrictedViewingCodeList[$index]);
    }

    /**
     * Gets as restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @return string[]
     */
    public function getRestrictedViewingCodeList()
    {
        return $this->restrictedViewingCodeList;
    }

    /**
     * Sets a new restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param string $restrictedViewingCodeList
     * @return self
     */
    public function setRestrictedViewingCodeList(array $restrictedViewingCodeList)
    {
        $this->restrictedViewingCodeList = $restrictedViewingCodeList;
        return $this;
    }

    /**
     * Gets as transactionAction
     *
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @return string
     */
    public function getTransactionAction()
    {
        return $this->transactionAction;
    }

    /**
     * Sets a new transactionAction
     *
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @param string $transactionAction
     * @return self
     */
    public function setTransactionAction($transactionAction)
    {
        $this->transactionAction = $transactionAction;
        return $this;
    }

    /**
     * Gets as transactionDetail
     *
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @return string
     */
    public function getTransactionDetail()
    {
        return $this->transactionDetail;
    }

    /**
     * Sets a new transactionDetail
     *
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @param string $transactionDetail
     * @return self
     */
    public function setTransactionDetail($transactionDetail)
    {
        $this->transactionDetail = $transactionDetail;
        return $this;
    }

    /**
     * Gets as quoteID
     *
     * This identifies a specific quote for an inventory block.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * This identifies a specific quote for an inventory block.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * This is used to identify the hotel to which the block applies.
     *
     * @return \Recranet\OTA\Type\InvBlockType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * This is used to identify the hotel to which the block applies.
     *
     * @param \Recranet\OTA\Type\InvBlockType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\InvBlockType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }

    /**
     * Gets as invBlockDates
     *
     * This is used to indicate the date or date range applicable to this inventory block.
     *
     * @return \Recranet\OTA\Type\InvBlockType\InvBlockDatesAType
     */
    public function getInvBlockDates()
    {
        return $this->invBlockDates;
    }

    /**
     * Sets a new invBlockDates
     *
     * This is used to indicate the date or date range applicable to this inventory block.
     *
     * @param \Recranet\OTA\Type\InvBlockType\InvBlockDatesAType $invBlockDates
     * @return self
     */
    public function setInvBlockDates(?\Recranet\OTA\Type\InvBlockType\InvBlockDatesAType $invBlockDates = null)
    {
        $this->invBlockDates = $invBlockDates;
        return $this;
    }

    /**
     * Adds as roomType
     *
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockRoomType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\Type\InvBlockRoomType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @return \Recranet\OTA\Type\InvBlockRoomType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * This allows for multiple room types to be defined within an inventory block.
     *
     * @param \Recranet\OTA\Type\InvBlockRoomType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Gets as methodInfo
     *
     * This is used to indicate the reservation and billing methods for a single inventory block.
     *
     * @return \Recranet\OTA\Type\InvBlockType\MethodInfoAType
     */
    public function getMethodInfo()
    {
        return $this->methodInfo;
    }

    /**
     * Sets a new methodInfo
     *
     * This is used to indicate the reservation and billing methods for a single inventory block.
     *
     * @param \Recranet\OTA\Type\InvBlockType\MethodInfoAType $methodInfo
     * @return self
     */
    public function setMethodInfo(?\Recranet\OTA\Type\InvBlockType\MethodInfoAType $methodInfo = null)
    {
        $this->methodInfo = $methodInfo;
        return $this;
    }

    /**
     * Adds as blockDescription
     *
     * Collection of free form information about the inventory block.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription
     */
    public function addToBlockDescriptions(\Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription)
    {
        $this->blockDescriptions[] = $blockDescription;
        return $this;
    }

    /**
     * isset blockDescriptions
     *
     * Collection of free form information about the inventory block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlockDescriptions($index)
    {
        return isset($this->blockDescriptions[$index]);
    }

    /**
     * unset blockDescriptions
     *
     * Collection of free form information about the inventory block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlockDescriptions($index)
    {
        unset($this->blockDescriptions[$index]);
    }

    /**
     * Gets as blockDescriptions
     *
     * Collection of free form information about the inventory block.
     *
     * @return \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     */
    public function getBlockDescriptions()
    {
        return $this->blockDescriptions;
    }

    /**
     * Sets a new blockDescriptions
     *
     * Collection of free form information about the inventory block.
     *
     * @param \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescriptions
     * @return self
     */
    public function setBlockDescriptions(array $blockDescriptions = null)
    {
        $this->blockDescriptions = $blockDescriptions;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemCodes($destinationSystemCode)
    {
        $this->destinationSystemCodes[] = $destinationSystemCode;
        return $this;
    }

    /**
     * isset destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationSystemCodes($index)
    {
        return isset($this->destinationSystemCodes[$index]);
    }

    /**
     * unset destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationSystemCodes($index)
    {
        unset($this->destinationSystemCodes[$index]);
    }

    /**
     * Gets as destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @return string[]
     */
    public function getDestinationSystemCodes()
    {
        return $this->destinationSystemCodes;
    }

    /**
     * Sets a new destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this inventory block is targeted.
     *
     * @param string $destinationSystemCodes
     * @return self
     */
    public function setDestinationSystemCodes(array $destinationSystemCodes = null)
    {
        $this->destinationSystemCodes = $destinationSystemCodes;
        return $this;
    }

    /**
     * Gets as taxInformation
     *
     * Tax information for the entire group.
     *
     * @return \Recranet\OTA\Type\InvBlockType\TaxInformationAType
     */
    public function getTaxInformation()
    {
        return $this->taxInformation;
    }

    /**
     * Sets a new taxInformation
     *
     * Tax information for the entire group.
     *
     * @param \Recranet\OTA\Type\InvBlockType\TaxInformationAType $taxInformation
     * @return self
     */
    public function setTaxInformation(?\Recranet\OTA\Type\InvBlockType\TaxInformationAType $taxInformation = null)
    {
        $this->taxInformation = $taxInformation;
        return $this;
    }
}

